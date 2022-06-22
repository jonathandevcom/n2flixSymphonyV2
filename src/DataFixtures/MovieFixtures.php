<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures /*extends Fixture*/
{
    public function __construct()
    {
    }
  /*  
    public function load(ObjectManager $manager)
    {
        $movie = new Movie();
        $movie->setTitle('Game of Throne');
        $movie->setImage('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQ-tLgIt3dwgSlbWGnWFdzCiNuxifSvpJCCTk8dsODbSHuiRsu5');
        $movie->setYear('2011');
        $movie->setType("Drame");

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Star Wars');
        $movie2->setImage('');


        $manager->flush();
    }*/
}
