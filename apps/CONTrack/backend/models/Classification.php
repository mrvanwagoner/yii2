<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_classification".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property string $description
 * @property string $hierarchy
 * @property integer $is_commercial
 * @property integer $is_residential
 * @property integer $term
 * @property string $cost_sf_site
 * @property string $cost_sf_building
 * @property string $cost_sf_gc
 * @property string $cost_sf_total
 * @property integer $amortization
 * @property integer $is_long_term
 * @property integer $is_interest_only
 * @property integer $is_rate_fixed
 * @property string $interest_rate
 * @property string $points
 * @property string $fees
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Address[] $addresses
 * @property Building[] $buildings
 * @property Entity $createdByEntity
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property Project[] $projects
 */
class Classification extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_classification';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'is_commercial', 'is_residential', 'term', 'amortization', 'is_long_term', 'is_interest_only', 'is_rate_fixed', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'note'], 'string'],
			[['description', 'create_time', 'update_time'], 'required'],
			[['cost_sf_site', 'cost_sf_building', 'cost_sf_gc', 'cost_sf_total', 'interest_rate', 'points', 'fees'], 'number'],
			[['create_time', 'update_time'], 'safe'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['description'], 'string', 'max' => 255],
			[['hierarchy'], 'string', 'max' => 5]
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant DBU',
			'type' => 'Type',
			'description' => 'Description',
			'hierarchy' => 'Hierarchy',
			'is_commercial' => 'Commercial?',
			'is_residential' => 'Residential?',
			'term' => 'Term',
			'cost_sf_site' => 'Cost SF Site',
			'cost_sf_building' => 'Cost SF Building',
			'cost_sf_gc' => 'Cost SF Gc',
			'cost_sf_total' => 'Cost SF Total',
			'amortization' => 'Amortization',
			'is_long_term' => 'Long Term?',
			'is_interest_only' => 'Interest Only?',
			'is_rate_fixed' => 'Is Rate Fixed?',
			'interest_rate' => 'Interest Rate',
			'points' => 'Points',
			'fees' => 'Fees',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAddresses()
	{
		return $this->hasMany(Address::className(), ['site_classification_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getBuildings()
	{
		return $this->hasMany(Building::className(), ['construction_classification_id' => 'id']);
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

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjects()
	{
		return $this->hasMany(Project::className(), ['construction_classification_id' => 'id']);
	}
}
