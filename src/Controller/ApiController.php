<?php

namespace App\Controller;

use App\Entity\FrequentationMuseesDeFrance2018;
use App\Entity\ListeEtLocalisationDesMuseesDeFrance;
use App\Repository\ListeEtLocalisationDesMuseesDeFranceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    //

    // Affichage de la table "FrequentationMuseesdeFrance2018"

    //

    #[Route('/frequentation', name: 'frequentation')]
    public function frequentation(ManagerRegistry $doctrine): JsonResponse
    {
        $frequentation = $doctrine->getRepository(FrequentationMuseesDeFrance2018::class)->findAll();

        return new JsonResponse($frequentation);
    }

    //

    // Affichage de la table "ListeEtLocalisationDesMuseesDeFrance"

    //

    #[Route('/liste', name: 'liste')]
    public function liste_all(ManagerRegistry $doctrine): JsonResponse
    {
        $liste = $doctrine->getRepository(ListeEtLocalisationDesMuseesDeFrance::class)->findAll();

        return new JsonResponse($liste);
    }

    //

    // Affichage des statistiques de la table "FrequentationMuseesDeFrance2018"

    //

    #[Route('/frequentation/stats', name: 'frequentation-stats')]
    public function frequentationStats(EntityManagerInterface $entityManager): JsonResponse
    {
        $repository = $entityManager->getRepository(FrequentationMuseesDeFrance2018::class);
        $query = $repository->createQueryBuilder('f')
            ->select(
                'f.id',
                'f.name',
                'f.city',
                'f.stats'
            )
            ->getQuery();
        $results = $query->getResult();

        return new JsonResponse($results);
    }

    //

    // Affichage des données choisies des musées dans la table "ListeEtLocalisationDesMuseesDeFrance" en fonction du département sélectionné

    //

    #[Route('/liste-departement/{departement}', name: 'liste-departement')]
    public function listeDepartement($departement, ListeEtLocalisationDesMuseesDeFranceRepository $repository): JsonResponse
    {
        $results = $repository->findByDepartment($departement);

        return new JsonResponse($results);
    }

    //

    // Affichage des données choisies des musées dans la table "ListeEtLocalisationDesMuseesDeFrance" en fonction de la région sélectionnée

    //

    #[Route('/liste-region/{regionAdministrative}', name: 'liste-region')]
    public function listeRegion($regionAdministrative, ListeEtLocalisationDesMuseesDeFranceRepository $repository): JsonResponse
    {
        $results = $repository->findByRegion($regionAdministrative);

        return new JsonResponse($results);
    }
}
