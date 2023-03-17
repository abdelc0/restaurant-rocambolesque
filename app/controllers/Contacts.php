<?php
class Contacts extends Controller
{
  private $contactModel;

  public function __construct()
  {
    $this->contactModel = $this->model('Contact');
  }

  public function contact()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $this->view('homepages/contact');
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $createdcontact = $this->contactModel->createContact($_POST);

            if ($createdcontact) {
                $data = ['success' => 'Uw contactformulier is aangekomen, wij nemen binnenkort contact met u op.'];
                $this->view('homepages/contact', $data);
            } else {
                $data = ['error' => 'Er is iets misgegaan tijdens het versturen van uw contact formulier.'];
                $this->view('homepages/contact', $data);
            }
        } catch (PDOException $e) {
            echo 'Er is iets misgegaan tijdens het contact opnemen (PDOException)';
            header('Refresh: 3; url=' . URLROOT . '/homepages/contact');
        }
    }
  }

}
