<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $this->loadMainCategories($manager);
    }
    private function loadMainCategories($manager)
    {
        foreach ($this->getMainCategoriesData() as [$name]) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
        }

        $manager->flush();
    }

    private function getMainCategoriesData()
    {
        return [
            ['Funny', 1],
            ['Scary', 2],
            ['Unbelievable', 3],
            ['Inspirational', 4],
            ['Motivating ', 5],
            ['Surprising', 6],
            ['Sad', 7],
            ['Relaxing', 8],
        ];
    }
}
