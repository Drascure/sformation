<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(FormationRepository $formationRepository, PaginatorInterface $paginator, Request $request): Response
    {

        //paginate prend un ressource, la page courante, le nombre d'element par page et le tableau de trie
        $formations = $paginator->paginate(
            //On fait passer la requete au repository, ici c'est findBy où le tableau vide correspond à un findAll mais on choisi un tri par ordre décroissant avec l'id
            $formationRepository->findBy([], ['id' => 'DESC']),
            //Le query permet de récupérer l'information dans l'url
            $request->query->getInt('page', 1),
            10
        );
        // $formations = $formationRepository->findAll();

        return $this->render('home/index.html.twig', [
            'formations' => $formations,
        ]);

        // return $this->render('home/index.html.twig', [
        //     'formations' => $formationRepository->findAll(),
        // ]);


    }
}
