<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PruebasController extends Controller
{
    /**
     * @Route("/pruebas/index", name="pruebasIndex")
     */
    public function indexAction(Request $request, $name, $page)
    {
      $productos = [
        ["producto" => "Consola 1", "precio" => 1],
        ["producto" => "Consola 2", "precio" => 2],
        ["producto" => "Consola 3", "precio" => 3],
        ["producto" => "Consola 4", "precio" => 4],
        ["producto" => "Consola 5", "precio" => 5],
        ["producto" => "Consola 6", "precio" => 6],
      ];

      $fruta = ["Manzana" => "Manzana", "Pera" => "Pera", "Piña" => "Piña",];
      //return $this->redirect($request->getBaseUrl()."/hello-world?hola=true");
    /*  var_dump($request->query->get("hola"));
      var_dump($request->get("hola-post"));
      die();*/
      // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', [
          'texto' => " <-> hola mundo - " . $name . ' - '. $page,
          'productos' => $productos,
          'fruta' => $fruta
        ]);
    }

}
