<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
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
    
    
    /**
     * @Route("/gnet/customer/new", name="gnet_customer_new")
     */
    public function new(Request $request)
    {
        $gnetCustomer = new GnetCustomer();
        $form = $this->createFormBuilder($gnetCustomer)
            ->add('salutation')
            ->add('firstName')
            ->add('lastName')
            ->add('middleName')
            ->add('street')
            ->add('housenumber')
            ->add('addressAddtitionals')
            ->add('city')
            ->add('postalCode')
            ->add('telephon')
            ->add('fax')
            ->add('mobil')
            ->add('email')->getForm();
            
            if ($form->isSubmitted() && $form->isValid()) {
                return $this->redirectToRoute('task_success');
            }
            
        return $this->render('gnet_customer/new.html.twig', array(
        'form' => $form->createView(),
        ));
    }
}
