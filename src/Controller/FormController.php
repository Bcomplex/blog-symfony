<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Form\PostType;
//use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class FormController extends AbstractController
{
    /**
     * @Route("/form", name="form")
     */
    public function index(Request $request): Response
    {
    $post = new Blog();
    $form=$this->createForm(PostType::class,$post,[
        'action'=>$this->generateUrl('form'),
            ]);


        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            var_dump($post);
            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();
            unset($post);
        }
        return $this->render('form/form.html.twig', [
            'post_form' =>$form->createView()
        ]);
    }
}

