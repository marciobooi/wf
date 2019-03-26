<?php

namespace Model;


class Role
{

    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_ADMIN = 'ROLE_ADMIN';

    private $id;
    protected $label;





    /**
     * @param mixed $id
     * @return Role
     */
    public function __construct(string $label)
    {
        $this->label = $label;

    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $label
     * @return Role
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
        return $this;

    }

    /**
     * @return mixed
     */
    public function getLabel():string
    {
        return $this->label;
    }

}