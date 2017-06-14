<?php

/**
 * This is the model class for table "appdoc".
 *
 * The followings are the available columns in table 'appdoc':
 * @property integer $AppDocID
 * @property string $ApplNo
 * @property string $SeqNo
 * @property string $DocType
 * @property string $DocTitle
 * @property string $DocURL
 * @property string $DocDate
 * @property string $ActionType
 * @property integer $DuplicateCounter
 */
class Appdoc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'appdoc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AppDocID, ApplNo, SeqNo, DocType, ActionType', 'required'),
			array('AppDocID, DuplicateCounter', 'numerical', 'integerOnly'=>true),
			array('ApplNo', 'length', 'max'=>6),
			array('SeqNo', 'length', 'max'=>4),
			array('DocType', 'length', 'max'=>50),
			array('DocTitle', 'length', 'max'=>100),
			array('DocURL', 'length', 'max'=>200),
			array('ActionType', 'length', 'max'=>10),
			array('DocDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AppDocID, ApplNo, SeqNo, DocType, DocTitle, DocURL, DocDate, ActionType, DuplicateCounter', 'safe', 'on'=>'search'),
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
			'AppDocID' => 'App Doc',
			'ApplNo' => 'Appl No',
			'SeqNo' => 'Seq No',
			'DocType' => 'Doc Type',
			'DocTitle' => 'Doc Title',
			'DocURL' => 'Doc Url',
			'DocDate' => 'Doc Date',
			'ActionType' => 'Action Type',
			'DuplicateCounter' => 'Duplicate Counter',
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

		$criteria->compare('AppDocID',$this->AppDocID);
		$criteria->compare('ApplNo',$this->ApplNo,true);
		$criteria->compare('SeqNo',$this->SeqNo,true);
		$criteria->compare('DocType',$this->DocType,true);
		$criteria->compare('DocTitle',$this->DocTitle,true);
		$criteria->compare('DocURL',$this->DocURL,true);
		$criteria->compare('DocDate',$this->DocDate,true);
		$criteria->compare('ActionType',$this->ActionType,true);
		$criteria->compare('DuplicateCounter',$this->DuplicateCounter);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Appdoc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
