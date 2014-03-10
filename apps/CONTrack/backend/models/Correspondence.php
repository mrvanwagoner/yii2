<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_task_correspondence".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $task_id
 * @property string $type
 * @property string $from_entity_id
 * @property string $to_entities
 * @property string $cc_entities
 * @property string $bcc_entities
 * @property string $subject
 * @property string $body
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Entity $fromEntity
 * @property Task $task
 * @property Entity $updatedByEntity
 */
class Correspondence extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_task_correspondence';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'task_id', 'from_entity_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['task_id', 'create_time', 'update_time'], 'required'],
			[['type', 'body', 'note'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['to_entities', 'cc_entities', 'bcc_entities', 'subject'], 'string', 'max' => 255]
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
			'type' => 'Type',
			'from_entity_id' => 'From Entity ID',
			'to_entities' => 'To Entities',
			'cc_entities' => 'Cc Entities',
			'bcc_entities' => 'Bcc Entities',
			'subject' => 'Subject',
			'body' => 'Body',
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
	public function getCreatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'created_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFromEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'from_entity_id']);
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
}
