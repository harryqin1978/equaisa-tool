<?php

namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
      
      // translation test
      $request = $this->getRequest();
      $locale = $request->getLocale();
      $request->setLocale('fr');
      $translated = $this->get('translator')->trans('Symfony2 is great');
      return new Response($translated);

      // return $this->render('FrontCodingEquasiaBundle:Default:index.html.twig');
    }
}
