<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Blog;

class HomeController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
    public function index(): Response
    {
//        $post = new Blog();
//        $post->setTitle('Ahoj');
//        $post->setContent('This is shit');
//
//        $em = $this->getDoctrine()->getManager();
//        $retrivedPost = $em->getRepository(BLog::class )->findOneBy([
//            'id'=> 1
//        ]);
//
//        $em->persist($post);
//        $em->flush();
//        var_dump($retrivedPost);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            // render post form database
//            'post'=>$retrivedPost,
        ]);

    }


}
