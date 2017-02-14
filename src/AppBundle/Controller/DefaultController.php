<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
        
        
    }
     /**
     * @Route("/save", name="traitement")
     */

    public function savemessage(Request $traitement) {
        
        $entitymanager = $this->getDoctrine()->getManager();
        $pseudo = $traitement->get('pseudo');
        $message = $traitement->get('message');
        $msg = new \AppBundle\Entity\Messages();
        
        
        $msg->setMessage($message);
        $msg->setAuteur($pseudo);
        
        $entitymanager->persist($message);
        
        
        
        
        return null;
         
         
         
    }
    
    }
