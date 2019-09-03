<?php


class User
{
    private $username;
    private $password;
    private $alldata;
    private $role;

    /**
     * User constructor.
     */
    public function __construct($arr)
    {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $this->alldata = $_POST;
        $this->role = 'user';
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole($role)
    {
        $this->role = $role;
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
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAlldata()
    {
        return $this->alldata;
    }

    /**
     * @param mixed $alldata
     */
    public function setAlldata($alldata)
    {
        $this->alldata = $alldata;
    }


}