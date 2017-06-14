<?php

/**
 * This is the model class for table "p_info".
 *
 * The followings are the available columns in table 'p_info':
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $dob
 * @property string $gender
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zipcode
 * @property string $country
 * @property string $phone
 * @property string $SIN
 */
class Patient extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'p_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, firstname, lastname, dob, gender, street, city, zipcode, country, phone, SIN,relative, relation,home_phone,cell', 'required'),
			array('firstname, middlename, lastname, SIN', 'length', 'max'=>30),
			array('dob, street', 'length', 'max'=>25),
			array('gender, country', 'length', 'max'=>15),
			array('city, state, phone', 'length', 'max'=>20),
			array('zipcode', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstname, middlename, lastname, dob, gender, street, city, state, zipcode, country, phone, SIN', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
                        'title'=>'Title',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'dob' => 'Dob',
			'gender' => 'Gender',
			'street' => 'Street',
			'city' => 'City',
			'state' => 'State',
			'zipcode' => 'Zipcode',
			'country' => 'Country',
			'phone' => 'Phone',
			'SIN' => 'Sin',
                        'relative' => 'Relative',
                        'relation' => 'Relation',
                        'home_phone' => 'Home',
                        'cell' => 'Cell',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state',$this->state,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('SIN',$this->SIN,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Patient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
     
}
