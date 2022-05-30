<?php

namespace App\Controller;

use App\Entity\Ecole;
use App\Entity\Classe;
use App\Form\EcoleType;
use App\Form\EcoleClasseType;
use App\Repository\EcoleRepository;
use App\Repository\EleveRepository;
use App\Repository\ClasseRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin/ecole')]
class EcoleController extends AbstractController
{
    #[Route('/', name: 'app_ecole_index', methods: ['GET'])]
    public function index(EcoleRepository $ecoleRepository): Response
    {
        return $this->render('ecole/index.html.twig', [
            'ecoles' => $ecoleRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ecole_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EcoleRepository $ecoleRepository): Response
    {
        $ecole = new Ecole();
        $form = $this->createForm(EcoleType::class, $ecole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ecole->setUpdatedAt(new \DateTimeImmutable());
            $ecole->setCreatedAt(new \DateTimeImmutable());
            $ecoleRepository->add($ecole);
            return $this->redirectToRoute('app_ecole_show', ['id'=>$ecole->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ecole/new.html.twig', [
            'ecole' => $ecole,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ecole_show', methods: ['GET'])]
    public function show(Ecole $ecole): Response
    {
        return $this->render('ecole/show.html.twig', [
            'ecole' => $ecole,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ecole_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ecole $ecole, EcoleRepository $ecoleRepository): Response
    {
        $form = $this->createForm(EcoleType::class, $ecole);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ecole->setUpdatedAt(new \DateTimeImmutable());
            $ecoleRepository->add($ecole);
            return $this->redirectToRoute('app_ecole_show', ['id'=>$ecole->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ecole/edit.html.twig', [
            'ecole' => $ecole,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_ecole_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Ecole $ecole, EcoleRepository $ecoleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ecole->getId(), $request->request->get('_token'))) {
            $ecoleRepository->remove($ecole);
            return $this->redirectToRoute('app_ecole_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('ecole/delete.html.twig',[
            'ecole'=>$ecole,
        ]);
    }

    

    #[Route('/{id}/listeclasse', name: 'app_ecole_liste_classe', methods: ['GET'])]
    public function listeclasse(Ecole $ecole): Response
    {
        $classes=$ecole->getNiveauEtude()->getClasses();
        return $this->render('ecole/listeclasse.html.twig', [
            'classes'=>$classes,
            'ecole'=>$ecole
        ]);
    }

    #[Route('/{id}/newclasse', name: 'app_ecole_new_classe', methods: ['GET', 'POST'])]
    public function newclasse(Request $request, Ecole $ecole, ClasseRepository $classeRepository): Response
    {
        $classe=new Classe();
        $form = $this->createForm(EcoleClasseType::class, $classe);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $classe->setUpdatedAt(new \DateTimeImmutable());
            $classe->setCreatedAt(new \DateTimeImmutable());
            $classe->setNiveauEtude($ecole->getNiveauEtude());
            $classeRepository->add($classe);
            return $this->redirectToRoute('app_ecole_liste_classe', ['id'=>$ecole->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ecole/newclasse.html.twig', [
            'ecole' => $ecole,
            'classe'=>$classe,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/classe/{id_classe}/listeeleve', name:'app_ecole_liste_eleve', methods: ['GET'])]
    public function students(Ecole $ecole, $id_classe, ClasseRepository $classeRepository)
    {
        $classe=$classeRepository->find($id_classe);
        $eleves=$ecole->getEleves();
        return $this->render('ecole/listeeleve.html.twig',[
            'eleves'=>$eleves,
            'classe'=>$classe,
            'ecole'=>$ecole
        ]);
    }

}
