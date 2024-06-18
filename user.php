<?php

class User
{
    protected int $role_id;



    protected string $username;

    protected string $name;

    protected string $surname;

    protected string $password;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;

    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     */
    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    /**
     * @return string
     */
       public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

}
