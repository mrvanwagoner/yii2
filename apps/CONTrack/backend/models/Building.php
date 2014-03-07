<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_building".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $construction_classification_id
 * @property string $building_number
 * @property string $description
 * @property string $location
 * @property string $plan_number
 * @property string $buildings_like_this
 * @property string $exterior_finish
 * @property string $interior_finish
 * @property string $amenities
 * @property string $date_built
 * @property integer $units
 * @property integer $stories
 * @property integer $story_height
 * @property integer $sf_building
 * @property integer $sf_buiding_finish
 * @property integer $sf_footprint
 * @property integer $sf_footprint_new
 * @property integer $lf_perimeter
 * @property integer $lf_perimeter_new
 * @property integer $sf_unfinished
 * @property integer $sf_vanilla
 * @property integer $sf_basement
 * @property string $percent_finished
 * @property integer $sf_basement_finish
 * @property integer $sf_basement_unfinished
 * @property integer $is_basement_walkout
 * @property integer $sf_garage
 * @property integer $is_garage_attached
 * @property integer $garage_stalls
 * @property integer $sf_canopy
 * @property integer $sf_deck_covered
 * @property integer $sf_deck_uncovered
 * @property integer $bedrooms
 * @property integer $baths
 * @property integer $lf_setback
 * @property integer $sf_excavate_footings
 * @property integer $sf_footings_spot
 * @property integer $sf_glazing
 * @property integer $windows
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Classification $constructionClassification
 * @property Entity $createdByEntity
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property ProjectHasBuilding[] $projectHasBuildings
 */
class Building extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_building';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'construction_classification_id', 'units', 'stories', 'story_height', 'sf_building', 'sf_buiding_finish', 'sf_footprint', 'sf_footprint_new', 'lf_perimeter', 'lf_perimeter_new', 'sf_unfinished', 'sf_vanilla', 'sf_basement', 'sf_basement_finish', 'sf_basement_unfinished', 'is_basement_walkout', 'sf_garage', 'is_garage_attached', 'garage_stalls', 'sf_canopy', 'sf_deck_covered', 'sf_deck_uncovered', 'bedrooms', 'baths', 'lf_setback', 'sf_excavate_footings', 'sf_footings_spot', 'sf_glazing', 'windows', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id'], 'required'],
			[['date_built', 'create_time', 'update_time'], 'safe'],
			[['percent_finished'], 'number'],
			[['note'], 'string'],
			[['tenant_dbu', 'building_number', 'description', 'location', 'plan_number', 'buildings_like_this', 'exterior_finish', 'interior_finish', 'amenities'], 'string', 'max' => 255]
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
			'construction_classification_id' => 'Construction Classification ID',
			'building_number' => 'Building Number',
			'description' => 'Description',
			'location' => 'Location',
			'plan_number' => 'Plan Number',
			'buildings_like_this' => 'Buildings Like This',
			'exterior_finish' => 'Exterior Finish',
			'interior_finish' => 'Interior Finish',
			'amenities' => 'Amenities',
			'date_built' => 'Date Built',
			'units' => 'Units',
			'stories' => 'Stories',
			'story_height' => 'Story Height',
			'sf_building' => 'Sf Building',
			'sf_buiding_finish' => 'Sf Buiding Finish',
			'sf_footprint' => 'Sf Footprint',
			'sf_footprint_new' => 'Sf Footprint New',
			'lf_perimeter' => 'Lf Perimeter',
			'lf_perimeter_new' => 'Lf Perimeter New',
			'sf_unfinished' => 'Sf Unfinished',
			'sf_vanilla' => 'Sf Vanilla',
			'sf_basement' => 'Sf Basement',
			'percent_finished' => 'Percent Finished',
			'sf_basement_finish' => 'Sf Basement Finish',
			'sf_basement_unfinished' => 'Sf Basement Unfinished',
			'is_basement_walkout' => 'Is Basement Walkout',
			'sf_garage' => 'Sf Garage',
			'is_garage_attached' => 'Is Garage Attached',
			'garage_stalls' => 'Garage Stalls',
			'sf_canopy' => 'Sf Canopy',
			'sf_deck_covered' => 'Sf Deck Covered',
			'sf_deck_uncovered' => 'Sf Deck Uncovered',
			'bedrooms' => 'Bedrooms',
			'baths' => 'Baths',
			'lf_setback' => 'Lf Setback',
			'sf_excavate_footings' => 'Sf Excavate Footings',
			'sf_footings_spot' => 'Sf Footings Spot',
			'sf_glazing' => 'Sf Glazing',
			'windows' => 'Windows',
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
	public function getConstructionClassification()
	{
		return $this->hasOne(Classification::className(), ['id' => 'construction_classification_id']);
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
	public function getProjectHasBuildings()
	{
		return $this->hasMany(ProjectHasBuilding::className(), ['bulding_id' => 'id']);
	}
}
