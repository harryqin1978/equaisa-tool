<?php
namespace FrontCoding\EquasiaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class LocaleController extends Controller
{
    public function switchAction($locale)
    {

        $request = $this->getRequest();
        $session = $request->getSession();

        $session->set('_locale', $locale);
        return $this->redirect($this->generateUrl('login'));

    }
}