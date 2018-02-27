<?php

namespace vallbona\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('vallbonawebBundle:Default:index.html.twig');
    }


    public function articlesAction()
    {
        return $this->render('vallbonawebBundle:Default:articles.html.twig');
    }

    public function articlesDetallAction($id)
    {

    	$articles[] =array("id"=>"1", 'nom'=>"Articulo de prueba no 1","content"=>"Esto es un contenido de prueba");
		$articles[] =array("id"=>"2", 'nom'=>"Tus muelas","content"=>"Esto es un contenido de prueba");

		foreach($articles as $article){
			if($article["id"] == $id){
				$articleSend = $article;
			}
		}

		return $this->render('vallbonawebBundle:Default:articles_detall.html.twig', ['article'=>$articleSend]);
    }
}
