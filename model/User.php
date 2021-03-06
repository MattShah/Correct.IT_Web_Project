<?php

class User
{
    private $id;
    private $nick;
    private $email;
    private $password;

    public function __construct($id, $nick, $email, $password)
    {
        $this->id = $id;
        $this->nick = $nick;
        $this->email = $email;
        $this->password = $password;
    }

    public function getNick()
    {
        return $this->nick;
    }

    public function setNick($nick): void
    {
        $this->nick = $nick;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): void
    {
        $this->password = md5($password);
    }

    public function getId()
    {
        return $this->id;
    }

}