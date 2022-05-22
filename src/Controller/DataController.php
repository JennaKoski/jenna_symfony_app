<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('data/index.html.twig');
    }

    #[Route('/myHobbies', name:'myHobbies')]
    public function myHobbies(): Response
    {
        $hobbies = ['🏇🏼 Horseback riding','🏋🏽‍♀️ Crossfit', '⛷ Downhill skiing','⛰ Hiking in the mountains','🎹 Playing piano'];

        return $this->render('data/hobbies.html.twig', ['hobbies'=>$hobbies]);
    }

    #[Route('/myFavourites', name: 'myFavourites')]
    public function myFavourites(): Response
    {
        $favourites = ['Music: jazz', 'City: Budapest', 'Landscape: mountains', 'Season: summer', 'Drink: hugo', 'Food: sushi', 'TV character: Mr. Bean'];

        return $this->render('data/favourites.html.twig', ['favourites'=>$favourites]);
    }
}
