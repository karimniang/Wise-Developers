<?php
class SecurityController extends Controller
{

    public  function __construct()
    {
        $this->folder = "security";
        $this->layout = "default";
        // $this->validator = new Validator();
    }
    public function index()
    {
        $this->view = "accolade";
        $this->render();
    }

    public function lsChambre()
    {
        $this->view = "ListerChambre";
        $this->render();
    }
    public function lsEtudiant()
    {
        $this->view = "ListerEtudiant";
        $this->render();
    }
    public function addChambre()
    {
        $this->view = "AjoutChambre";
        $this->render();
    }
    public function addEtudiant()
    {
        $this->view = "AjouteEtudiant";
        $this->render();
    }
    // public function vinscription()
    //{
    //  $this->data_view["title"] = "Pour tester votre niveau de culture générale";
    //$this->view = "inscription";
    //     $this->render();
    //}
}
