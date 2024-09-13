<?php

namespace Safebase\entity;

use DateTime;
use Safebase\dao\DaoAppli;

class Cron
{
    private int $id;
    private ?string $name;
    private ?DateTime $dateStart;
    private ?DateTime $heure;
    private ?string $recurrence;
    private ?Database $idDatabase;

    public function __construct(?int $id=0,
        ?string $name ='',
        ?DateTime $dateStart =null,
        ?DateTime $heure=null,
        ?string $recurrence='',
        ?Database $idDatabase=null)
         {
        $this->id = $id;
        $this->name = $name;
        $this->dateStart = $dateStart;
        $this->heure = $heure;
        $this->recurrence = $recurrence;
        $this->idDatabase = $idDatabase;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getDateStart(): ?DateTime
    {
        return $this->dateStart;
    }

    public function setDateStart(?DateTime $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    public function getHeure(): ?DateTime
    {
        return $this->heure;
    }

    public function setHeure(?DateTime $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;
        return $this;
    }

    public function getIdDatabase(): ?Database
    {
        return $this->idDatabase;
    }

    public function setIdDatabase(?Database $idDatabase): self
    {
        $this->idDatabase = $idDatabase;
        return $this;
    }

    public function listCron()
    {
        $dao = new DaoAppli;
        $dao->getListCron();
    } 

    public function CreateCron()
    {
        $dao = new DaoAppli;
        // format la date de demarrage
        $dateTime = \DateTime::createFromFormat('Y-m-d', $_POST['datestart']);
        $time = \DateTime::createFromFormat('H:i', $_POST['heure']);
       if ($dateTime and $time) {
            $database = new Database($_POST['iddatabase']);
            $cron = new Cron(1, $_POST['nom'], $dateTime, $time, $_POST['recurrence'], $database);
            if ($dao->createNewTask($cron)) {
                echo ("Tache cron ajoutée avec succès");
            } else {
                echo ('echec de l enregistrement');
            }
        } else {
            echo "La conversion a échoué.";
        }
    }

    public function deleteCron(int $id)
    {
       $dao = new DaoAppli;

    }
}
