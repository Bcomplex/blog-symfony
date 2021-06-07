<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index( ): Response
    {
        $posts = $this->getDoctrine()->getRepository(Blog::class)->findAll();

        return $this->render('blog/blog.html.twig', [
          "posts"=>$posts
        ]);
    }
    /**
     * @Route("/post-{id}", name="blog_page")
     */
    public function readPost($id){
        $post = $this->getDoctrine()->getRepository(Blog::class)->find($id);

        return $this->render('blog/read.html.twig', [
            'post'=>$post


        ]);

    }
}
