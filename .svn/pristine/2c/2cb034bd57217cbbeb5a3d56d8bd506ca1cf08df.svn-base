<?php

/**
 * This is the model class for table "drugschedule".
 *
 * The followings are the available columns in table 'drugschedule':
 * @property integer $id
 * @property integer $pid
 * @property string $DrugName
 * @property integer $DosePerDay
 * @property integer $TotalDay
 * @property integer $RecentDay
 * @property integer $wakeup
 * @property integer $breakfast
 * @property integer $morning
 * @property integer $midmorning
 * @property integer $midday
 * @property integer $lunch
 * @property integer $midafternoon
 * @property integer $evening
 * @property integer $dinner
 * @property integer $bedtime
 */
class Drugschedule extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'drugschedule';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('', 'required'),
			array('pid, DosePerDay, TotalDay, RecentDay, wakeup, breakfast, morning, midmorning, midday, lunch, midafternoon, evening, dinner, bedtime', 'numerical', 'integerOnly'=>true),
			array('DrugName', 'length', 'max'=>125),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, pid, DrugName, DosePerDay, TotalDay, RecentDay, wakeup, breakfast, morning, midmorning, midday, lunch, midafternoon, evening, dinner, bedtime', 'safe', 'on'=>'search'),
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
			'pid' => 'Pid',
			'DrugName' => 'Drug Name',
			'DosePerDay' => 'Dose Per Day',
			'TotalDay' => 'Total Day',
			'RecentDay' => 'Recent Day',
			'wakeup' => 'Wakeup',
			'breakfast' => 'Breakfast',
			'morning' => 'Morning',
			'midmorning' => 'Midmorning',
			'midday' => 'Midday',
			'lunch' => 'Lunch',
			'midafternoon' => 'Midafternoon',
			'evening' => 'Evening',
			'dinner' => 'Dinner',
			'bedtime' => 'Bedtime',
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
		$criteria->compare('pid',$this->pid);
		$criteria->compare('DrugName',$this->DrugName,true);
		$criteria->compare('DosePerDay',$this->DosePerDay);
		$criteria->compare('TotalDay',$this->TotalDay);
		$criteria->compare('RecentDay',$this->RecentDay);
		$criteria->compare('wakeup',$this->wakeup);
		$criteria->compare('breakfast',$this->breakfast);
		$criteria->compare('morning',$this->morning);
		$criteria->compare('midmorning',$this->midmorning);
		$criteria->compare('midday',$this->midday);
		$criteria->compare('lunch',$this->lunch);
		$criteria->compare('midafternoon',$this->midafternoon);
		$criteria->compare('evening',$this->evening);
		$criteria->compare('dinner',$this->dinner);
		$criteria->compare('bedtime',$this->bedtime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Drugschedule the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
