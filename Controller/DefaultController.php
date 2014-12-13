<?php

namespace Map2u\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/**
 * Map2u Core Default controller.
 *
 * @Route("/dashboard")
 */
class DefaultController extends Controller {

    /**
     * Welcome controller.
     *
     * @Route("/" , name="dashboard_index")
     *  * @Method("GET")
     * @Template()
     */ public function indexAction() {
        return array('admin_pool' => $this->container->get('sonata.admin.pool'));
    }

}
