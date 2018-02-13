<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_home
            if ('/_profiler' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_home');
                }

                return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
            }

            if (0 === strpos($pathinfo, '/_profiler/search')) {
                // _profiler_search
                if ('/_profiler/search' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                }

                // _profiler_search_bar
                if ('/_profiler/search_bar' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                }

            }

            // _profiler_phpinfo
            if ('/_profiler/phpinfo' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
            }

            // _profiler_open_file
            if ('/_profiler/open' === $pathinfo) {
                return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // app
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'app');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'app',);
        }

        if (0 === strpos($pathinfo, '/spotted_a')) {
            // spotted_homepage
            if ('/spotted_a' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'spotted_homepage');
                }

                return array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::indexAction',  '_route' => 'spotted_homepage',);
            }

            // _spotted_test
            if ('/spotted_a/spottedtest' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::indexAction',  '_route' => '_spotted_test',);
            }

            // _delete_spotted
            if (0 === strpos($pathinfo, '/spotted_a/supprimer') && preg_match('#^/spotted_a/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_delete_spotted')), array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::deleteSpottedAction',));
            }

            // _ajout_spotted
            if ('/spotted_a/ajout_spotted' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::ajoutAction',  '_route' => '_ajout_spotted',);
            }

            // _list_spotted
            if ('/spotted_a/list' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::listSpottedAction',  '_route' => '_list_spotted',);
            }

            // _modifier_spotted
            if (0 === strpos($pathinfo, '/spotted_a/modif') && preg_match('#^/spotted_a/modif/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_modifier_spotted')), array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::modifSpottedAction',));
            }

            // _spotted_content
            if (0 === strpos($pathinfo, '/spotted_a/content') && preg_match('#^/spotted_a/content/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_spotted_content')), array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::contentSpottedAction',));
            }

            // _edit_comment_spotted
            if (0 === strpos($pathinfo, '/spotted_a/editcomment') && preg_match('#^/spotted_a/editcomment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_edit_comment_spotted')), array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::editCommentSpottedAction',));
            }

            // _delete_comment_spotted
            if (0 === strpos($pathinfo, '/spotted_a/deletecomment') && preg_match('#^/spotted_a/deletecomment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_delete_comment_spotted')), array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::deleteCommentSpottedAction',));
            }

            // _test_id
            if ('/spotted_a/test_id' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\SpottedBundle\\Controller\\DefaultController::fooAction',  '_route' => '_test_id',);
            }

        }

        // store_homepage
        if ('/store_a' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'store_homepage');
            }

            return array (  '_controller' => 'EspritEntreAide\\StoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'store_homepage',);
        }

        // annonce_homepage
        if ('/Annonces_a' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'annonce_homepage');
            }

            return array (  '_controller' => 'EspritEntreAide\\AnnonceBundle\\Controller\\DefaultController::indexAction',  '_route' => 'annonce_homepage',);
        }

        if (0 === strpos($pathinfo, '/Events_a')) {
            // evenement_homepage
            if ('/Events_a' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'evenement_homepage');
                }

                return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'evenement_homepage',);
            }

            // _afficher_events
            if ('/Events_a/afficherevent' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::afficherAction',  '_route' => '_afficher_events',);
            }

            // _ajouter_events
            if ('/Events_a/ajouterevent' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::ajoutAction',  '_route' => '_ajouter_events',);
            }

            // _supprimer_events
            if ('/Events_a/supprimerevent' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::supprimerAction',  '_route' => '_supprimer_events',);
            }

            // _modifier_events
            if ('/Events_a/modifierevent' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::modifierAction',  '_route' => '_modifier_events',);
            }

            if (0 === strpos($pathinfo, '/Events_a/rechercherevent')) {
                // _rechercher_events_club
                if ('/Events_a/recherchereventclub' === $pathinfo) {
                    return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::rechercheClubAction',  '_route' => '_rechercher_events_club',);
                }

                // _rechercher_events_date
                if ('/Events_a/recherchereventdate' === $pathinfo) {
                    return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::rechercheDateAction',  '_route' => '_rechercher_events_date',);
                }

                // _rechercher_events_nom
                if ('/Events_a/recherchereventnom' === $pathinfo) {
                    return array (  '_controller' => 'EspritEntreAide\\EvenementBundle\\Controller\\DefaultController::rechercheNomAction',  '_route' => '_rechercher_events_nom',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/Clubs_a')) {
            // club_homepage
            if ('/Clubs_a' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'club_homepage');
                }

                return array (  '_controller' => 'EspritEntreAide\\ClubBundle\\Controller\\DefaultController::indexAction',  '_route' => 'club_homepage',);
            }

            // club_ajout
            if ('/Clubs_a/ajout' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\ClubBundle\\Controller\\gererclubController::AjoutAction',  '_route' => 'club_ajout',);
            }

            // club_affiche
            if ('/Clubs_a/affiche' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\ClubBundle\\Controller\\gererclubController::AfficheAction',  '_route' => 'club_affiche',);
            }

            // club_recherche
            if ('/Clubs_a/recherche' === $pathinfo) {
                return array (  '_controller' => 'EspritEntreAide\\ClubBundle\\Controller\\gererclubController::RechercheAction',  '_route' => 'club_recherche',);
            }

            // club_supprime
            if (0 === strpos($pathinfo, '/Clubs_a/Delete') && preg_match('#^/Clubs_a/Delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'club_supprime')), array (  '_controller' => 'EspritEntreAide\\ClubBundle\\Controller\\gererclubController::DeleteAction',));
            }

            // _club_modifier
            if (0 === strpos($pathinfo, '/Clubs_a/modifier') && preg_match('#^/Clubs_a/modifier(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_club_modifier')), array (  '_controller' => 'EspritEntreAide\\ClubBundle\\Controller\\gererclubController::ModifierAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/account')) {
            // user_homepage
            if ('/account' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_homepage');
                }

                return array (  '_controller' => 'EspritEntreAide\\UserBundle\\Controller\\DefaultController::indexAction',  '_route' => 'user_homepage',);
            }

            // _admin
            if ('/account/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::adminAction',  '_route' => '_admin',);
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // fos_user_update_email_confirm
            if (0 === strpos($pathinfo, '/profile/confirm-email-update') && preg_match('#^/profile/confirm\\-email\\-update/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_update_email_confirm;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_update_email_confirm')), array (  '_controller' => 'fos_user.confirm.email.update.controller:confirmEmailUpdateAction',));
            }
            not_fos_user_update_email_confirm:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
