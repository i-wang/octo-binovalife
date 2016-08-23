<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {

        $helper = $this->get('security.authentication_utils');
        // if($helper->getLastUsername() != ""){
        //   return $this->render('default/index.html.twig', [
        //       // last username entered by the user (if any)
        //       'last_username' => $helper->getLastUsername(),
        //
        //   ]);
        // }
        // return $this->render('security/index.html.twig', [
        //     // last username entered by the user (if any)
        //     'last_username' => $helper->getLastUsername(),
        //     // last authentication error (if any)
        //     'error' => $helper->getLastAuthenticationError(),
        // ]);
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
          return $this->render('default/index.html.twig', [
              // last username entered by the user (if any)
              'last_username' => $helper->getLastUsername(),

          ]);
        }
        return $this->render('security/index.html.twig', [
            // last username entered by the user (if any)
            'last_username' => $helper->getLastUsername(),
            // last authentication error (if any)
            'error' => $helper->getLastAuthenticationError(),
        ]);
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('This should never be reached!');
    }
}
