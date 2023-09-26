<?php

namespace Boilr\App\Controller;

use Websystems\BoilrCore\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {   
        return $this->render('index.php', [
            'test_arg' => "Testowy parametr"
        ]);
    }

    public function layout()
    {   
        return $this->render('dashboard.html.twig', [

        ]);
    }

    public function testHandler()
    {
        dump($this->request);
    }

    public function testAction(...$args)
    {
        //dump($args);
    }

    public function testFilterAction(...$args)
    {
        
    }

    public function apiTest()
    {
        return "1";
    }
}