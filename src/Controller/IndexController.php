<?php
/**
 * chemin vers les contrôleurs
 */

namespace App\Controller;

// pour envoyer une réponse http
use Symfony\Component\HttpFoundation\Response;


// nom de la classe comme le nom de fichier
class IndexController
{
    // nom de la méthode
    public function accueilAction()
    {
        // réponse http en dur
        return new Response("<html><body><h1>Hello world!</h1><a href='/deux'>Page 2</a> | <a href='/twig'>première page TWIG</a></body></html>");
    }
    // nom de la méthode
    public function deuxAction()
    {
        // réponse http en dur
        return new Response("<html><body><h1>page 2</h1><a href='/'>Retour à l'accueil</a></body></html>");
    }
}