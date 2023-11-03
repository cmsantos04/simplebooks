<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoleManagementController extends AbstractController
{
    /**
     * @Route("/role-management", name="role_management")
     */
    public function index()
    {
         
        return $this->render('role_management/index.html.twig',);
    }

    // Other actions for role management (e.g., add, edit, delete roles)
}