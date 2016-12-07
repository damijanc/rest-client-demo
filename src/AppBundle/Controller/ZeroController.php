<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as R;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ZeroController
 *
 * Please make sure that this controller is called last if no other path match
 * Symfony has a stupid way of route priority since it takes controller name and sorts
 * the routes in the controller alphabetically
 *
 * we could use chain routers but it is an overkill
 * @see http://symfony.com/doc/current/cmf/book/routing.html
 */
class ZeroController extends Controller
{
    /**
     * @R\Route("/{url}", name="remove_trailing_slash",
     *     requirements={"url" = ".*\/$"}, methods={"GET"})
     */
    public function removeTrailingSlashAction(Request $request)
    {
        $pathInfo = $request->getPathInfo();
        $requestUri = $request->getRequestUri();

        $url = str_replace($pathInfo, rtrim($pathInfo, ' /'), $requestUri);

        return new RedirectResponse($url, 302);
    }
}
