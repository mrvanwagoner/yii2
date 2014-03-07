<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_mapping".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $lead_picklist_id
 * @property string $source_field
 * @property string $description_field
 * @property integer $is_map_field
 * @property string $map_to_table
 * @property string $map_to_field
 * @property string $type
 * @property string $record
 * @property string $import_function
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Entity $createdByEntity
 * @property Picklist $leadPicklist
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 */
class Mapping extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_mapping';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'lead_picklist_id', 'is_map_field', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'source_field', 'create_time', 'update_time'], 'required'],
			[['note'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['source_field', 'description_field', 'map_to_table', 'map_to_field', 'type', 'import_function'], 'string', 'max' => 255],
			[['record'], 'string', 'max' => 64]
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
			'lead_picklist_id' => 'Lead Picklist ID',
			'source_field' => 'Source Field',
			'description_field' => 'Description Field',
			'is_map_field' => 'Is Map Field',
			'map_to_table' => 'Map To Table',
			'map_to_field' => 'Map To Field',
			'type' => 'Type',
			'record' => 'Record',
			'import_function' => 'Import Function',
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
	public function getLeadPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'lead_picklist_id']);
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
