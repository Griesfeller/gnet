<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\GnetCustomer;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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
            ->add('salutation', TextType::class)
            ->add('firstName', TextType::class)
            ->add('lastName', TextType::class)
            ->add('middleName', TextType::class)
            ->add('street', TextType::class)
            ->add('housenumber', TextType::class)
            ->add('addressAddtitionals', TextType::class)
            ->add('city', TextType::class)
            ->add('postalCode', TextType::class)
            ->add('telephon', TextType::class)
            ->add('fax', TextType::class)
            ->add('mobil', TextType::class)
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Customer'))
            ->getForm();
            
            if ($form->isSubmitted()) {
                $gnetCustomer = $form->getData();
                
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($gnetCustomer);
                $entityManager->flush();
                return $this->redirectToRoute('/gnet/customer/success');
            }
            
        return $this->render(
        'gnet_customer/new.html.twig', 
            array(
                'form' => $form->createView(),
            )
        );
    }
    
    /**
     * @Route("/gnet/customer/success", name="gnet_customer_success")
     */
    public function success()
    {
        return $this->render('gnet_customer/success.html.twig');
    }
    
}
