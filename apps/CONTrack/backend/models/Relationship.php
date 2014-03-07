<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_relationship".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $entity_id
 * @property string $child_entity_id
 * @property string $type
 * @property string $division_entity_id
 * @property string $supervisor_entity_id
 * @property integer $is_private
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $childEntity
 * @property Entity $createdByEntity
 * @property Entity $divisionEntity
 * @property Entity $entity
 * @property Entity $supervisorEntity
 * @property Entity $updatedByEntity
 */
class Relationship extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_relationship';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'entity_id', 'child_entity_id', 'division_entity_id', 'supervisor_entity_id', 'is_private', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['entity_id', 'child_entity_id'], 'required'],
			[['type', 'note'], 'string'],
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
			'entity_id' => 'Entity ID',
			'child_entity_id' => 'Child Entity ID',
			'type' => 'Type',
			'division_entity_id' => 'Division Entity ID',
			'supervisor_entity_id' => 'Supervisor Entity ID',
			'is_private' => 'Is Private',
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
	public function getChildEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'child_entity_id']);
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
	public function getDivisionEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'division_entity_id']);
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
	public function getSupervisorEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'supervisor_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
