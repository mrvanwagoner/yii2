<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_project_team".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $project_id
 * @property string $entity_id
 * @property string $type_picklist_id
 * @property integer $is_client
 * @property integer $is_partner
 * @property integer $is_sales_rep
 * @property integer $is_schedule_visible
 * @property string $service_status
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Entity $entity
 * @property Project $project
 * @property Picklist $typePicklist
 * @property Entity $updatedByEntity
 */
class ProjectTeam extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_project_team';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'project_id', 'entity_id', 'type_picklist_id', 'is_client', 'is_partner', 'is_sales_rep', 'is_schedule_visible', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['project_id', 'entity_id', 'type_picklist_id'], 'required'],
			[['note'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['service_status'], 'string', 'max' => 255]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'project_id' => 'Project',
			'entity_id' => 'Entity',
			'type_picklist_id' => 'Type',
			'is_client' => 'Is Client?',
			'is_partner' => 'Is Partner?',
			'is_sales_rep' => 'Is Sales Rep?',
			'is_schedule_visible' => 'Make Schedule Visible?',
			'service_status' => 'Service Status',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By',
		];
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
	public function getTypePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'type_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
