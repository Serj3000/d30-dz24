<?php

namespace Hillel\Model;

interface UserModelInterface
{
    public function setId(int $id):void;
    public function getId():int;

    public function setEmail(string $email):void;
    public function getEmail():string;

    public function setPassword(string $password):void;
    public function getPassword():string;

    public function setCreatedAt(\DateTime $createdAt):void;
    public function getCreatedAt():\DateTime;
}
