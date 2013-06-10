<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // sitereservation_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::indexAction',  '_route' => 'sitereservation_homepage',);
        }

        // sitereservation_companysignup
        if ($pathinfo === '/companysignup') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::sucompanyAction',  '_route' => 'sitereservation_companysignup',);
        }

        // sitereservation_submitcompanysu
        if ($pathinfo === '/submitcompanysu') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::companySubmitAction',  '_route' => 'sitereservation_submitcompanysu',);
        }

        // sitereservation_GuestOffers
        if ($pathinfo === '/guestoffers') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::getAllOffersAction',  '_route' => 'sitereservation_GuestOffers',);
        }

        if (0 === strpos($pathinfo, '/compan')) {
            if (0 === strpos($pathinfo, '/company')) {
                // sitereservation_CompanyMenu
                if (0 === strpos($pathinfo, '/companyMenu') && preg_match('#^/companyMenu/(?P<company>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_CompanyMenu')), array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::companyMenuAction',));
                }

                // sitereservation_companyprofile
                if (preg_match('#^/company/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_companyprofile')), array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::companyProfileAction',));
                }

            }

            if (0 === strpos($pathinfo, '/companies')) {
                // sitereservation_AllCompanies
                if ($pathinfo === '/companies') {
                    return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::allCompaniesAction',  '_route' => 'sitereservation_AllCompanies',);
                }

                // sitereservation_address
                if (0 === strpos($pathinfo, '/companiesAdd') && preg_match('#^/companiesAdd/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_address')), array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::getAddressCompanyAction',));
                }

            }

        }

        // sitereservation_about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::aboutAction',  '_route' => 'sitereservation_about',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
