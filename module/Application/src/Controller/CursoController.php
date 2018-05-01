<?php 
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CursoController extends AbstractActionController {
    
    public function listarAction()
    {
        // $cursos = array("Symfony 3", "Laravel 5", "Zend Framework 3", "CodeIgniter 3");
        // $cursos = " los cursos";


        // this one works too
        // $cursos = new ViewModel(); 
        // return $cursos->setVariables(array(
        //         "curso1" => "Symfony 3", 
        //         "curso2" => "Laravel 5", 
        //         "curso3" => "Zend Framework 3", 
        //         "curso4" => "CodeIgniter 3"
        //     )
        // );
        // return $cursos; 
        
        $todaysDate = date('m-d-Y');

        return new ViewModel([
            "cursos" => [
                "Zend 3", 
                "Laravel ", 
                "Drupal",
                "Joomla", 
            ], 
            "titulo" => "Lista de Cursos",
            "fecha" => $todaysDate, 
            
        ]); 

        // return new ViewModel($cursos);
    }
}