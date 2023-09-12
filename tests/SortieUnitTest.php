<?php

namespace App\Tests;

use App\Entity\Sortie;
use PHPUnit\Framework\TestCase;

class SortieUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $sortie = new Sortie();

        $sortie->setNom('nom');
        $sortie->setDateHeureDebut('dateHeureDebut');
        $sortie->setDurée('durée');
        $sortie->setDateLimiteInscription('telephone');
        $sortie->setInfosSortie('infosSortie');
        $sortie->setétat('etat');

        $this->assertTrue($sortie->getNom() == 'nom');
        $this->assertTrue($sortie->getDateHeureDebut() == 'dateHeureDebut');
        $this->assertTrue($sortie->getDateLimiteInscription() == 'd');
        $this->assertTrue($sortie->getInfosSortie() == 'infosSortie');
        $this->assertTrue($sortie->getétat() == 'état');
        $this->assertTrue($sortie->setDurée() == 'durée');

    }

    public function testIsFalse()
    {
        $sortie = new Sortie();

        $sortie->setNom('nom');
        $sortie->setDateHeureDebut('dateHeureDebut');
        $sortie->setDurée('durée');
        $sortie->setDateLimiteInscription('telephone');
        $sortie->setInfosSortie('infosSortie');
        $sortie->setétat('etat');

        $this->assertFalse($sortie->getNom() == 'notnom');
        $this->assertFalse($sortie->getDateHeureDebut() == 'notdateHeureDebut');
        $this->assertFalse($sortie->getDateLimiteInscription() == 'notd');
        $this->assertFalse($sortie->getInfosSortie() == 'notinfosSortie');
        $this->assertFalse($sortie->getétat() == 'notétat');
        $this->assertFalse($sortie->setDurée() == 'notdurée');

    }

    public function testIsEmpty()
    {
        $sortie = new Sortie();

        $this->assertEmpty($sortie->getNom());
        $this->assertEmpty($sortie->getDateHeureDebut());
        $this->assertEmpty($sortie->getDateLimiteInscription());
        $this->assertEmpty($sortie->getInfosSortie());
        $this->assertEmpty($sortie->getétat());
        $this->assertEmpty($sortie->getDurée());
    }
}


