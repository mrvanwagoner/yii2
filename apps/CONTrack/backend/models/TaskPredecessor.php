<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_task_predecessor".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $task_id
 * @property string $predecessor_task_id
 * @property string $predecessor
 * @property string $restraint
 * @property integer $lag
 * @property integer $start_day
 * @property integer $end_day
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Task $predecessorTask
 * @property Task $task
 * @property Entity $updatedByEntity
 */
class TaskPredecessor extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_task_predecessor';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'task_id', 'predecessor_task_id', 'lag', 'start_day', 'end_day', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['task_id', 'predecessor_task_id'], 'required'],
			[['predecessor', 'restraint'], 'string'],
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
			'predecessor_task_id' => 'Predecessor Task ID',
			'predecessor' => 'Predecessor',
			'restraint' => 'Restraint',
			'lag' => 'Lag',
			'start_day' => 'Start Day',
			'end_day' => 'End Day',
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
	public function getPredecessorTask()
	{
		return $this->hasOne(Task::className(), ['id' => 'predecessor_task_id']);
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
