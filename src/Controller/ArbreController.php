<?php

namespace App\Controller;

use App\Entity\Arbre;
use App\Form\ArbreType;
use App\Repository\ArbreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/arbre')]
class ArbreController extends AbstractController
{
    #[Route('/', name: 'app_arbre_index', methods: ['GET'])]
    public function index(ArbreRepository $arbreRepository): Response
    {
        return $this->render('arbre/index.html.twig', [
            'arbres' => $arbreRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_arbre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ArbreRepository $arbreRepository): Response
    {
        $arbre = new Arbre();
        $form = $this->createForm(ArbreType::class, $arbre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $arbre->setUpdatedAt(new \DateTimeImmutable());
            $arbre->setCreatedAt(new \DateTimeImmutable());
            $arbreRepository->add($arbre, true);

            return $this->redirectToRoute('app_arbre_show', ['id'=>$arbre->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('arbre/new.html.twig', [
            'arbre' => $arbre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_arbre_show', methods: ['GET'])]
    public function show(Arbre $arbre): Response
    {
        return $this->render('arbre/show.html.twig', [
            'arbre' => $arbre,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_arbre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Arbre $arbre, ArbreRepository $arbreRepository): Response
    {
        $form = $this->createForm(ArbreType::class, $arbre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $arbre->setUpdatedAt(new \DateTimeImmutable());
            $arbreRepository->add($arbre, true);

            return $this->redirectToRoute('app_arbre_show', ['id'=>$arbre->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('arbre/edit.html.twig', [
            'arbre' => $arbre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_arbre_delete', methods: ['GET','POST'])]
    public function delete(Request $request, Arbre $arbre, ArbreRepository $arbreRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$arbre->getId(), $request->request->get('_token'))) {
            $arbreRepository->remove($arbre, true);
            return $this->redirectToRoute('app_arbre_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->render('arbre/delete.html.twig',[
            'arbre'=>$arbre
        ]);
        
    }
}
