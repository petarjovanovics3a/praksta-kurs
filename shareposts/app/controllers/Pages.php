<?php
  class Pages extends Controller {
    public function __construct(){   
    }   
    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }
      $data = [
        'title' => 'Test', 'description' => 'PHP'
      ];   
      $this->view('pages/index', $data);
    }
    public function about(){
      $data = [
        'title' => 'O nama', 'description' => 'Zadatak iz kursa'
      ];
      $this->view('pages/about', $data);
    }
  }