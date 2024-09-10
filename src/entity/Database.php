<?php

namespace Safebase\entity;

class Database {
    private int $id;
    private string $name;
    private string $password;
    private string $userName;
    private string $port;
    private int $type;
    private string $host;

    private string $usedType;

public function __construct( 
        int $id = 0,
        string $name = '',
        string $password = '',
        string $userName = '',
        string $port = '3306',
        int $type = 1,
        string $usedType = 'prod',
        string $host = 'localhost'
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->userName = $userName;
        $this->port = $port;
        $this->type = $type;
        $this->usedType = $usedType;
        $this->host = $host;
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
     * Get the value of password
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of userName
     *
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName(string $userName): self
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of port
     *
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }

    /**
     * Set the value of port
     *
     * @param string $port
     *
     * @return self
     */
    public function setPort(string $port): self
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of usedType
     *
     * @return string
     */
    public function getUsedType(): string
    {
        return $this->usedType;
    }

    /**
     * Set the value of usedType
     *
     * @param string $usedType
     *
     * @return self
     */
    public function setUsedType(string $usedType): self
    {
        $this->usedType = $usedType;

        return $this;
    }

    /**
     * Get the value of host
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }

    /**
     * Set the value of host
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host): self
    {
        $this->host = $host;

        return $this;
    }
}
