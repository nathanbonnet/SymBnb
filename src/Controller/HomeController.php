<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * Fonction de test qui renvoie hello world.
     * 
     * @route("/hello/{prenom}/{age}", name="hello")
     *
     * @param string $prenom
     * @param integer $age
     * @return Response
     */
    public function hello($prenom = "anonyme", $age = 0)
    {
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
            );
    }

    /**
     * Undocumented function
     * 
     * @Route("/", name="homepage")
     *
     * @return void
     */
    public function home(){
        $prenoms = ["Lior" => 12, "Joseph" => 31, "Anne" => 55];
        return $this->render(
            "home.html.twig",
            [ 
                "title" => "bonjours à tous",
                "age" => "13",
                "tableau" => $prenoms,
            ]
        );
    }

}

?>