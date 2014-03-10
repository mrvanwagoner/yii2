<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_campaign".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $campaign_picklist_id
 * @property string $description
 * @property integer $is_contractor_campaign
 * @property integer $is_lender_campaign
 * @property integer $is_mortgage_campaign
 * @property integer $is_realtor_campaign
 * @property integer $is_service_campaign
 * @property string $originating_entity_id
 * @property integer $is_project_based
 * @property string $recipient_entity_ids
 * @property string $start_time
 * @property string $project_status_picklist_id
 * @property string $stop_time
 * @property string $recur_every
 * @property string $period_picklist_id
 * @property string $number_of_occurences
 * @property integer $sent_occurences
 * @property string $last_sent_time
 * @property integer $current_step
 * @property string $x_filter_id
 * @property string $x_search_condtions
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Picklist $campaignPicklist
 * @property Entity $createdByEntity
 * @property Entity $originatingEntity
 * @property Picklist $periodPicklist
 * @property Picklist $projectStatusPicklist
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property CampaignStep[] $campaignSteps
 * @property Task[] $tasks
 * @property TaskRecurrence[] $taskRecurrences
 */
class Campaign extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_campaign';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'campaign_picklist_id', 'is_contractor_campaign', 'is_lender_campaign', 'is_mortgage_campaign', 'is_realtor_campaign', 'is_service_campaign', 'originating_entity_id', 'is_project_based', 'project_status_picklist_id', 'period_picklist_id', 'sent_occurences', 'current_step', 'x_filter_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['description', 'is_realtor_campaign', 'create_time', 'update_time'], 'required'],
			[['recipient_entity_ids', 'x_search_condtions', 'note'], 'string'],
			[['start_time', 'stop_time', 'last_sent_time', 'create_time', 'update_time'], 'safe'],
			[['recur_every', 'number_of_occurences'], 'number'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['description'], 'string', 'max' => 255]
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
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant Dbu',
			'campaign_picklist_id' => 'Campaign Picklist ID',
			'description' => 'Description',
			'is_contractor_campaign' => 'Is Contractor Campaign',
			'is_lender_campaign' => 'Is Lender Campaign',
			'is_mortgage_campaign' => 'Is Mortgage Campaign',
			'is_realtor_campaign' => 'Is Realtor Campaign',
			'is_service_campaign' => 'Is Service Campaign',
			'originating_entity_id' => 'Originating Entity ID',
			'is_project_based' => 'Is Project Based',
			'recipient_entity_ids' => 'Recipient Entity Ids',
			'start_time' => 'Start Time',
			'project_status_picklist_id' => 'Project Status Picklist ID',
			'stop_time' => 'Stop Time',
			'recur_every' => 'Recur Every',
			'period_picklist_id' => 'Period Picklist ID',
			'number_of_occurences' => 'Number Of Occurences',
			'sent_occurences' => 'Sent Occurences',
			'last_sent_time' => 'Last Sent Time',
			'current_step' => 'Current Step',
			'x_filter_id' => 'X Filter ID',
			'x_search_condtions' => 'X Search Condtions',
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
	public function getCampaignPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'campaign_picklist_id']);
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
	public function getOriginatingEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'originating_entity_id']);
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
	public function getProjectStatusPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'project_status_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTenant()
	{
		return $this->hasOne(Entity::className(), ['id' => 'tenant_id']);
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
	public function getCampaignSteps()
	{
		return $this->hasMany(CampaignStep::className(), ['campaign_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTasks()
	{
		return $this->hasMany(Task::className(), ['campaign_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskRecurrences()
	{
		return $this->hasMany(TaskRecurrence::className(), ['campaign_id' => 'id']);
	}
}
