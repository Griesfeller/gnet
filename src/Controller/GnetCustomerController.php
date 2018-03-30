<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GnetCustomerController extends Controller
{
    /**
     * @Route("/gnet/customer", name="gnet_customer")
     */
    public function index()
    {
        return $this->render('gnet_customer/index.html.twig', [
            'controller_name' => 'GnetCustomerController',
        ]);
    }
}
