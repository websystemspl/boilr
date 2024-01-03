<?php

namespace Boilr\App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
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
            'test_arg' => "Testowy parametr",
            'dupa' => "test"
        ]);
    }

    public function testHandler()
    {
        $this->addFlash("success", "<h3>Hi there!</h3> Your handler sent flash message and redirected you to previous page.");
        $response =  new RedirectResponse(admin_url('admin.php?page=boilr'));
        $response->send();
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

    public function ajaxAdminAction()
    {
        $response = new JsonResponse($this->request);
        $response->send();
    }

    public function configAction()
    {
        
    }
}