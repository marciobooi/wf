<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/25/2019
 * Time: 10:41 AM
 */

namespace Model;

class Person
{
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Person
     */


    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Person
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Person
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return array
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @param array $emails
     * @return Person
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }
    /*Create a class Person*/

    /*With the following properties :*/
    private $id;
    protected $firstname;
    protected $lastname;
    protected $emails =[];


}

