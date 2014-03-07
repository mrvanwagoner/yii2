<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_license".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $entity_id
 * @property string $license_type_picklist_id
 * @property string $license_number
 * @property string $description
 * @property string $state
 * @property string $nmls_number
 * @property string $date_expire
 * @property integer $is_qualified_employee
 * @property integer $is_default
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Entity $entity
 * @property Picklist $licenseTypePicklist
 * @property Entity $updatedByEntity
 */
class EntityLicense extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_license';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'entity_id', 'license_type_picklist_id', 'is_qualified_employee', 'is_default', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['entity_id', 'license_type_picklist_id'], 'required'],
			[['date_expire', 'create_time', 'update_time'], 'safe'],
			[['note'], 'string'],
			[['license_number'], 'string', 'max' => 100],
			[['description', 'nmls_number'], 'string', 'max' => 255],
			[['state'], 'string', 'max' => 2]
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
			'license_type_picklist_id' => 'License Type Picklist ID',
			'license_number' => 'License Number',
			'description' => 'Description',
			'state' => 'State',
			'nmls_number' => 'Nmls Number',
			'date_expire' => 'Date Expire',
			'is_qualified_employee' => 'Is Qualified Employee',
			'is_default' => 'Is Default',
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
	public function getLicenseTypePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'license_type_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
