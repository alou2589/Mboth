<?php

namespace App\Controller;

use App\Entity\Maladie;
use App\Entity\TypeMaladie;
use App\Form\TypeMaladieType;
use App\Form\TypeMaladieMaladieType;
use App\Repository\MaladieRepository;
use App\Repository\TypeMaladieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/type/maladie')]
class TypeMaladieController extends AbstractController
{
    #[Route('/', name: 'app_type_maladie_index', methods: ['GET'])]
    public function index(TypeMaladieRepository $typeMaladieRepository): Response
    {
        return $this->render('type_maladie/index.html.twig', [
            'type_maladies' => $typeMaladieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_type_maladie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeMaladieRepository $typeMaladieRepository): Response
    {
        $typeMaladie = new TypeMaladie();
        $form = $this->createForm(TypeMaladieType::class, $typeMaladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeMaladie->setUpdatedAt(new \DateTimeImmutable());
            $typeMaladie->setCreatedAt(new \DateTimeImmutable());
            $typeMaladieRepository->add($typeMaladie, true);

            return $this->redirectToRoute('app_type_maladie_show', ['id'=>$typeMaladie->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_maladie/new.html.twig', [
            'type_maladie' => $typeMaladie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_maladie_show', methods: ['GET'])]
    public function show(TypeMaladie $typeMaladie): Response
    {
        return $this->render('type_maladie/show.html.twig', [
            'type_maladie' => $typeMaladie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_type_maladie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeMaladie $typeMaladie, TypeMaladieRepository $typeMaladieRepository): Response
    {
        $form = $this->createForm(TypeMaladieType::class, $typeMaladie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeMaladie->setUpdatedAt(new \DateTimeImmutable());
            $typeMaladieRepository->add($typeMaladie, true);

            return $this->redirectToRoute('app_type_maladie_show', ['id'=>$typeMaladie->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_maladie/edit.html.twig', [
            'type_maladie' => $typeMaladie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_type_maladie_delete', methods: ['POST'])]
    public function delete(Request $request, TypeMaladie $typeMaladie, TypeMaladieRepository $typeMaladieRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeMaladie->getId(), $request->request->get('_token'))) {
            $typeMaladieRepository->remove($typeMaladie, true);
            return $this->redirectToRoute('app_type_maladie_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('type_maladie/delete.html.twig',[
            
        ]);        
    }
        
    #[Route('/{id}/listearbre', name: 'app_type_maladie_liste_maladie', methods: ['GET'])]
    public function listearbre(TypeMaladie $type_maladie): Response
    {
        $maladies=$type_maladie->getMaladies();
        return $this->render('type_maladie/listearbre.html.twig', [
            'maladies'=>$maladies,
            'type_maladie'=>$type_maladie
        ]);
    }
    
    #[Route('/{id}/newmaladie', name: 'app_type_maladie_new_maladie', methods: ['GET', 'POST'])]
    public function new_maladie(Request $request, TypeMaladie $type_maladie, MaladieRepository $maladieRepository): Response
    {
        $maladie=new Maladie();
        $form = $this->createForm(TypeMaladieMaladieType::class, $maladie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $maladie->setUpdatedAt(new \DateTimeImmutable());
            $maladie->setCreatedAt(new \DateTimeImmutable());
            $maladie->setTypeMaladie($type_maladie);
            $maladieRepository->add($maladie, true);
            return $this->redirectToRoute('app_type_maladie_liste_maladie', ['id'=>$type_maladie->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_maladie/newmaladie.html.twig', [
            'type_maladie' => $type_maladie,
            'maladie'=>$maladie,
            'form' => $form,
        ]);
    }
}
