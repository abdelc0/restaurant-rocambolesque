<?php
class Homepages extends Controller
{
  public function index()
  {
    $this->view('homepages/index');
  }

  public function about()
  {
    $this->view('homepages/about');
  }

  public function contact()
  {
    $this->view('homepages/contact');
  }
  
  public function faq()
  {
    $this->view('homepages/faq');
  }
}