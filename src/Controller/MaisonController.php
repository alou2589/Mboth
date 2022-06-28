<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Entity\Personne;
use App\Form\MaisonType;
use App\Form\CodeMaisonType;
use App\Service\QrCodeService;
use App\Form\MaisonPersonneType;
use App\Repository\EleveRepository;
use App\Repository\MaisonRepository;
use App\Repository\PersonneRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/maison')]
class MaisonController extends AbstractController
{
    #[Route('/', name: 'app_maison_index', methods: ['GET'])]
    public function index(MaisonRepository $maisonRepository): Response
    {
        return $this->render('maison/index.html.twig', [
            'maisons' => $maisonRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_maison_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MaisonRepository $maisonRepository, QrCodeService $qrcodeservice): Response
    {
        $maison = new Maison();        
        $qr_code=null;
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);
        $code_maison="";
        if ($form->isSubmitted() && $form->isValid()) {
            $secteur=strtoupper(substr($maison->getSecteur()->getNomSecteur(),0,3));
            $cellule= $maison->getSecteur()->getCellule()->getNomCellule();
            $quartier= $maison->getSecteur()->getCellule()->getQuartier()->getNomQuartier();
            $house=$quartier." ".$cellule;
            $code_maison= implode('', array_map(function($p) { return strtoupper($p[0]); }, explode(' ', $house)));
            $code=strtoupper(substr($code_maison.''.$secteur.''.md5(random_int(0,9999)),0,10));
            $maison->setQrMaison((string)$qr_code);
            $maison->setUpdatedAt(new \DateTimeImmutable());
            $maison->setCreatedAt(new \DateTimeImmutable());
            $maison->setCodeMaison($code);
            $maisonRepository->add($maison);            
            $qr_code=$qrcodeservice->qrcode($maison->getId().'/codevalidationmaison',$maison->getId());
            $maison->setQrMaison((string)$qr_code);
            $maisonRepository->add($maison);    
            return $this->redirectToRoute('app_maison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maison/new.html.twig', [
            'maison' => $maison,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_maison_show', methods: ['GET'])]
    public function show(Maison $maison): Response
    {
        return $this->render('maison/show.html.twig', [
            'maison' => $maison,
        ]);
    }
    #[Route('/{id}/showcode', name: 'app_maison_show_code', methods: ['GET'])]
    public function showcode(Maison $maison): Response
    {
        return $this->render('maison/showcode.html.twig', [
            'maison' => $maison,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_maison_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Maison $maison, MaisonRepository $maisonRepository): Response
    {
        $form = $this->createForm(MaisonType::class, $maison);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $maison->setCreatedAt(new \DateTimeImmutable());
            $maisonRepository->add($maison);
            return $this->redirectToRoute('app_maison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maison/edit.html.twig', [
            'maison' => $maison,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_maison_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Maison $maison, MaisonRepository $maisonRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maison->getId(), $request->request->get('_token'))) {
            $maisonRepository->remove($maison);
            return $this->redirectToRoute('app_maison_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('maison/delete.html.twig',[
            'maison'=>$maison
        ]);

        
    }
    #[Route('/{id}/listepersonne', name: 'app_maison_liste_personne', methods: ['GET'])]
    public function listepersonne(Maison $maison): Response
    {
        $personnes=$maison->getPersonnes();
        return $this->render('maison/listepersonne.html.twig', [
            'personnes'=>$personnes,
            'maison'=>$maison
        ]);
    }

    #[Route('/{id}/newpersonne', name: 'app_maison_new_personne', methods: ['GET', 'POST'])]
    public function new_personne(Request $request, Maison $maison, PersonneRepository $personneRepository): Response
    {
        $personne=new Personne();
        $form = $this->createForm(MaisonPersonneType::class, $personne);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $personne->setUpdatedAt(new \DateTimeImmutable());
            $personne->setCreatedAt(new \DateTimeImmutable());
            $personne->setMaison($maison);
            $personneRepository->add($personne);
            return $this->redirectToRoute('app_maison_liste_personne', ['id'=>$maison->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maison/newpersonne.html.twig', [
            'maison' => $maison,
            'personne'=>$personne,
            'form' => $form,
        ]);
    }

    #[Route("/{id}/maison/education",name:"app_maison_education", methods: ['GET'])]
    public function education(Maison $maison, PersonneRepository $personneRepository)
    {
        $personnes=$maison->getPersonnes();

        return $this->render('maison/education.html.twig',[
            'personnes'=>$personnes,
            'maison'=>$maison
        ]);
    }

    
    #[Route('/{id}/codevalidationmaison', name: 'app_maison_codevalidation', methods: ['GET', 'POST'])]
    public function codevalidation(Request $request,Maison $maison): Response
    {
        $codemaison=$maison->getCodeMaison();
        $form = $this->createForm(CodeMaisonType::class, null);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $data=$form->getData();
            if (strtolower($data['code'])==strtolower($codemaison)) {
                # code...
                return $this->redirectToRoute('app_maison_information', ['id'=>$maison->getId()], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->renderForm('maison/codevalidationmaison.html.twig', [
            'maison' => $maison,
            'form' => $form
        ]);
    }

    #[Route('/{id}',name:'app_maison_information',methods:['GET'])]
    public function infomaison(Maison $maison)
    {
        return $this->render('maison/infomaison.html.twig', [
            'maison' => $maison,
        ]);        
    }
}
