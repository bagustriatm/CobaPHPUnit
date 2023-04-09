<?php
use PHPUnit\Framework\TestCase;
class LoginTest extends TestCase{
    public function test()
        {
        $login = new \App\Login;
        $email = "nama@domain.co.id";
        $password = "katasandi";
        $login->setEmail($email);
        $login->setPassword($password);
        $this->assertEquals("Berhasil", $login->login());
        }
    }