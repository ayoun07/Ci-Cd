<?php

namespace Safebase\entity;

class Buckup
{
    private int $id;
    private ?string $version;
    private ?Database $idDatabase;
    private ?string $name;

    public function __construct(?int $id,
        ?string $name,
        ?string $version,
        ?Database $idDatabase)
         {
        $this->id = $id;
        $this->version = $version;
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
     * Get the value of version
     *
     * @return ?string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Set the value of version
     *
     * @param ?string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

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
}
