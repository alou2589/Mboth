<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\Classe;
use App\Entity\NiveauEtude;
use App\Form\NiveauEtudeType;
use App\Form\NiveauEtudeEcoleType;
use App\Form\NiveauEtudeClasseType;
use App\Repository\EcoleRepository;
use App\Repository\ClasseRepository;
use App\Repository\NiveauEtudeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/niveauetude')]
class NiveauEtudeController extends AbstractController
{
    #[Route('/', name: 'app_niveau_etude_index', methods: ['GET'])]
    public function index(NiveauEtudeRepository $niveauEtudeRepository): Response
    {
        return $this->render('niveau_etude/index.html.twig', [
            'niveau_etudes' => $niveauEtudeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_niveau_etude_new', methods: ['GET', 'POST'])]
    public function new(Request $request, NiveauEtudeRepository $niveauEtudeRepository): Response
    {
        $niveauEtude = new NiveauEtude();
        $form = $this->createForm(NiveauEtudeType::class, $niveauEtude);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $niveauEtude->setUpdatedAt(new \DateTimeImmutable());
            $niveauEtude->setCreatedAt(new \DateTimeImmutable());
            $niveauEtudeRepository->add($niveauEtude);
            return $this->redirectToRoute('app_niveau_etude_show', ['id'=>$niveauEtude->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('niveau_etude/new.html.twig', [
            'niveau_etude' => $niveauEtude,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_niveau_etude_show', methods: ['GET'])]
    public function show(NiveauEtude $niveauEtude): Response
    {
        return $this->render('niveau_etude/show.html.twig', [
            'niveau_etude' => $niveauEtude,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_niveau_etude_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NiveauEtude $niveauEtude, NiveauEtudeRepository $niveauEtudeRepository): Response
    {
        $form = $this->createForm(NiveauEtudeType::class, $niveauEtude);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $niveauEtude->setUpdatedAt(new \DateTimeImmutable());
            $niveauEtudeRepository->add($niveauEtude);
            return $this->redirectToRoute('app_niveau_etude_show', ['id'=>$niveauEtude->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('niveau_etude/edit.html.twig', [
            'niveau_etude' => $niveauEtude,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_niveau_etude_delete', methods: ['POST'])]
    public function delete(Request $request, NiveauEtude $niveauEtude, NiveauEtudeRepository $niveauEtudeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$niveauEtude->getId(), $request->request->get('_token'))) {
            $niveauEtudeRepository->remove($niveauEtude);
            return $this->redirectToRoute('app_niveau_etude_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('niveau_etude/delete.html.twig',[
            'niveau_etude'=>$niveauEtude,
        ]);
        
    }
    #[Route('/{id}/listeecole', name: 'app_niveau_etude_liste_ecole', methods: ['GET'])]
    public function listeecole(NiveauEtude $niveau_etude): Response
    {
        $ecoles=$niveau_etude->getEcoles();
        return $this->render('niveau_etude/listeecole.html.twig', [
            'ecoles'=>$ecoles,
            'niveau_etude'=>$niveau_etude
        ]);
    }

    #[Route('/{id}/newecole', name: 'app_niveau_etude_new_ecole', methods: ['GET', 'POST'])]
    public function newecole(Request $request, NiveauEtude $niveau_etude, EcoleRepository $ecoleRepository): Response
    {
        $ecole=new Ecole();
        $form = $this->createForm(NiveauEtudeEcoleType::class, $ecole);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ecole->setUpdatedAt(new \DateTimeImmutable());
            $ecole->setCreatedAt(new \DateTimeImmutable());
            $ecole->setNiveauEtude($niveau_etude);
            $ecoleRepository->add($ecole);
            return $this->redirectToRoute('app_niveau_etude_liste_ecole', ['id'=>$niveau_etude->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('niveau_etude/newecole.html.twig', [
            'niveau_etude' => $niveau_etude,
            'ecole'=>$ecole,
            'form' => $form,
        ]);
    }

}
