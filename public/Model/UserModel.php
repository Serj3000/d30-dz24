<?php

namespace Hillel\Model;

//$model=new UserModel();

//final означает, что class UserModel не может быть унаследован
final class UserModel implements UserModelInterface
{

//Создаем защищенные поля соответсвующие "сетерам" и "гетерам"
    private $id;
    private $email;
    private $password;
    private $createdAt;

    public function __construct(int $id=null, string $email, string $password, \DateTime $createdAt)
    {
        $this->setId($id);
        $this->setEmail($email);
        $this->setPassword($password);
        $this->setCreatedAt($createdAt);
    }

    public function setId(int $id):void
    {
        $this->id=$id;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function setEmail(string $email):void
    {
         $this->email=$email;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setPassword(string $password):void
    {
        $this->password=$password;
    }

    public function getPassword():string
    {
        return $this->password;
    }

    public function setCreatedAt(\DateTime $createdAt):void
    {
        $this->createdAt=$createdAt;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

}
