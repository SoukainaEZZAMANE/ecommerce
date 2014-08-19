<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity;

class TestController extends Controller
{
    public function ajoutAction()
    {
        die('ici ça pointe ;');
        return $this->render('EcommerceBundle:Default:produits/layout/produits.html.twig');
    }

}
