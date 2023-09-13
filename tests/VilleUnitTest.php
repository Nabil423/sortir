<?php

namespace App\Tests;

use App\Entity\Ville;
use PHPUnit\Framework\TestCase;

class VilleUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $ville = new Ville();

        $ville->setNom('nom');
        $ville->setCodePostal('codePostal');

        $this->assertTrue($ville->getNom() == 'nom');
        $this->assertTrue($ville->getCodePostal() == 'codePostal');
    }

    public function testIsFalse(): void
    {
        $ville = new Ville();

        $ville->setNom('nom');
        $ville->setCodePostal('codePostal');

        $this->assertFalse($ville->getNom() == 'notnom');
        $this->assertFalse($ville->getCodePostal() == 'notcodePostal');
    }

    public function testIsEmpty()
    {
        $ville = new Ville();

        $this->assertEmpty($ville->getNom());
        $this->assertEmpty($ville->getCodePostal());


    }
}