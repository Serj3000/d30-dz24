<?php

namespace Hillel\Repository;

use Hillel\Model\UserModelInterface;

interface UserRepositoryInterface
{
    public function find(int $id):UserModelInterface;

    public function create(UserModelInterface $user):int;

    public function update(UserModelInterface $user):void;

    public function delete(UserModelInterface $user):void;
}
