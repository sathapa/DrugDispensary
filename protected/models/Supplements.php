<?php

/**
 * This is the model class for table "supplements".
 *
 * The followings are the available columns in table 'supplements':
 * @property string $ApplNo
 * @property string $ActionType
 * @property string $InDocTypeSeqNo
 * @property integer $DuplicateCounter
 * @property string $ActionDate
 * @property string $DocType
 */
class Supplements extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'supplements';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApplNo, ActionType, InDocTypeSeqNo, DuplicateCounter', 'required'),
			array('DuplicateCounter', 'numerical', 'integerOnly'=>true),
			array('ApplNo', 'length', 'max'=>6),
			array('ActionType', 'length', 'max'=>10),
			array('InDocTypeSeqNo, DocType', 'length', 'max'=>4),
			array('ActionDate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ApplNo, ActionType, InDocTypeSeqNo, DuplicateCounter, ActionDate, DocType', 'safe', 'on'=>'search'),
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
			'ActionType' => 'Action Type',
			'InDocTypeSeqNo' => 'In Doc Type Seq No',
			'DuplicateCounter' => 'Duplicate Counter',
			'ActionDate' => 'Action Date',
			'DocType' => 'Doc Type',
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
		$criteria->compare('ActionType',$this->ActionType,true);
		$criteria->compare('InDocTypeSeqNo',$this->InDocTypeSeqNo,true);
		$criteria->compare('DuplicateCounter',$this->DuplicateCounter);
		$criteria->compare('ActionDate',$this->ActionDate,true);
		$criteria->compare('DocType',$this->DocType,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Supplements the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
