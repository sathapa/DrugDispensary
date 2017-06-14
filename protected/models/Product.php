<?php

/**
 * This is the model class for table "product".
 *
 * The followings are the available columns in table 'product':
 * @property string $ApplNo
 * @property string $ProductNo
 * @property string $Form
 * @property string $Dosage
 * @property integer $ProductMktStatus
 * @property string $TECode
 * @property integer $ReferenceDrug
 * @property string $Drugname
 * @property string $Activeingred
 */
class Product extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApplNo, ProductNo, ProductMktStatus, ReferenceDrug', 'required'),
			array('ProductMktStatus, ReferenceDrug', 'numerical', 'integerOnly'=>true),
			array('ApplNo', 'length', 'max'=>6),
			array('ProductNo', 'length', 'max'=>3),
			array('Form, Activeingred', 'length', 'max'=>255),
			array('Dosage', 'length', 'max'=>240),
			array('TECode', 'length', 'max'=>100),
			array('Drugname', 'length', 'max'=>125),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ApplNo, ProductNo, Form, Dosage, ProductMktStatus, TECode, ReferenceDrug, Drugname, Activeingred', 'safe', 'on'=>'search'),
		);
	}
        
         public static function usersAutoComplete($name='') {
 
        // Recommended: Secure Way to Write SQL in Yii 
    $sql= 'SELECT Drugname AS label FROM product WHERE title LIKE :name';
        $name = $name.'%';
        var_dump($sql);
        exit();
        return Yii::app()->db->createCommand($sql)->queryAll(true,array(':name'=>$name));
 
        // Not Recommended: Simple Way for those who can't understand the above way.
    // Uncomment the below and comment out above 3 lines 
    /*
    $sql= "SELECT id ,title AS label FROM users WHERE title LIKE '$name%'";
        return Yii::app()->db->createCommand($sql)->queryAll();
    */
 
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
			'Form' => 'Form',
			'Dosage' => 'Dosage',
			'ProductMktStatus' => 'Product Mkt Status',
			'TECode' => 'Tecode',
			'ReferenceDrug' => 'Reference Drug',
			'Drugname' => 'Drugname',
			'Activeingred' => 'Activeingred',
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
		$criteria->compare('Form',$this->Form,true);
		$criteria->compare('Dosage',$this->Dosage,true);
		$criteria->compare('ProductMktStatus',$this->ProductMktStatus);
		$criteria->compare('TECode',$this->TECode,true);
		$criteria->compare('ReferenceDrug',$this->ReferenceDrug);
		$criteria->compare('Drugname',$this->Drugname,true);
		$criteria->compare('Activeingred',$this->Activeingred,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Product the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
