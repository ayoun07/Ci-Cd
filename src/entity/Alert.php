<?php

namespace Safebase\entity;

use DateTime;

class Alert
{
    private int $id;
    private ?DateTime $dateAlert;
    private ?string $message;
    private ?Database $idDatabase;

    public function __construct(?int $id,
        ?DateTime $dateAlert,
        ?string $message,
        ?Database $idDatabase)
         {
        $this->id = $id;
        $this->dateAlert = $dateAlert;
        $this->message = $message;
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
}
