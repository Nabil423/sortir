<?php

namespace App\Tests;

use App\Entity\Lieu;
use PHPUnit\Framework\TestCase;

class LieuUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $lieu = new Lieu();

        $lieu->setNom('nom');
        $lieu->setRue('rue');
        $lieu->setLatitude('latitude');
        $lieu->setLongitude('longitude');

        $this->assertTrue($lieu->getNom() == 'nom');
        $this->assertTrue($lieu->getRue() == 'rue');
        $this->assertTrue($lieu->getLatitude() == 'latitude');
        $this->assertTrue($lieu->getLongitude() == 'longitude');


    }

    public function testIsFalse(): void
    {
        $lieu = new Lieu();

        $lieu->setNom('nom');
        $lieu->setRue('rue');
        $lieu->setLatitude('latitude');
        $lieu->setLongitude('longitude');

        $this->assertFalse($lieu->getNom() == 'notnom');
        $this->assertFalse($lieu->getRue() == 'notrue');
        $this->assertFalse($lieu->getLatitude() == 'notlatitude');
        $this->assertFalse($lieu->getLongitude() == 'notlongitude');


    }

    public function testIsEmpty()
    {
        $lieu= new Lieu();

        $this->assertEmpty($lieu->getNom());
        $this->assertEmpty($lieu->getRue());
        $this->assertEmpty($lieu->getLatitude());
        $this->assertEmpty($lieu->getLongitude());

    }

}
