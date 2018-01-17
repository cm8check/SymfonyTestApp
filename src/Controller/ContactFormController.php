<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactFormController extends Controller
{
    /**
     * @Route("/contact/post", name="contactFormPost")
     */
    public function contactFormPost()
    {
        return 123;
    }
}
