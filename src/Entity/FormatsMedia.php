<?php

namespace App\Entity;



class FormatsMedia
{


    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
       /**
     * langage
     *
     * @var mixed
     */
    private $langage;

 

    /**
     * Get langage
     *
     * @return  mixed
     */ 
    public function getLangage()
    {
        return $this->langage;
    }

    /**
     * Set langage
     *
     * @param  mixed  $langage  langage
     *
     * @return  self
     */ 
    public function setLangage($langage)
    {
        $this->langage = $langage;

        return $this;
    }
}
