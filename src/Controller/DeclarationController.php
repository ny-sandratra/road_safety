<?php

namespace App\Controller;

use App\Entity\Declaration;
use App\Form\DeclarationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/declaration")
 */

class DeclarationController extends AbstractController
{
    /**
     * @Route("/", name="declaration")
     */
    public function index( Request $request, EntityManagerInterface $entity): Response
    {
        $declaration = new Declaration();
        $form = $this -> createForm(DeclarationType::class, $declaration);
        $form->handleRequest($request);

        if($form->isSubmitted()&&$form->isValid()){
            $entity->persist($declaration);
            $entity->flush();

            return $this->redirectToRoute('home', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('declaration/index.html.twig', [
            'declaration '=> $declaration,
            'form'=> $form,
        ]);
    }
}
