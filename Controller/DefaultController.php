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
     * @Route("/" , name="user_dashboard_index")
     * @Method("GET")
     * @Template()
     */ public function indexAction(Request $request) {

        $locale = $request->attributes->get('_locale', $request->getLocale());
        if ($locale == $request->attributes->get('_locale')) {
            $request->getSession()->set('_locale', $locale);
        } else {
            // if no explicit locale has been set on this request, use one from the session
            $request->setLocale($request->getSession()->get('_locale', $locale)); //$this->defaultLocale));
        }
        return array('_locale' => $locale, 'admin_pool' => $this->container->get('sonata.admin.pool'));
    }

}
