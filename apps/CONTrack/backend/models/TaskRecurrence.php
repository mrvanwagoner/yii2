<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_task_recurrence".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $task_id
 * @property string $campaign_id
 * @property string $schedule_picklist_id
 * @property string $project_term_picklist_id
 * @property integer $frequency
 * @property string $week_period_picklist_id
 * @property integer $sun
 * @property integer $mon
 * @property integer $tue
 * @property integer $wed
 * @property integer $thu
 * @property integer $fri
 * @property integer $sat
 * @property string $target_picklist_id
 * @property integer $1
 * @property integer $2
 * @property integer $3
 * @property integer $4
 * @property integer $5
 * @property integer $6
 * @property integer $7
 * @property integer $8
 * @property integer $9
 * @property integer $10
 * @property integer $11
 * @property integer $12
 * @property integer $13
 * @property integer $14
 * @property integer $15
 * @property integer $16
 * @property integer $17
 * @property integer $18
 * @property integer $19
 * @property integer $20
 * @property integer $21
 * @property integer $22
 * @property integer $23
 * @property integer $24
 * @property integer $25
 * @property integer $26
 * @property integer $27
 * @property integer $28
 * @property integer $29
 * @property integer $30
 * @property integer $31
 * @property string $month_period_picklist_id
 * @property integer $jan
 * @property integer $feb
 * @property integer $mar
 * @property integer $apr
 * @property integer $may
 * @property integer $jun
 * @property integer $jul
 * @property integer $aug
 * @property integer $sep
 * @property integer $oct
 * @property integer $nov
 * @property integer $dec
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Campaign $campaign
 * @property Entity $createdByEntity
 * @property Picklist $monthPeriodPicklist
 * @property Picklist $projectTermPicklist
 * @property Picklist $schedulePicklist
 * @property Picklist $targetPicklist
 * @property Task $task
 * @property Entity $updatedByEntity
 * @property Picklist $weekPeriodPicklist
 */
class TaskRecurrence extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_task_recurrence';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'task_id', 'campaign_id', 'schedule_picklist_id', 'project_term_picklist_id', 'frequency', 'week_period_picklist_id', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'target_picklist_id', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', 'month_period_picklist_id', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['task_id'], 'required'],
			[['note'], 'string'],
			[['create_time', 'update_time'], 'safe']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'is_active' => 'Is Active',
			'task_id' => 'Task ID',
			'campaign_id' => 'Campaign ID',
			'schedule_picklist_id' => 'Schedule Picklist ID',
			'project_term_picklist_id' => 'Project Term Picklist ID',
			'frequency' => 'Frequency',
			'week_period_picklist_id' => 'Week Period Picklist ID',
			'sun' => 'Sun',
			'mon' => 'Mon',
			'tue' => 'Tue',
			'wed' => 'Wed',
			'thu' => 'Thu',
			'fri' => 'Fri',
			'sat' => 'Sat',
			'target_picklist_id' => 'Target Picklist ID',
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12',
			'13' => '13',
			'14' => '14',
			'15' => '15',
			'16' => '16',
			'17' => '17',
			'18' => '18',
			'19' => '19',
			'20' => '20',
			'21' => '21',
			'22' => '22',
			'23' => '23',
			'24' => '24',
			'25' => '25',
			'26' => '26',
			'27' => '27',
			'28' => '28',
			'29' => '29',
			'30' => '30',
			'31' => '31',
			'month_period_picklist_id' => 'Month Period Picklist ID',
			'jan' => 'Jan',
			'feb' => 'Feb',
			'mar' => 'Mar',
			'apr' => 'Apr',
			'may' => 'May',
			'jun' => 'Jun',
			'jul' => 'Jul',
			'aug' => 'Aug',
			'sep' => 'Sep',
			'oct' => 'Oct',
			'nov' => 'Nov',
			'dec' => 'Dec',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCampaign()
	{
		return $this->hasOne(Campaign::className(), ['id' => 'campaign_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCreatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'created_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMonthPeriodPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'month_period_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectTermPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'project_term_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSchedulePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'schedule_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTargetPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'target_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTask()
	{
		return $this->hasOne(Task::className(), ['id' => 'task_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getWeekPeriodPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'week_period_picklist_id']);
	}
}
