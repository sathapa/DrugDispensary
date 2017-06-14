<?php

/**
 * This is the model class for table "application".
 *
 * The followings are the available columns in table 'application':
 * @property string $AppINo
 * @property string $AppIType
 * @property string $SponsorApplication
 * @property integer $MostRecentLabelAvailableFlag
 * @property integer $CurrentPatentFlag
 * @property string $ActionType
 * @property string $Chemical_Type
 * @property string $Therapeutic_Potential
 * @property string $Orphan_Code
 */
class Application extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'application';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AppINo, AppIType, SponsorApplication, MostRecentLabelAvailableFlag, CurrentPatentFlag, ActionType', 'required'),
			array('MostRecentLabelAvailableFlag, CurrentPatentFlag', 'numerical', 'integerOnly'=>true),
			array('AppINo', 'length', 'max'=>6),
			array('AppIType', 'length', 'max'=>5),
			array('SponsorApplication', 'length', 'max'=>50),
			array('ActionType', 'length', 'max'=>10),
			array('Chemical_Type', 'length', 'max'=>3),
			array('Therapeutic_Potential', 'length', 'max'=>2),
			array('Orphan_Code', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AppINo, AppIType, SponsorApplication, MostRecentLabelAvailableFlag, CurrentPatentFlag, ActionType, Chemical_Type, Therapeutic_Potential, Orphan_Code', 'safe', 'on'=>'search'),
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
			'AppINo' => 'App Ino',
			'AppIType' => 'App Itype',
			'SponsorApplication' => 'Sponsor Application',
			'MostRecentLabelAvailableFlag' => 'Most Recent Label Available Flag',
			'CurrentPatentFlag' => 'Current Patent Flag',
			'ActionType' => 'Action Type',
			'Chemical_Type' => 'Chemical Type',
			'Therapeutic_Potential' => 'Therapeutic Potential',
			'Orphan_Code' => 'Orphan Code',
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

		$criteria->compare('AppINo',$this->AppINo,true);
		$criteria->compare('AppIType',$this->AppIType,true);
		$criteria->compare('SponsorApplication',$this->SponsorApplication,true);
		$criteria->compare('MostRecentLabelAvailableFlag',$this->MostRecentLabelAvailableFlag);
		$criteria->compare('CurrentPatentFlag',$this->CurrentPatentFlag);
		$criteria->compare('ActionType',$this->ActionType,true);
		$criteria->compare('Chemical_Type',$this->Chemical_Type,true);
		$criteria->compare('Therapeutic_Potential',$this->Therapeutic_Potential,true);
		$criteria->compare('Orphan_Code',$this->Orphan_Code,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Application the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
