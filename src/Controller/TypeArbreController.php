<?php

namespace App\Controller;

use App\Entity\Arbre;
use App\Entity\TypeArbre;
use App\Form\TypeArbreType;
use App\Form\TypeArbreArbreType;
use App\Repository\ArbreRepository;
use App\Repository\TypeArbreRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/type/arbre')]
class TypeArbreController extends AbstractController
{
    #[Route('/', name: 'app_type_arbre_index', methods: ['GET'])]
    public function index(TypeArbreRepository $typeArbreRepository): Response
    {
        return $this->render('type_arbre/index.html.twig', [
            'type_arbres' => $typeArbreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_type_arbre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeArbreRepository $typeArbreRepository): Response
    {
        $typeArbre = new TypeArbre();
        $form = $this->createForm(TypeArbreType::class, $typeArbre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeArbre->setUpdatedAt(new \DateTimeImmutable());
            $typeArbre->setCreatedAt(new \DateTimeImmutable());
            $typeArbreRepository->add($typeArbre, true);

            return $this->redirectToRoute('app_type_arbre_show', ['id'=>$typeArbre->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_arbre/new.html.twig', [
            'type_arbre' => $typeArbre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_arbre_show', methods: ['GET'])]
    public function show(TypeArbre $typeArbre): Response
    {
        return $this->render('type_arbre/show.html.twig', [
            'type_arbre' => $typeArbre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_type_arbre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeArbre $typeArbre, TypeArbreRepository $typeArbreRepository): Response
    {
        $form = $this->createForm(TypeArbreType::class, $typeArbre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeArbre->setUpdatedAt(new \DateTimeImmutable());
            $typeArbreRepository->add($typeArbre, true);

            return $this->redirectToRoute('app_type_arbre_show', ['id'=>$typeArbre->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_arbre/edit.html.twig', [
            'type_arbre' => $typeArbre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_type_arbre_delete', methods: ['POST'])]
    public function delete(Request $request, TypeArbre $typeArbre, TypeArbreRepository $typeArbreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeArbre->getId(), $request->request->get('_token'))) {
            $typeArbreRepository->remove($typeArbre, true);
            return $this->redirectToRoute('app_type_arbre_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('type_arbre/delete.html.twig',[
            
        ]);        
    }
        
    #[Route('/{id}/listearbre', name: 'app_type_arbre_liste_arbre', methods: ['GET'])]
    public function listearbre(TypeArbre $type_arbre): Response
    {
        $arbres=$type_arbre->getArbres();
        return $this->render('type_arbre/listearbre.html.twig', [
            'arbres'=>$arbres,
            'type_arbre'=>$type_arbre
        ]);
    }
    
    #[Route('/{id}/newarbre', name: 'app_type_arbre_new_arbre', methods: ['GET', 'POST'])]
    public function new_arbre(Request $request, TypeArbre $type_arbre, ArbreRepository $arbreRepository): Response
    {
        $arbre=new Arbre();
        $form = $this->createForm(TypeArbreArbreType::class, $arbre);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arbre->setUpdatedAt(new \DateTimeImmutable());
            $arbre->setCreatedAt(new \DateTimeImmutable());
            $arbre->setTypeArbre($type_arbre);
            $arbreRepository->add($arbre, true);
            return $this->redirectToRoute('app_type_arbre_liste_arbre', ['id'=>$type_arbre->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_arbre/newarbre.html.twig', [
            'type_arbre' => $type_arbre,
            'arbre'=>$arbre,
            'form' => $form,
        ]);
    }
}
