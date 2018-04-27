<?php 
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CatalogoController extends AbstractActionController {
    
    // New view 
    public function listarAction()
    {
        return new ViewModel(
                [
                    "productos" =>[
                        "television", 
                        "laptop", 
                        "book"
                    ], 
                    "titulo" => "Listar Action"
                ]
            );


        
    }
}
