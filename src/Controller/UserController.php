<?php

namespace App\Controller;

use App\Entity\Note;
use App\Entity\User;
use App\Helpers\EntityManagerHelper;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class UserController
{

    public function addUser()
    {
        $entityManager = EntityManagerHelper::getEntityManager();

        // $user = new User("Cat");
        // $entityManager->persist($user);
        // $entityManager->flush();
    }


    const NEED = [
        "note",
        "comments"
    ];


    public function addNote($livre_Id)
    {

        if (!empty($_POST)) {
            foreach (self::NEED as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque un champs à remplir";
                    include("./src/Vues/Note/addNote.php");
                    exit;
                }

                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }

            $entityManager = EntityManagerHelper::getEntityManager();
            $livreRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Livre"));
            $userRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));

            $user = $userRepo->find($id);
            $livre = $livreRepo->find($id);

            $newnote = new Note($_POST["comments"], $_POST["notes"], $livre, $user);

            try {
                $entityManager->persist($newnote);
                $entityManager->flush();
                echo "Note ajouté";
            } catch (\Throwable $th) {
                echo "erreur";
            }
        }

        include("./src/Vues/Note/addNote.php");
    }
}
