<?php

/**
 * This is the model class for table "inmuebles".
 *
 * The followings are the available columns in table 'inmuebles':
 * @property integer $id
 * @property string $titulo
 * @property string $descripcion
 * @property string $tipo_inmueble
 * @property integer $vista_al_mar
 * @property integer $tiene_calefaccion
 * @property double $gastos_comunes
 * @property integer $anio_construccion_aproximado
 * @property string $coord_latitud
 * @property string $coord_longitud
 * @property integer $cant_banios
 * @property integer $mts2_edificados
 * @property integer $cant_plantas_casa
 * @property integer $es_propiedad_horizontal
 * @property integer $cant_dormitorios
 * @property integer $numero_de_piso
 * @property integer $tiene_ascensor
 * @property integer $tiene_porteria
 * @property integer $tiene_portero_electrico
 * @property integer $tiene_vigilancia
 * @property string $tipo_local
 * @property string $tipo_local_observacion
 * @property integer $tiene_planta_alta
 * @property integer $altura_salon_principal
 * @property integer $cant_plantas_local
 * @property integer $tiene_estacionamiento
 * @property integer $tiene_deposito
 * @property string $potencia_contratada
 * @property integer $fk_estado
 *
 * The followings are the available model relations:
 * @property ImagenesInmueble[] $imagenesInmuebles
 * @property EstadosInmueble $fkEstado
 */
class Inmueble extends CActiveRecord {

    private $modelImagenes;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'inmuebles';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('titulo, descripcion, tipo_inmueble, fk_estado', 'required'),
            array('vista_al_mar, tiene_calefaccion, anio_construccion_aproximado, cant_banios, mts2_edificados, cant_plantas_casa, es_propiedad_horizontal, cant_dormitorios, numero_de_piso, tiene_ascensor, tiene_porteria, tiene_portero_electrico, tiene_vigilancia, tiene_planta_alta, altura_salon_principal, cant_plantas_local, tiene_estacionamiento, tiene_deposito, fk_estado', 'numerical', 'integerOnly' => true),
            array('gastos_comunes', 'numerical'),
            array('titulo', 'length', 'max' => 100),
            array('descripcion', 'length', 'max' => 2048),
            array('tipo_inmueble, tipo_local', 'length', 'max' => 50),
            array('tipo_local_observacion', 'length', 'max' => 1024),
            array('potencia_contratada', 'length', 'max' => 10),
            array('coord_latitud, coord_longitud', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, titulo, descripcion, tipo_inmueble, vista_al_mar, tiene_calefaccion, gastos_comunes, anio_construccion_aproximado, coord_latitud, coord_longitud, cant_banios, mts2_edificados, cant_plantas_casa, es_propiedad_horizontal, cant_dormitorios, numero_de_piso, tiene_ascensor, tiene_porteria, tiene_portero_electrico, tiene_vigilancia, tipo_local, tipo_local_observacion, tiene_planta_alta, altura_salon_principal, cant_plantas_local, tiene_estacionamiento, tiene_deposito, potencia_contratada, fk_estado', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'imagenesInmuebles' => array(self::HAS_MANY, 'ImagenInmueble', 'id_inmueble'),
            'fkEstado' => array(self::BELONGS_TO, 'EstadosInmueble', 'fk_estado'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descripcion' => 'Descripcion',
            'tipo_inmueble' => 'Tipo Inmueble',
            'vista_al_mar' => 'Vista Al Mar',
            'tiene_calefaccion' => 'Tiene Calefaccion',
            'gastos_comunes' => 'Gastos Comunes',
            'anio_construccion_aproximado' => 'Anio Construccion Aproximado',
            'coord_latitud' => 'Coord Latitud',
            'coord_longitud' => 'Coord Longitud',
            'cant_banios' => 'Cant Banios',
            'mts2_edificados' => 'Mts2 Edificados',
            'cant_plantas_casa' => 'Cant Plantas Casa',
            'es_propiedad_horizontal' => 'Es Propiedad Horizontal',
            'cant_dormitorios' => 'Cant Dormitorios',
            'numero_de_piso' => 'Numero De Piso',
            'tiene_ascensor' => 'Tiene Ascensor',
            'tiene_porteria' => 'Tiene Porteria',
            'tiene_portero_electrico' => 'Tiene Portero Electrico',
            'tiene_vigilancia' => 'Tiene Vigilancia',
            'tipo_local' => 'Tipo Local',
            'tipo_local_observacion' => 'Tipo Local Observacion',
            'tiene_planta_alta' => 'Tiene Planta Alta',
            'altura_salon_principal' => 'Altura Salon Principal',
            'cant_plantas_local' => 'Cant Plantas Local',
            'tiene_estacionamiento' => 'Tiene Estacionamiento',
            'tiene_deposito' => 'Tiene Deposito',
            'potencia_contratada' => 'Potencia Contratada',
            'fk_estado' => 'Fk Estado',
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
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('titulo', $this->titulo, true);
        $criteria->compare('descripcion', $this->descripcion, true);
        $criteria->compare('tipo_inmueble', $this->tipo_inmueble, true);
        $criteria->compare('vista_al_mar', $this->vista_al_mar);
        $criteria->compare('tiene_calefaccion', $this->tiene_calefaccion);
        $criteria->compare('gastos_comunes', $this->gastos_comunes);
        $criteria->compare('anio_construccion_aproximado', $this->anio_construccion_aproximado);
        $criteria->compare('coord_latitud', $this->coord_latitud, true);
        $criteria->compare('coord_longitud', $this->coord_longitud, true);
        $criteria->compare('cant_banios', $this->cant_banios);
        $criteria->compare('mts2_edificados', $this->mts2_edificados);
        $criteria->compare('cant_plantas_casa', $this->cant_plantas_casa);
        $criteria->compare('es_propiedad_horizontal', $this->es_propiedad_horizontal);
        $criteria->compare('cant_dormitorios', $this->cant_dormitorios);
        $criteria->compare('numero_de_piso', $this->numero_de_piso);
        $criteria->compare('tiene_ascensor', $this->tiene_ascensor);
        $criteria->compare('tiene_porteria', $this->tiene_porteria);
        $criteria->compare('tiene_portero_electrico', $this->tiene_portero_electrico);
        $criteria->compare('tiene_vigilancia', $this->tiene_vigilancia);
        $criteria->compare('tipo_local', $this->tipo_local, true);
        $criteria->compare('tipo_local_observacion', $this->tipo_local_observacion, true);
        $criteria->compare('tiene_planta_alta', $this->tiene_planta_alta);
        $criteria->compare('altura_salon_principal', $this->altura_salon_principal);
        $criteria->compare('cant_plantas_local', $this->cant_plantas_local);
        $criteria->compare('tiene_estacionamiento', $this->tiene_estacionamiento);
        $criteria->compare('tiene_deposito', $this->tiene_deposito);
        $criteria->compare('potencia_contratada', $this->potencia_contratada, true);
        $criteria->compare('fk_estado', $this->fk_estado);

        return new CActiveDataProvider($this, array(
            'pagination' => array('pageSize' => 10),
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Inmueble the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function getListaEstadosInmueble() {
        return CHtml::listData(EstadoInmueble::model()->findAll(), 'id', 'nombre');
    }
}
