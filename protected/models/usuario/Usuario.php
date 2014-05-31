<?php

/**
 * This is the model class for table "usuarios".
 *
 * The followings are the available columns in table 'usuarios':
 * @property string $usuario
 * @property string $email
 * @property string $contrasenia
 * @property string $nombre
 * @property string $apellido
 * @property string $ultimo_ingreso
 * @property integer $habilitado
 */
class Usuario extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'usuarios';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('usuario, email, contrasenia', 'required'),
            array('habilitado', 'numerical', 'integerOnly'=>true),
            array('usuario, email, contrasenia', 'length', 'max'=>64),
            array('nombre, apellido', 'length', 'max'=>100),
            array('rol', 'length', 'max'=>50),
            array('ultimo_ingreso', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('usuario, email, contrasenia, nombre, apellido, ultimo_ingreso, habilitado', 'safe', 'on'=>'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'usuario' => 'Usuario',
            'email' => 'Email',
            'contrasenia' => 'Contrase&ntilde;a',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'ultimo_ingreso' => 'Ultimo Ingreso',
            'habilitado' => 'Habilitado',
            'rol' => 'Rol',
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
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('usuario',$this->usuario,true);
        $criteria->compare('email',$this->email,true);
        $criteria->compare('contrasenia',$this->contrasenia,true);
        $criteria->compare('nombre',$this->nombre,true);
        $criteria->compare('apellido',$this->apellido,true);
        $criteria->compare('ultimo_ingreso',$this->ultimo_ingreso,true);
        $criteria->compare('habilitado',$this->habilitado);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Usuario the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}