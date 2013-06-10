<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

        // sitereservation_contactus
        if (0 === strpos($pathinfo, '/contactus') && preg_match('#^/contactus/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_contactus')), array (  '_controller' => 'site\\reservationBundle\\Controller\\DefaultController::contactusAction',));
        }

        if (0 === strpos($pathinfo, '/event')) {
            // sitereservation_eventcat
            if (0 === strpos($pathinfo, '/eventscatuser') && preg_match('#^/eventscatuser/(?P<cat>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_eventcat')), array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::eventcatuserAction',));
            }

            // sitereservation_EventProfileinfo
            if (0 === strpos($pathinfo, '/eventprof') && preg_match('#^/eventprof/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_EventProfileinfo')), array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::oneeventprofAction',));
            }

        }

        // sitereservation_userAllOffers
        if ($pathinfo === '/allOffersuser') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::alloffersuserAction',  '_route' => 'sitereservation_userAllOffers',);
        }

        // sitereservation_Gcusthome
        if ($pathinfo === '/custhome') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::custhomeAction',  '_route' => 'sitereservation_Gcusthome',);
        }

        // sitereservation_extrauserinfo
        if (0 === strpos($pathinfo, '/extrauser') && preg_match('#^/extrauser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sitereservation_extrauserinfo')), array (  '_controller' => 'site\\reservationBundle\\Controller\\DefaultController::extrauserAction',));
        }

        if (0 === strpos($pathinfo, '/add')) {
            // sitereservation_addnewuserform
            if ($pathinfo === '/adduser') {
                return array (  '_controller' => 'site\\reservationBundle\\Controller\\DefaultController::addnewuserAction',  '_route' => 'sitereservation_addnewuserform',);
            }

            // sitereservation_addeventform
            if ($pathinfo === '/addevent') {
                return array (  '_controller' => 'site\\reservationBundle\\Controller\\DefaultController::addeventAction',  '_route' => 'sitereservation_addeventform',);
            }

        }

        // sitereservation_signOut
        if ($pathinfo === '/signOut') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::signOutAction',  '_route' => 'sitereservation_signOut',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // sitereservation_userserviceprovider
            if ($pathinfo === '/userservice') {
                return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::UserserviceProviderAction',  '_route' => 'sitereservation_userserviceprovider',);
            }

            // sitereservation_userprofile
            if ($pathinfo === '/userprofile') {
                return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::UserProfileAction',  '_route' => 'sitereservation_userprofile',);
            }

        }

        // sitereservation_signIn
        if ($pathinfo === '/signIn') {
            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::signInAction',  '_route' => 'sitereservation_signIn',);
        }

        // sitereservation_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sitereservation_index');
            }

            return array (  '_controller' => 'site\\reservationBundle\\Controller\\SiteController::indexAction',  '_route' => 'sitereservation_index',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
