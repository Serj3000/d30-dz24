<?php

namespace Hillel\Repository;

use Hillel\Model\UserModelInterface;
use Hillel\Model\UserModel;
use Hillel\Repository\UserRepositoryInterface;

final class PdoUserRepository implements UserRepositoryInterface
{
    /**@var \Pdo */

    private $pdo;

    private $table='members'; //'users'

    public function __construct(\Pdo $pdo)
    {
        $this->pdo=$pdo;
    }

    public function find(int $id):UserModelInterface
    {
        $stmt=$this->pdo->prepare("SELECT * FROM". $this->table. "WHERE id=:id");
        $stmt->bindValue(":id", $id);
        $stmt->execute();

        $data=$stmt->fetch(\Pdo::FETCH_ASSOC);

        echo 'PdoUserRepository';
        var_dump($data);

        if($data===false){
            echo 'return null';
            return null;
        }

        $user=new UserModel(
            $data['id'],
            $data['email'],
            $data['password'],
            new \DateTime($data['created_at'])
        );

        return $user;
    }

    public function create(UserModelInterface $user):int
    {
        $stmt=$this->pdo->prepare("INSERT INTO".$this->table."(email,password,created_at)VALUE(:email,:password,:created_at)");
        $stmt->bindValue(":email", $user->getEmail());
        $stmt->bindValue(":password", $user->getPassword());
        $stmt->bindValue(":created_at", $user->getCreatedAt()->format('Y-m-d H:i:S'));
        $stmt->execute();

        return $this->pdp->lastInsertId();
    }

    public function update(UserModelInterface $user):void
    {
        //
    }
    
    public function delete(UserModelInterface $user):void
    {
        //
    }

}
