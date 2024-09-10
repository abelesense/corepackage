<?php

namespace Core;

use Entity\User;
use Repository\UserRepository;

interface AuthenticationInterface
{
    public function getUser(): User|null;

    public function check();
    public function login(string $email, string $password): bool;

    public function logout():void;
}