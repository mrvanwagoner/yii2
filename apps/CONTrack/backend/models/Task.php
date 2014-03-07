<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_task".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $entity_id
 * @property string $type
 * @property string $description
 * @property string $task_picklist_id
 * @property string $priority
 * @property string $start
 * @property string $finish
 * @property integer $duration
 * @property integer $is_done
 * @property string $tags
 * @property string $assigned_to_entity_id
 * @property string $supervisor_entity_id
 * @property string $customer_entity_id
 * @property string $supplier_entity_id
 * @property string $person_task_picklist_id
 * @property string $project_id
 * @property string $location
 * @property string $project_status_picklist_id
 * @property string $code_id
 * @property string $late_start
 * @property string $late_finish
 * @property integer $float
 * @property string $actual_start
 * @property string $actual_finish
 * @property integer $actual_duration
 * @property string $percent_complete
 * @property string $campaign_id
 * @property string $campaign_step_id
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Picklist $personTaskPicklist
 * @property Entity $assignedToEntity
 * @property Campaign $campaign
 * @property CampaignStep $campaignStep
 * @property Code $code
 * @property Entity $createdByEntity
 * @property Entity $customerEntity
 * @property Entity $entity
 * @property Project $project
 * @property Picklist $projectStatusPicklist
 * @property Entity $supervisorEntity
 * @property Entity $supplierEntity
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property TaskCorrespondence[] $taskCorrespondences
 * @property TaskHasDocument[] $taskHasDocuments
 * @property TaskPredecessor[] $taskPredecessors
 * @property TaskRecurrence[] $taskRecurrences
 */
class Task extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_task';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'entity_id', 'task_picklist_id', 'duration', 'is_done', 'assigned_to_entity_id', 'supervisor_entity_id', 'customer_entity_id', 'supplier_entity_id', 'person_task_picklist_id', 'project_id', 'project_status_picklist_id', 'code_id', 'float', 'actual_duration', 'campaign_id', 'campaign_step_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'entity_id', 'description', 'create_time', 'update_time'], 'required'],
			[['type', 'priority', 'note'], 'string'],
			[['start', 'finish', 'late_start', 'late_finish', 'actual_start', 'actual_finish', 'create_time', 'update_time'], 'safe'],
			[['percent_complete'], 'number'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['description', 'tags', 'location'], 'string', 'max' => 255]
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
			'entity_id' => 'Entity ID',
			'type' => 'Type',
			'description' => 'Description',
			'task_picklist_id' => 'Task Picklist ID',
			'priority' => 'Priority',
			'start' => 'Start',
			'finish' => 'Finish',
			'duration' => 'Duration',
			'is_done' => 'Is Done',
			'tags' => 'Tags',
			'assigned_to_entity_id' => 'Assigned To Entity ID',
			'supervisor_entity_id' => 'Supervisor Entity ID',
			'customer_entity_id' => 'Customer Entity ID',
			'supplier_entity_id' => 'Supplier Entity ID',
			'person_task_picklist_id' => 'Person Task Picklist ID',
			'project_id' => 'Project ID',
			'location' => 'Location',
			'project_status_picklist_id' => 'Project Status Picklist ID',
			'code_id' => 'Code ID',
			'late_start' => 'Late Start',
			'late_finish' => 'Late Finish',
			'float' => 'Float',
			'actual_start' => 'Actual Start',
			'actual_finish' => 'Actual Finish',
			'actual_duration' => 'Actual Duration',
			'percent_complete' => 'Percent Complete',
			'campaign_id' => 'Campaign ID',
			'campaign_step_id' => 'Campaign Step ID',
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
	public function getPersonTaskPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'person_task_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAssignedToEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'assigned_to_entity_id']);
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
	public function getCampaignStep()
	{
		return $this->hasOne(CampaignStep::className(), ['id' => 'campaign_step_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCode()
	{
		return $this->hasOne(Code::className(), ['id' => 'code_id']);
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
	public function getCustomerEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'customer_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'project_id']);
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
	public function getSupervisorEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'supervisor_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSupplierEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'supplier_entity_id']);
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
	public function getTaskCorrespondences()
	{
		return $this->hasMany(TaskCorrespondence::className(), ['task_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskHasDocuments()
	{
		return $this->hasMany(TaskHasDocument::className(), ['task_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskPredecessors()
	{
		return $this->hasMany(TaskPredecessor::className(), ['task_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskRecurrences()
	{
		return $this->hasMany(TaskRecurrence::className(), ['task_id' => 'id']);
	}
}
