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
        $movie2->setImage('https://upload.wikimedia.org/wikipedia/commons/6/6c/Star_Wars_Logo.svg');
        $movie2->setYear('1977');
        $movie2->setType("Action");

        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('The Hobbit');
        $movie3->setImage('https://static.hitek.fr/img/actualite/ill_m/158956086/lehobbittrilogie.webp');
        $movie3->setYear('2012');
        $movie3->setType("Fantasy");

        $manager->persist($movie3);

        $movie4 = new Movie();
        $movie4->setTitle('The Lord of the Rings');
        $movie4->setImage('data:image/jpeg;base64,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');
        $movie4->setYear('2001');
        $movie4->setType("Fantasy");

        $manager->persist($movie4);

        $movie5 = new Movie();
        $movie5->setTitle('The Matrix');
        $movie5->setImage('https://play-lh.googleusercontent.com/SPex4LxBKzJkk3SOt8qtlq05wW6NsoKjLEqHIIDmUtqRYhsIGtKpXZZbdBYLyqSulWP0Fn41xx8RCnXNNIA');
        $movie5->setYear('1999');
        $movie5->setType("Action");

        $manager->persist($movie5);

        $movie6 = new Movie();
        $movie6->setTitle('The Dark Knight');
        $movie6->setImage('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQfQgYaGGkXDt_8WRcMPkaWGEF6KPKa2Sw53V5sksHO5V2XB7rl');
        $movie6->setYear('2008');
        $movie6->setType("Action");

        $manager->persist($movie6);

        $movie7 = new Movie();
        $movie7->setTitle('The Hobbit: An Unexpected Journey');
        $movie7->setImage('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSjFWAlENd7eRvVM_4X5jKgHoHQDDfoNFjmFq4fiqZa2nFncq-4');
        $movie7->setYear('2012');
        $movie7->setType("Fantasy");

        $manager->persist($movie7);

        $movie8 = new Movie();
        $movie8->setTitle('The Lord of the Rings: The Fellowship of the Ring');
        $movie8->setImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNrPYBWNct4YCZCs-Ktj1UjKK2MWWZuP3NG7YJ1otFdhQv3gZ2');
        $movie8->setYear('2001');
        $movie8->setType("Fantasy");

        $manager->persist($movie8);

        $movie9 = new Movie();
        $movie9->setTitle('The Matrix Reloaded');
        $movie9->setImage('https://fr.web.img3.acsta.net/medias/nmedia/00/02/53/34/affiche.jpg');
        $movie9->setYear('2003');
        $movie9->setType("Action");

        $manager->persist($movie9);

        $movie10 = new Movie();
        $movie10->setTitle('The Matrix Revolutions');
        $movie10->setImage('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSdo015PyOgT9JBjtyEGvLnMQoYVPUNvsyUPHBCrnXCiR8JgyBZ');
        $movie10->setYear('2003');
        $movie10->setType("Action");

        $manager->persist($movie10);
        $manager->flush();
    }
}
