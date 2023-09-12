<?php

namespace App\Tests;

use App\Entity\Etat;
use PHPUnit\Framework\TestCase;

class EtatUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $etat = new Etat();

        $etat->setLibelle('libelle');

        $this->assertTrue($etat->getLibelle() == 'libelle');
    }

    public function testIsFalse(): void
    {
        $etat = new Etat();

        $etat->setLibelle('libelle');

        $this->assertFalse($etat->getLibelle() == 'notlibelle');
    }

    public function testIsEmpty(): void
    {
        $etat = new Etat();

        $this->assertTrue($etat->getLibelle());
    }
}
