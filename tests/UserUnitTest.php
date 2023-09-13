<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user=new User();

        $user->setEmail('truetest@test.com');
        $user->setNom('nom');
        $user->setPrenom('prenom');
        $user->setTelephone('telephone');
        $user->setPassword('password');
        /*$user->setActif('true');
        $user->setAdmin('true');*/

        $this->assertTrue($user->getEmail() == 'truetest@test.com');
        $this->assertTrue($user->getNom() == 'nom');
        $this->assertTrue($user->getPrenom() == 'prenom');
        $this->assertTrue($user->getTelephone() == 'telephone');
        $this->assertTrue($user->getPassword() == 'password');
      /*  $this->assertTrue($user->getActif() == 'true');
        $this->assertTrue($user->getAdmin() == 'true');*/

    }

    public function testIsFalse()
    {

        $user=new User();

        $user->setEmail('truetest@test.com');
        $user->setNom('nom');
        $user->setPrenom('prenom');
        $user->setTelephone('telephone');
        $user->setPassword('password');
      /*  $user->setActif('true');
        $user->setAdmin('true');*/

        $this->assertFalse($user->getEmail() == 'falsetest@test.com');
        $this->assertFalse($user->getNom() == 'false');
        $this->assertFalse($user->getPrenom() == 'false');
        $this->assertFalse($user->getTelephone() == 'false');
        $this->assertFalse($user->getPassword() == 'false');
        /*$this->assertTrue($user->getActif() == 'false');
        $this->assertTrue($user->getAdmin() == 'false');*/


    }

   public function testIsEmpty()
    {
        $user=new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getTelephone());
        $this->assertEmpty($user->getPassword());
        /*$this->assertEmpty($user->getActif() );
        $this->assertEmpty($user->getAdmin() );*/

    }

}

