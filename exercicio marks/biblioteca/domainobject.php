<?php

namespace Biblioteca;

abstract Class Domainobject 
{
    protected $id;
    public function __construct( long $id)
    {
        $this->$id = $id;
    }
    public function getid(){
        return $this->$id;
    }
}
