<?php

require "../templates/header.php";
?>
<h3 class="text-center">Habitats</h3>
<?php
require "../templates/footer.php";

class Accomodation
{
    private int $id;

    private string $name;

    private string $description;

    private string $accomodation_review;

    private $animal_id;

    private $image_id;
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
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAccomodationReview()
    {
        return $this->accomodation_review;
    }

    /**
     * @param mixed $accomodation_review
     */
    public function setAccomodationReview($accomodation_review): void
    {
        $this->accomodation_review = $accomodation_review;
    }

    /**
     * @return mixed
     */
    public function getAnimalId()
    {
        return $this->animal_id;
    }

    /**
     * @param mixed $animal_id
     */
    public function setAnimalId($animal_id): void
    {
        $this->animal_id = $animal_id;
    }

    /**
     * @return mixed
     */
    public function getImageId()
    {
        return $this->image_id;
    }

    /**
     * @param mixed $image_id
     */
    public function setImageId($image_id): void
    {
        $this->image_id = $image_id;
    }



}