<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_formula".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property string $description
 * @property string $unit_picklist_id
 * @property integer $is_residential
 * @property integer $is_commercial
 * @property string $percent_variance
 * @property string $formula
 * @property integer $is_template
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Code[] $codes
 * @property Entity $createdByEntity
 * @property Entity $tenant
 * @property Picklist $unitPicklist
 * @property Entity $updatedByEntity
 */
class Formula extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_formula';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'unit_picklist_id', 'is_residential', 'is_commercial', 'is_template', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'unit_picklist_id'], 'required'],
			[['type', 'formula', 'note'], 'string'],
			[['percent_variance'], 'number'],
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
			'unit_picklist_id' => 'Unit Picklist ID',
			'is_residential' => 'Is Residential',
			'is_commercial' => 'Is Commercial',
			'percent_variance' => 'Percent Variance',
			'formula' => 'Formula',
			'is_template' => 'Is Template',
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
	public function getCodes()
	{
		return $this->hasMany(Code::className(), ['formula_id' => 'id']);
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
	public function getUnitPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'unit_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
