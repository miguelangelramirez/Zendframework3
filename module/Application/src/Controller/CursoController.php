<?php 
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CursoController extends AbstractActionController {
    
    public function listarAction(){
        $cursos = [
            "Symfony 3", 
            "Laravel 5", 
            "Zend Framework 3", 
            "CodeIgniter 3", 
            "Date" => DateTime(mm-dd-YY)
        ];

        return $cursos;
    }
}