<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello/world", name="hello_world")
     */
    public function index()
    {
        return $this->json([
            'message' => 'Welcome to your new controller! Changed message now!',
            'path' => 'src/Controller/HelloWordController.php',
        ]);
    }
}
