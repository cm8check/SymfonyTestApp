<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use App\Util\Forms;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

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
    public function contact(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add("email", EmailType::class, array(
                "constraints" => array(new Length(array('min' => 6)))
            ))
            ->add("name", TextType::class, array(
                "constraints" => array(new Length(array('min' => 3)))
            ))
            ->add("body", TextareaType::class, array(
                "constraints" => array(new Length(array('min' => 10)))
            ))
            ->getForm();
        
        if ($request->getMethod() == "POST") {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $data = $form->getData();
            }
        }

        return $this->render("contact.html.twig", array("navid" => 3, "form" => $form->createView()));
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
