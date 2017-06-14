<?php

/**
 * This is the model class for table "product_tecode".
 *
 * The followings are the available columns in table 'product_tecode':
 * @property string $ApplNo
 * @property string $ProductNo
 * @property string $TECode
 * @property integer $TESequence
 * @property integer $ProdMktStatus
 */
class ProductTecode extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_tecode';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApplNo, ProductNo, TECode, TESequence, ProdMktStatus', 'required'),
			array('TESequence, ProdMktStatus', 'numerical', 'integerOnly'=>true),
			array('ApplNo', 'length', 'max'=>6),
			array('ProductNo', 'length', 'max'=>3),
			array('TECode', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ApplNo, ProductNo, TECode, TESequence, ProdMktStatus', 'safe', 'on'=>'search'),
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
			'ApplNo' => 'Appl No',
			'ProductNo' => 'Product No',
			'TECode' => 'Tecode',
			'TESequence' => 'Tesequence',
			'ProdMktStatus' => 'Prod Mkt Status',
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

		$criteria->compare('ApplNo',$this->ApplNo,true);
		$criteria->compare('ProductNo',$this->ProductNo,true);
		$criteria->compare('TECode',$this->TECode,true);
		$criteria->compare('TESequence',$this->TESequence);
		$criteria->compare('ProdMktStatus',$this->ProdMktStatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductTecode the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
