<?php

namespace Safebase\entity;

use DateTime;

class Cron
{
    private int $id;
    private ?string $name;
    private ?DateTime $dateStart;
    private ?DateTime $heure;
    private ?string $recurrence;
    private ?Database $idDatabase;

    public function __construct(?int $id,
        ?string $name,
        ?DateTime $dateStart,
        ?DateTime $heure,
        ?string $recurrence,
        ?Database $idDatabase)
         {
        $this->id = $id;
        $this->name = $name;
        $this->dateStart = $dateStart;
        $this->heure = $heure;
        $this->recurrence = $recurrence;
        $this->idDatabase = $idDatabase;
    }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return ?string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param ?string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of dateStart
     *
     * @return ?DateTime
     */
    public function getDateStart(): ?DateTime
    {
        return $this->dateStart;
    }

    /**
     * Set the value of dateStart
     *
     * @param ?DateTime $dateStart
     *
     * @return self
     */
    public function setDateStart(?DateTime $dateStart): self
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get the value of heure
     *
     * @return ?DateTime
     */
    public function getHeure(): ?DateTime
    {
        return $this->heure;
    }

    /**
     * Set the value of heure
     *
     * @param ?DateTime $heure
     *
     * @return self
     */
    public function setHeure(?DateTime $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get the value of recurrence
     *
     * @return ?string
     */
    public function getRecurrence(): ?string
    {
        return $this->recurrence;
    }

    /**
     * Set the value of recurrence
     *
     * @param ?string $recurrence
     *
     * @return self
     */
    public function setRecurrence(?string $recurrence): self
    {
        $this->recurrence = $recurrence;

        return $this;
    }

    /**
     * Get the value of idDatabase
     *
     * @return ?Database
     */
    public function getIdDatabase(): ?Database
    {
        return $this->idDatabase;
    }

    /**
     * Set the value of idDatabase
     *
     * @param ?Database $idDatabase
     *
     * @return self
     */
    public function setIdDatabase(?Database $idDatabase): self
    {
        $this->idDatabase = $idDatabase;

        return $this;
    }
}
