<?php

class Evento extends EMongoDocument // Notice: We extend EMongoDocument class instead of CActiveRecord
{
    public $titulo;
    public $descripcion;
    public $fechaHoraDesde;
    public $fechaHoraHasta;
    public $idInmueble;
    public $tituloInmueble;
    public $idCliente;
    public $emailCliente;
    public $idUsuario;
 
    /**
     * This method have to be defined in every Model
     * @return string MongoDB collection name, witch will be used to store documents of this model
     */
    public function getCollectionName()
    {
        return 'eventosCalendarioUsuario';
    }
 
    // We can define rules for fields, just like in normal CModel/CActiveRecord classes
    public function rules()
    {
        return array(
        );
    }
 
    // the same with attribute names
    public function attributeNames()
    {
        return array(
            '_id' => '_id',
            'titulo' => 'titulo',
            'descripcion' => 'descripcion',
            'fechaHoraDesde' => 'fechaHoraDesde',
            'fechaHoraHasta' => 'fechaHoraHasta',
            'idCliente' => 'idCliente',
            'emailCliente' => 'emailCliente',
            'idInmueble' => 'idInmueble',
            'tituloInmueble' => 'tituloInmueble',
            'idUsuario' => 'idUsuario',
        );
    }
    
    public function search() {
        
        //$criteria = new EMongoCriteria();
        //$criteria->tipoNotificacion = new MongoRegex("/^" . $this->tipoNotificacion . "/i"); 

        return new EMongoDocumentDataProvider('Evento'/*, 
            array(
                'criteria' => $criteria
            )*/
        );
    }
 
    /**
     * This method have to be defined in every model, like with normal CActiveRecord
     */
    public static function model($className="Evento")
    {
        return parent::model("Evento");
    }
    
    public function getListaClientes() {
        return CHtml::listData(Cliente::model()->findAll(), 'id', 'email');
    }
    
    public function getListaInmuebles() {
        return CHtml::listData(Inmueble::model()->findAll(), 'id', 'titulo');
    }
    
}
