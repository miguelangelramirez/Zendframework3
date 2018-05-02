<?php 
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PartesController extends AbstractActionController 
{
    public function partesAction(){
        return New ViewModel([
            "motor" => [
                'pistones', 
                'bujias', 
                'injectores', 
                'bateria'
            ], 
            "chasis" => [
                'puertas', 
                'ventanas', 
                'luces', 
                'ruedas', 
                'antena'
            ], 
            "interior" => [
                'asientos', 
                'retrovisor', 
                'estereo'
            ], 
            "baul"
        ]);
    }

}