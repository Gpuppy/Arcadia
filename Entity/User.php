<?php


class User
{
    private $dbConn;

    private $pdo;

    private int $id;
    private int $role_id;

    private string $name;
    private string $surname;
    private string $username;
    private string $password;

    public function __construct()
    {
        //require_once "arcadia.php";
        //$this->pdo = new PDO
    }


    /**
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->role_id;
    }

    /**
     * @param int $role_id
     */
    public function setRoleId(int $role_id): void
    {
        $this->role_id = $role_id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function validate() : array
    {
        $errors = [];
        if(empty($this->getName())){
            $errors['name'] = 'ce champ ne doit pas etre vide';
        }
        if(empty($this->getSurname())){
            $errors['surname'] = 'ce champ ne doit pas etre vide';
        }
        if(empty($this->getUsername())){
            $errors['username'] = 'ce champ ne doit pas etre vide';
        }
        if(empty($this->getPassword())){
            $errors['password'] = 'ce champ ne doit pas etre vide';
        }
        return $errors;
    }

}