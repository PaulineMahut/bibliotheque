<?php

namespace App\Controller;

use App\Entity\Note;
use App\Helpers\EntityManagerHelper;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\Id;

class NoteController
{

    const NEED = [
        "note",
        "comments"
    ];

    // public function addNote($id)
    // {
    //     $entityManager = EntityManagerHelper::getEntityManager();
    //     $livreRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Livre"));
    //     $userRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
    //     $livre = $livreRepo->find($id);

    //     if (!empty($_POST)) {
    //         foreach (self::NEED as $value) {
    //             echo "Il manque un champ à remplir";
    //             include("./src/Vues/Note/addNote.php");
    //             exit;
    //         }
    //         $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
    //     }

    //     $user = $userRepo->find($id);

    //     $$note = new Note($_POST["note"], $_POST["comments"], $livre, $user);

    //             try {
    //                 $entityManager->persist($note);
    //                 $entityManager->flush();
    //             } catch (\Throwable $th) {
    //                 echo "erreur lors de l'ajout";
    //             }
            

    //     include("./src/Vues/Note/addNote.php");
    // }

    // public function addNote($id)
    // {
    //     $entityManager = EntityManagerHelper::getEntityManager();
    //     $livreRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Livre"));
    //     $userRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
    //     $livre = $livreRepo->find($id);

    //     if (!$livre) {
    //         echo("ce livre n'existe pas");
    //         exit;
    //     }

    //     if (!empty($_POST)) {
    //         foreach (self::NEED as $value) {
    //             echo "il manque un champs à remplir";
    //             include("./src/Vues/Note/addNote.php");
    //             exit;
    //         }

    //         $_POST[$value] = htmlentities(strip_tags($_POST[$value]));

    //         if ($_POST[$value] == "") {
    //             echo "il manque un champs a remplir";
    //             exit;

    //         }

    //         $user = $userRepo->find($id);

    //         $note = new Note($_POST["note"], $_POST["comments"], $livre, $user);

    //         try {
    //             $entityManager->persist($note);
    //             $entityManager->flush();
    //         } catch (\Throwable $th) {
    //             echo "erreur lors de l'ajout";
    //         }
    //     }

    //     include("./src/Vues/Note/addNote.php");
    // }

    public function addNote()
    {

        include("./src/Vues/Note/addNote.php");

        
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

            $note = new Note($_POST["note"], $_POST["comments"], $user, $livre);

            try {
                $entityManager->persist($note);
                $entityManager->flush();
                echo "Note ajouté";
            } catch (\Throwable $th) {
                echo "erreur";
            }
        }

        include("./src/Vues/Note/addNote.php");
    }
}
