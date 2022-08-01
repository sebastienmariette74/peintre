<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Categorie;

class CategorieTest extends TestCase
{
    public function testIsTrue()
    {
        $categorie = new Categorie();

        $categorie
            ->setNom('nom')
            ->setDescription('description')
            ->setSlug('slug');

        $this->assertTrue($categorie->getNom() === 'nom');
        $this->assertTrue($categorie->getDescription() === 'description');
        $this->assertTrue($categorie->getSlug() === 'slug');
    }

    public function testIsFalse()
    {
        $categorie = new Categorie();

        $categorie
            ->setNom('nom')
            ->setDescription('description')
            ->setSlug('slug');

        $this->assertFalse($categorie->getNom() === 'false');
        $this->assertFalse($categorie->getDescription() === 'false');
        $this->assertFalse($categorie->getSlug() === 'false');
    }

    public function testIsEmpty()
    {
        $categorie = new Categorie();

        $this->assertEmpty($categorie->getNom());
        $this->assertEmpty($categorie->getDescription());
        $this->assertEmpty($categorie->getSlug());
    }
}
