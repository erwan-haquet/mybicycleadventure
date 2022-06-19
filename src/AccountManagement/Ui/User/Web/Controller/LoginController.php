<?php

namespace App\AccountManagement\Ui\User\Web\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

#[Route(path: '/login', name: 'login')]
class LoginController extends AbstractController
{
    public function __invoke(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


        // TODO: implement login form
        // @see https://symfony.com/doc/current/security.html#form-login
        return $this->render('web/account_management/signup/index.html.twig', [
            'last_email' => $lastUsername,
            'context' => 'login',
            'error' => $error
        ]);
    }
}
