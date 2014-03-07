<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_campaign_step".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $campaign_id
 * @property string $step_number
 * @property string $description
 * @property string $project_task_picklist_id
 * @property string $status_picklist_id
 * @property integer $perform
 * @property string $period_picklist_id
 * @property string $order
 * @property string $from
 * @property string $specific_date
 * @property string $document_id
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Campaign $campaign
 * @property Entity $createdByEntity
 * @property Picklist $periodPicklist
 * @property Entity $projectTaskPicklist
 * @property Entity $updatedByEntity
 * @property Task[] $tasks
 */
class CampaignStep extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_campaign_step';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'campaign_id', 'step_number', 'project_task_picklist_id', 'status_picklist_id', 'perform', 'period_picklist_id', 'document_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['campaign_id', 'step_number'], 'required'],
			[['description', 'order', 'from', 'note'], 'string'],
			[['specific_date', 'create_time', 'update_time'], 'safe']
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
			'campaign_id' => 'Campaign ID',
			'step_number' => 'Step Number',
			'description' => 'Description',
			'project_task_picklist_id' => 'Project Task Picklist ID',
			'status_picklist_id' => 'Status Picklist ID',
			'perform' => 'Perform',
			'period_picklist_id' => 'Period Picklist ID',
			'order' => 'Order',
			'from' => 'From',
			'specific_date' => 'Specific Date',
			'document_id' => 'Document ID',
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
	public function getPeriodPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'period_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectTaskPicklist()
	{
		return $this->hasOne(Entity::className(), ['id' => 'project_task_picklist_id']);
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
	public function getTasks()
	{
		return $this->hasMany(Task::className(), ['campaign_step_id' => 'id']);
	}
}
