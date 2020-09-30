<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserApiController extends AbstractController
{
    /**
     * @Route("/api/user/list", name="api_user_list", methods={"GET"})
     */
    public function list(UserRepository $repository)
    {
        $user = $repository->findAll();
        return $this->json(
            $user,
            200,
            [],
            ["groups" => ["user:list"]],
        );
    }
  }
