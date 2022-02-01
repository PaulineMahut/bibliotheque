<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Helpers\EntityManagerHelper;
use App\Models\AbstractRepository;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class LivreController
{


    const NEEDS_add = [
        "title",
        "resume",
        "author",
        "editor",
        "isbn",
        "exemplaires"

    ];

    public function showLivres()
    {
       $entityManager = EntityManagerHelper::getEntityManager();
       $metadataClass = new ClassMetadata("App\Entity\Livre");
       $livreRepo = new AbstractRepository($entityManager, $metadataClass);

       $aLivres = $livreRepo->findAll();

       include("./src/Vues/Livre/showLivre.php");
    }

    public function addLivre()
    {
        if (!empty($_POST)) {
            foreach (self::NEEDS_add as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque un champs à remplir";
                    include("./src/Vues/Livre/addLivre.php");
                    exit;
                }

                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }

            $isbn = (int) $_POST["isbn"];
            $exemplaires = (int) $_POST["exemplaires"];

            $entityManager = EntityManagerHelper::getEntityManager();
            $livre = new Livre($_POST["title"], $_POST["resume"], $_POST["author"], $_POST["editor"], $isbn, $exemplaires);

            $entityManager->persist($livre);

            try {
                $entityManager->flush();
                echo "livre ajouté !";
            } catch (\Throwable $th) {
                exit("livre déjà ajouté");
            }
        }

        include("./src/Vues/Livre/addLivre.php");
    }


    public function modifyLivre(string $id)
    {
        $entityManager = EntityManagerHelper::getEntityManager();
        $livreRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Livre"));

        $livre = $livreRepo->find($id);

        if (!empty($_POST)) {
            foreach (self::NEEDS_add as $value) {
                if (!array_key_exists($value, $_POST)) {
                    echo "Il manque des champs à remplir";
                    include("./src/Vues/Livre/modifyLivre.php");
                    exit;
                }

                $_POST[$value] = htmlentities(strip_tags($_POST[$value]));
            }

            if ($_POST["title"] !== $livre->getTitle()) {
                $livre->setTitle($_POST["title"]);
            }

            if ($_POST["resume"] !== $livre->getResume()) {
                $livre->setResume($_POST["resume"]);
            }

            if ($_POST["author"] !== $livre->getAuthor()) {
                $livre->setAuthor($_POST["author"]);
            }

            if ($_POST["editor"] !== $livre->getEditor()) {
                $livre->setEditor($_POST["editor"]);
            }

            if ($_POST["isbn"] !== $livre->getIsbn()) {
                $livre->setIsbn($_POST["isbn"]);
            }

            if ($_POST["exemplaires"] !== $livre->getExemplaires()) {
                $livre->setExemplaires($_POST["exemplaires"]);
            }

            try {
                $entityManager->persist($livre);
                $entityManager->flush();
                echo "Modifié !";
            } catch (\Throwable $th) {
                "Erreur";
            }
        }
        include("./src/Vues/Livre/modifyLivre.php");
    }


    public function delete(string $id)
    {
        $entityManager = EntityManagerHelper::getEntityManager();
        $livreRepo = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Livre"));

        $livre = $livreRepo->find($id);

        $entityManager->remove($livre);
        $entityManager->flush();
    }
}
