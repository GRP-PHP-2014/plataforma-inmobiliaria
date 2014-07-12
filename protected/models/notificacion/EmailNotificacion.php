<?php

class EmailNotificacion extends EMongoDocument // Notice: We extend EMongoDocument class instead of CActiveRecord
{
    public $fechaHoraEnvio;
    public $mensaje;
    public $tipoNotificacion;
    public $emailCliente;
    public $nombreCliente;
    public $telefonoCliente;
    public $estado;
 
    /**
     * This method have to be defined in every Model
     * @return string MongoDB collection name, witch will be used to store documents of this model
     */
    public function getCollectionName()
    {
        return 'emailsNotificacion';
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
            'fechaHoraEnvio' => 'fechaHoraEnvio',
            'mensaje' => 'mensaje',
            'tipoNotificacion' => 'tipoNotificacion',
            'nombreCliente' => 'nombreCliente',
            'emailCliente' => 'emailCliente',
            'telefonoCliente' => 'telefonoCliente',
            'estado' => 'estado',
        );
    }
    
    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        
        $criteria = new EMongoCriteria();
        $criteria->tipoNotificacion = new MongoRegex("/^" . $this->tipoNotificacion . "/i"); 

        return new EMongoDocumentDataProvider('EmailNotificacion', 
            array(
                'criteria' => $criteria
            )
        );
    }
 
    /**
     * This method have to be defined in every model, like with normal CActiveRecord
     */
    public static function model($className="EmailNotificacion")
    {
        return parent::model("EmailNotificacion");
    }
}
