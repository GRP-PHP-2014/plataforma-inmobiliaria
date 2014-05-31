<?php

class Inmueble extends EMongoDocument {

    public $_id;
    public $nombre;
    public $descripcion;
    
    public $attributes;
    public $errors;
    
    public function rules()
    {
        return array(
            array('nombre, descripcion', 'required'),
        );
    }

    // This method is required!
    public function getCollectionName() {
        return 'coleccion';
    }

    /**
     * This method have to be defined in every model, like with normal CActiveRecord
     */
    public static function model($className = __CLASS__) {
        return parent::model($classname);
    }

  // the same with attribute names
    public function attributeNames()
    {
        return array(
            'nombre' => 'nombre',
            'descripcion' => 'descripcion',
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
        
        //$criteria->compare('nombre', $this->nombre, true);
        
        return new EMongoDocumentDataProvider('Inmueble', array(
            'criteria'=> $criteria
        ));
    }
    
    public function cSave(){
        
        
        return true;
    }

}
