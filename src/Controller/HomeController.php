// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        // Your logic for the homepage

        return new Response('Welcome to the homepage!');
    }
}
