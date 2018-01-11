<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RoutesController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render("index.html.twig", array("navid" => 0));
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render("about.html.twig", array("navid" => 1));
    }
    
    /**
     * @Route("/pricing", name="pricing")
     */
    public function pricing()
    {
        return $this->render("about.html.twig", array("navid" => 2));
    }
}
