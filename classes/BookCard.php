<?php


class BookCard extends Card
{
    private $weight;

    /**
     * Card constructor.
     * @param $incomePostArray
     */
    public function __construct($incomePostArray)
    {
        parent::__construct($incomePostArray);
        $this->weight = $incomePostArray['weight'];


    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        $incomePostArray['weight'] = $weight;
    }




}