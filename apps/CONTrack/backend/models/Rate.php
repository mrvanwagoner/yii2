<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_rate".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property string $description
 * @property string $field
 * @property string $travel
 * @property string $processor
 * @property string $estimator
 * @property string $manager
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 */
class Rate extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_rate';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'description', 'create_time', 'update_time'], 'required'],
			[['type', 'note'], 'string'],
			[['field', 'travel', 'processor', 'estimator', 'manager'], 'number'],
			[['create_time', 'update_time'], 'safe'],
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
			'type' => 'Type',
			'description' => 'Description',
			'field' => 'Field',
			'travel' => 'Travel',
			'processor' => 'Processor',
			'estimator' => 'Estimator',
			'manager' => 'Manager',
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
}
