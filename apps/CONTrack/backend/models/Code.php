<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_code".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property string $code_number
 * @property string $description
 * @property string $hierarchy
 * @property string $tag_aka
 * @property string $prior_number
 * @property string $standard_code_id
 * @property string $phase_picklist_id
 * @property integer $is_cost
 * @property string $percent_of_cost
 * @property string $percent_variance
 * @property string $formula_id
 * @property string $order_qty
 * @property string $unit_picklist_id
 * @property string $hours
 * @property integer $crew_size
 * @property string $material_cost
 * @property string $labor_cost
 * @property string $other_cost
 * @property string $sub_cost
 * @property integer $is_add_tax
 * @property string $cost_total
 * @property string $provider_entity_id
 * @property string $realease
 * @property string $postal_code
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Account[] $accounts
 * @property Entity $createdByEntity
 * @property Formula $formula
 * @property Picklist $phasePicklist
 * @property Entity $providerEntity
 * @property Code $standardCode
 * @property Code[] $codes
 * @property Entity $tenant
 * @property Picklist $unitPicklist
 * @property Entity $updatedByEntity
 * @property Picklist[] $picklists
 * @property Task[] $tasks
 */
class Code extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_code';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'standard_code_id', 'phase_picklist_id', 'is_cost', 'formula_id', 'unit_picklist_id', 'crew_size', 'is_add_tax', 'provider_entity_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id'], 'required'],
			[['type', 'note'], 'string'],
			[['percent_of_cost', 'percent_variance', 'order_qty', 'hours', 'material_cost', 'labor_cost', 'other_cost', 'sub_cost', 'cost_total'], 'number'],
			[['create_time', 'update_time'], 'safe'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['code_number', 'description', 'hierarchy', 'tag_aka', 'prior_number', 'realease'], 'string', 'max' => 255],
			[['postal_code'], 'string', 'max' => 10]
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
			'code_number' => 'Code Number',
			'description' => 'Description',
			'hierarchy' => 'Hierarchy',
			'tag_aka' => 'Tag Aka',
			'prior_number' => 'Prior Number',
			'standard_code_id' => 'Standard Code ID',
			'phase_picklist_id' => 'Phase Picklist ID',
			'is_cost' => 'Is Cost',
			'percent_of_cost' => 'Percent Of Cost',
			'percent_variance' => 'Percent Variance',
			'formula_id' => 'Formula ID',
			'order_qty' => 'Order Qty',
			'unit_picklist_id' => 'Unit Picklist ID',
			'hours' => 'Hours',
			'crew_size' => 'Crew Size',
			'material_cost' => 'Material Cost',
			'labor_cost' => 'Labor Cost',
			'other_cost' => 'Other Cost',
			'sub_cost' => 'Sub Cost',
			'is_add_tax' => 'Is Add Tax',
			'cost_total' => 'Cost Total',
			'provider_entity_id' => 'Provider Entity ID',
			'realease' => 'Realease',
			'postal_code' => 'Postal Code',
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
	public function getAccounts()
	{
		return $this->hasMany(Account::className(), ['gl_code_id' => 'id']);
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
	public function getFormula()
	{
		return $this->hasOne(Formula::className(), ['id' => 'formula_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPhasePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'phase_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProviderEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'provider_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getStandardCode()
	{
		return $this->hasOne(Code::className(), ['id' => 'standard_code_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCodes()
	{
		return $this->hasMany(Code::className(), ['standard_code_id' => 'id']);
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

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPicklists()
	{
		return $this->hasMany(Picklist::className(), ['code_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTasks()
	{
		return $this->hasMany(Task::className(), ['code_id' => 'id']);
	}
}
