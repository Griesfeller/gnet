<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\GnetCustomer;
class GnetCustomerController extends Controller
{
    /**
     * @Route("/gnet/customer", name="gnet_customer")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $gnetCustomer = new GnetCustomer();
        $gnetCustomer->setFirstName = 'Sven';
        $entityManager->persist($gnetCustomer);
        $entityManager->flush();
        return $this->render('gnet_customer/index.html.twig', [
            'controller_name' => 'GnetCustomerController',
            'gnetCustomerId' => $gnetCustomer->getId(),
        ]);
    }
}
