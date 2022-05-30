<?php

namespace App\Controller;

use App\Entity\Eleve;
use App\Entity\Classe;
use App\Form\ClasseType;
use App\Form\ClasseEleveType;
use App\Repository\EleveRepository;
use App\Repository\ClasseRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/classe')]
class ClasseController extends AbstractController
{
    #[Route('/', name: 'app_classe_index', methods: ['GET'])]
    public function index(ClasseRepository $classeRepository): Response
    {
        return $this->render('classe/index.html.twig', [
            'classes' => $classeRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_classe_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ClasseRepository $classeRepository): Response
    {
        $classe = new Classe();
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $classe->setUpdatedAt(new \DateTimeImmutable());
            $classe->setCreatedAt(new \DateTimeImmutable());
            $classeRepository->add($classe);
            return $this->redirectToRoute('app_classe_show', ['id'=>$classe->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('classe/new.html.twig', [
            'classe' => $classe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_classe_show', methods: ['GET'])]
    public function show(Classe $classe): Response
    {
        $classe->setUpdatedAt(new \DateTimeImmutable());
        return $this->render('classe/show.html.twig', [
            'classe' => $classe,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_classe_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Classe $classe, ClasseRepository $classeRepository): Response
    {
        $form = $this->createForm(ClasseType::class, $classe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $classeRepository->add($classe);
            return $this->redirectToRoute('app_classe_show', ['id'=>$classe->getId()],  Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('classe/edit.html.twig', [
            'classe' => $classe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_classe_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Classe $classe, ClasseRepository $classeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$classe->getId(), $request->request->get('_token'))) {
            $classeRepository->remove($classe);
            return $this->redirectToRoute('app_classe_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('classe/delete.html.twig',[
            'classe'=>$classe
        ]);
    }

    #[Route('/{id}/listeeleve', name: 'app_classe_liste_eleve', methods: ['GET'])]
    public function listeeleve(Classe $classe): Response
    {
        $eleves=$classe->getEleves();
        return $this->render('classe/listeeleve.html.twig', [
            'eleves'=>$eleves,
            'classe'=>$classe
        ]);
    }

    #[Route('/{id}/neweleve', name: 'app_classe_new_eleve', methods: ['GET', 'POST'])]
    public function neweleve(Request $request, Classe $classe, EleveRepository $eleveRepository): Response
    {
        $eleve=new Eleve();
        $form = $this->createForm(ClasseEleveType::class, $eleve);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $eleve->setUpdatedAt(new \DateTimeImmutable());
            $eleve->setCreatedAt(new \DateTimeImmutable());
            $eleve->setClasse($classe);
            $eleveRepository->add($eleve);
            return $this->redirectToRoute('app_classe_liste_eleve', ['id'=>$classe->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('classe/neweleve.html.twig', [
            'classe' => $classe,
            'eleve'=>$eleve,
            'form' => $form,
        ]);
    }
}
