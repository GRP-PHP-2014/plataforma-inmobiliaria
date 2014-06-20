<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class RWSController extends CController
{
    
    public function __construct() {
        $this->fillArguments();
    }
    
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_HEAD = 'HEAD';
    const METHOD_DELETE = 'DELETE';
    
    protected $arguments;
	
    /**
     * Descripcion: Hidrata el array $arguments con la informacion enviada desde el cliente dependiendo del
     * metodo que se trate.
     */
    protected function fillArguments() {
        $method = filter_input(INPUT_SERVER, 'REQUEST_METHOD');
        switch ($method) {
            case RWSController::METHOD_GET:
            case RWSController::METHOD_HEAD:
                $this->arguments = $_GET;
                break;
            case RWSController::METHOD_POST:
                $json = file_get_contents('php://input');
                $this->arguments = json_decode($json, true);
                if( $this->arguments == null)
                {
                    $this->arguments = $_POST;
                }
                break;
            case RWSController::METHOD_PUT:
                break;
            case RWSController::METHOD_DELETE:
                parse_str(file_get_contents('php://input'), $this->arguments);
                break;
        }
    }

    
}