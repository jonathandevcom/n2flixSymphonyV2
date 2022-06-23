<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class MovieFixtures extends Fixture
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
        $movie2->setImage('https://fr.web.img6.acsta.net/pictures/20/10/02/12/21/3764004.png');
        $movie2->setYear('1977');
        $movie2->setType("Action");

        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle('The Hobbit');
        $movie3->setImage('https://image.posterlounge.fr/images/l/1908791.jpg');
        $movie3->setYear('2012');
        $movie3->setType("Fantasy");

        $manager->persist($movie3);

        $movie4 = new Movie();
        $movie4->setTitle('The Lord of the Rings');
        $movie4->setImage('https://pictures.abebooks.com/isbn/9780544003415-fr.jpg');
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
