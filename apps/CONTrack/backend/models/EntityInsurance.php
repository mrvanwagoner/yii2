<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_insurance".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $entity_id
 * @property string $insurance_picklist_id
 * @property string $policy_number
 * @property string $description
 * @property string $date_expire
 * @property string $coverage_incident
 * @property string $coverage_aggregate
 * @property integer $is_on_file
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Entity $entity
 * @property Picklist $insurancePicklist
 * @property Entity $updatedByEntity
 */
class EntityInsurance extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_insurance';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'entity_id', 'insurance_picklist_id', 'is_on_file', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['entity_id'], 'required'],
			[['date_expire', 'create_time', 'update_time'], 'safe'],
			[['coverage_incident', 'coverage_aggregate'], 'number'],
			[['note'], 'string'],
			[['policy_number', 'description'], 'string', 'max' => 255]
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
			'insurance_picklist_id' => 'Insurance Picklist ID',
			'policy_number' => 'Policy Number',
			'description' => 'Description',
			'date_expire' => 'Date Expire',
			'coverage_incident' => 'Coverage Incident',
			'coverage_aggregate' => 'Coverage Aggregate',
			'is_on_file' => 'Is On File',
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
	public function getInsurancePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'insurance_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
