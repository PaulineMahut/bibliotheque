<?php

namespace App\Controller;

use App\Entity\User;
use App\Helpers\EntityManagerHelper;

class UserController {

public function addUser()
{
    $entityManager = EntityManagerHelper::getEntityManager();

    // $user = new User("Cat");
    // $entityManager->persist($user);
    // $entityManager->flush();
}
}