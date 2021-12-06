<?php 

class homeController extends Controller {
  function __construct()
  {
    parent::auth();
  }

  function index()
  {

    $data =
    [
      'title' => 'Inicio',
      'posts' => [],
    ];

    View::render('index', $data);

  }

}