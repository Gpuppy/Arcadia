<?php

namespace Class\Animal;
class Animal
{

    private int $id;
    private string $name;
    private string $state;

    private int $race_id;

    public function __construct()
    {

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }

    /**
     * @return mixed
     */
    public function getRaceId()
    {
        return $this->race_id;
    }

    /**
     * @param mixed $race_id
     */
    public function setRaceId($race_id): void
    {
        $this->race_id = $race_id;
    }


}