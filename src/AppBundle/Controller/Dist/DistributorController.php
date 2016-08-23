<?php

namespace AppBundle\Controller\Dist;
use AppBundle\Entity\Distributor;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/dist/home")
 * @Security("has_role('ROLE_ADMIN')")
 *
 */
class DistributorController extends Controller
{
    /**
     * @Route("/", name="dist_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        // $distributors = $entityManager->getRepository(Post::class)->findAll();

        return $this->render('default/index.html.twig');
    }
    /**
     * Creates a new Distributor entity.
     *
     * @Route("/new", name="dist_create")
     * @Method({"GET", "POST"})
     *
     * NOTE: the Method annotation is optional, but it's a recommended practice
     * to constraint the HTTP methods each controller responds to (by default
     * it responds to all methods).
     */
    public function newAction(Request $request)
    {
        $dist = new Distributor();
      //  $dist->setParrain($this->getUser()->getId());

        return $this->render('default/index.html.twig', [
            // 'post' => $post,
            // 'form' => $form->createView(),
        ]);
    }


}
