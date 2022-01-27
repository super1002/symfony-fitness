<?php

namespace App\DataFixtures;

use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Uid\Uuid;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $equipment = [
            'Barbell',
            'Dumbbell',
            'Resistance band',
            'Kettlebell',
        ];
        foreach ($equipment as $name) {
            $item = new Equipment();
            $item->setName($name);
            $manager->persist($item);
        }

        $manager->flush();
    }
}
