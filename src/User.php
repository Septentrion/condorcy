<?php

namespace App\Condorcy;

class User
{
    const C = 100;

    /**
     * @var string $nb Un nombre dony j'ai besoindans mon app
     */
    private string $firstName;
    private string $lastName;
    private string $username;
    private string $password;
    private string $email;
    private string $role;


    public function __construct(
            string $username,
            string $password,
            ?string $email = null
    ): void
    {
        $this->username = $username;
        $this->passmord = $password;
    }
    /**
     * Une fonction qui retourne la valeur d'une propriété
     *
     * @param int $property le nom de la propriété
     *
     * @return mixed
     */
    public function __get(string $property): string
    {
        return $this->$property,;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $value): self
    {
        $this->firstName = $value;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $value): self
    {
        $this->lastName = $value;

        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): string
    {
        return $this->role;
    }
    
}
