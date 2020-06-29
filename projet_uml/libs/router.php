<?php

class Router
{

    private $ctrl;
    //Url => index.php?url=security/index
    //Reecrire URL =>security/index
    function route()
    {

        try {
            spl_autoload_register(function ($class) {
                $pathModels = "./models/" . $class . ".php";
                $pathDao = "./dao/" . $class . ".php";
                $pathLibs = "./libs/" . $class . ".php";
                if (file_exists($pathModels)) {
                    require_once($pathModels);
                } elseif (file_exists($pathDao)) {
                    require_once($pathDao);
                } elseif (file_exists($pathLibs)) {
                    require_once($pathLibs);
                }
            });


            if (isset($_GET['link'])) {
                if ($_GET['link'] == "addChambre") {
                    $pathCtrl = "./controllers/SecurityController.php";
                    require_once($pathCtrl);
                    $this->ctrl = new SecurityController();
                    $this->ctrl->addChambre();
                } elseif ($_GET['link'] == "addEtudiant") {
                    $pathCtrl = "./controllers/SecurityController.php";
                    require_once($pathCtrl);
                    $this->ctrl = new SecurityController();
                    $this->ctrl->addEtudiant();
                } elseif ($_GET['link'] == "lsChambre") {
                    $pathCtrl = "./controllers/SecurityController.php";
                    require_once($pathCtrl);
                    $this->ctrl = new SecurityController();
                    $this->ctrl->lsChambre();
                } elseif ($_GET['link'] == "lsEtudiant") {
                    $pathCtrl = "./controllers/SecurityController.php";
                    require_once($pathCtrl);
                    $this->ctrl = new SecurityController();
                    $this->ctrl->lsEtudiant();
                }
            } else {
                $pathCtrl = "./controllers/SecurityController.php";
                require_once($pathCtrl);
                $this->ctrl = new SecurityController();
                $this->ctrl->index();
            }
        } catch (Exception $ex) {
        }
    }
}
