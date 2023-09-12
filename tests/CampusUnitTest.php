<?php

namespace App\Tests;

use App\Entity\Campus;
use PHPUnit\Framework\TestCase;

class CampusUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $campus = new Campus();

        $campus->setNom('campus');

        $this->assertTrue($campus->getNom() == 'nom');
    }

    public function testIsFalse()
    {

        $campus = new Campus();

        $campus->setNom('nom');

        $this->assertFalse($campus->getNom() == 'notnom');

    }

    public function testIsEmpty()
    {

        $campus = new Campus;

        $this->assertEmpty($campus->getNom());

    }

}
