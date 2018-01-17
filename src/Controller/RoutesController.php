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
        return $this->render("pricing.html.twig", array("navid" => 2));
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render("contact.html.twig", array("navid" => 3));
    }

    /**
     * @Route("/register", name="register")
     */
    public function register()
    {
        return $this->render("pricing.html.twig", array("navid" => 5));
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render("pricing.html.twig", array("navid" => 4));
    }
}
