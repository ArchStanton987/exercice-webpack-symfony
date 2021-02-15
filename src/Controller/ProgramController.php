<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/programs", name="program_")
 */
class ProgramController extends AbstractController
{
  /**
   * @Route("/", name="index")
   */
  public function index(): Response
  {
    return $this->render('programs/show.html.twig');
  }

  /**
   * @Route("/list/{page}", methods={"GET"} requirements={"page"="\d+"}, name="list")
   */
  public function list(int $page = 1): Response
  {
    return $this->render('programs/list.html.twig', ['page' => $page]);
  }

  /**
   * @Route("/new", methods={"GET","POST"}, name="new")
   */
  public function new(): Response
  {
    return $this->redirectToRoute('program_index', ['id' => 4]);
  }
}