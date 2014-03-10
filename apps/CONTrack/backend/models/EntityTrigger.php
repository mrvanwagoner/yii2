<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_trigger".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $entity_id
 * @property string $trigger_picklist_id
 * @property string $description
 * @property string $is_automatic
 * @property string $amount
 * @property string $and_or
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Entity $entity
 * @property Picklist $triggerPicklist
 * @property Entity $updatedByEntity
 */
class EntityTrigger extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_trigger';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'entity_id', 'trigger_picklist_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['entity_id', 'trigger_picklist_id', 'create_time', 'update_time'], 'required'],
			[['is_automatic', 'and_or', 'note'], 'string'],
			[['amount'], 'number'],
			[['create_time', 'update_time'], 'safe'],
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
			'entity_id' => 'Entity ID',
			'trigger_picklist_id' => 'Trigger Picklist ID',
			'description' => 'Description',
			'is_automatic' => 'Is Automatic',
			'amount' => 'Amount',
			'and_or' => 'And Or',
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
	public function getEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTriggerPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'trigger_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
