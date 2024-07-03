<?php

namespace Class\Race;

class Race
{

    private int $id;
    private $abel;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAbel()
    {
        return $this->abel;
    }

    /**
     * @param mixed $abel
     */
    public function setAbel($abel): void
    {
        $this->abel = $abel;
    }

}