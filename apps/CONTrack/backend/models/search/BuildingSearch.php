<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Building;

/**
 * BuildingSearch represents the model behind the search form about `\backend\models\Building`.
 */
class BuildingSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $construction_classification_id;
	public $building_number;
	public $description;
	public $location;
	public $plan_number;
	public $buildings_like_this;
	public $exterior_finish;
	public $interior_finish;
	public $amenities;
	public $date_built;
	public $units;
	public $stories;
	public $story_height;
	public $sf_building;
	public $sf_buiding_finish;
	public $sf_footprint;
	public $sf_footprint_new;
	public $lf_perimeter;
	public $lf_perimeter_new;
	public $sf_unfinished;
	public $sf_vanilla;
	public $sf_basement;
	public $percent_finished;
	public $sf_basement_finish;
	public $sf_basement_unfinished;
	public $is_basement_walkout;
	public $sf_garage;
	public $is_garage_attached;
	public $garage_stalls;
	public $sf_canopy;
	public $sf_deck_covered;
	public $sf_deck_uncovered;
	public $bedrooms;
	public $baths;
	public $lf_setback;
	public $sf_excavate_footings;
	public $sf_footings_spot;
	public $sf_glazing;
	public $windows;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'construction_classification_id', 'units', 'stories', 'story_height', 'sf_building', 'sf_buiding_finish', 'sf_footprint', 'sf_footprint_new', 'lf_perimeter', 'lf_perimeter_new', 'sf_unfinished', 'sf_vanilla', 'sf_basement', 'sf_basement_finish', 'sf_basement_unfinished', 'is_basement_walkout', 'sf_garage', 'is_garage_attached', 'garage_stalls', 'sf_canopy', 'sf_deck_covered', 'sf_deck_uncovered', 'bedrooms', 'baths', 'lf_setback', 'sf_excavate_footings', 'sf_footings_spot', 'sf_glazing', 'windows', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'building_number', 'description', 'location', 'plan_number', 'buildings_like_this', 'exterior_finish', 'interior_finish', 'amenities', 'date_built', 'note', 'create_time', 'update_time'], 'safe'],
			[['percent_finished'], 'number'],
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

	public function search($params)
	{
		$query = Building::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'tenant_id');
		$this->addCondition($query, 'tenant_dbu', true);
		$this->addCondition($query, 'construction_classification_id');
		$this->addCondition($query, 'building_number', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'location', true);
		$this->addCondition($query, 'plan_number', true);
		$this->addCondition($query, 'buildings_like_this', true);
		$this->addCondition($query, 'exterior_finish', true);
		$this->addCondition($query, 'interior_finish', true);
		$this->addCondition($query, 'amenities', true);
		$this->addCondition($query, 'date_built');
		$this->addCondition($query, 'units');
		$this->addCondition($query, 'stories');
		$this->addCondition($query, 'story_height');
		$this->addCondition($query, 'sf_building');
		$this->addCondition($query, 'sf_buiding_finish');
		$this->addCondition($query, 'sf_footprint');
		$this->addCondition($query, 'sf_footprint_new');
		$this->addCondition($query, 'lf_perimeter');
		$this->addCondition($query, 'lf_perimeter_new');
		$this->addCondition($query, 'sf_unfinished');
		$this->addCondition($query, 'sf_vanilla');
		$this->addCondition($query, 'sf_basement');
		$this->addCondition($query, 'percent_finished');
		$this->addCondition($query, 'sf_basement_finish');
		$this->addCondition($query, 'sf_basement_unfinished');
		$this->addCondition($query, 'is_basement_walkout');
		$this->addCondition($query, 'sf_garage');
		$this->addCondition($query, 'is_garage_attached');
		$this->addCondition($query, 'garage_stalls');
		$this->addCondition($query, 'sf_canopy');
		$this->addCondition($query, 'sf_deck_covered');
		$this->addCondition($query, 'sf_deck_uncovered');
		$this->addCondition($query, 'bedrooms');
		$this->addCondition($query, 'baths');
		$this->addCondition($query, 'lf_setback');
		$this->addCondition($query, 'sf_excavate_footings');
		$this->addCondition($query, 'sf_footings_spot');
		$this->addCondition($query, 'sf_glazing');
		$this->addCondition($query, 'windows');
		$this->addCondition($query, 'note', true);
		$this->addCondition($query, 'create_time');
		$this->addCondition($query, 'created_by_entity_id');
		$this->addCondition($query, 'update_time');
		$this->addCondition($query, 'updated_by_entity_id');
		return $dataProvider;
	}

	protected function addCondition($query, $attribute, $partialMatch = false)
	{
		if (($pos = strrpos($attribute, '.')) !== false) {
			$modelAttribute = substr($attribute, $pos + 1);
		} else {
			$modelAttribute = $attribute;
		}

		$value = $this->$modelAttribute;
		if (trim($value) === '') {
			return;
		}
		if ($partialMatch) {
			$query->andWhere(['like', $attribute, $value]);
		} else {
			$query->andWhere([$attribute => $value]);
		}
	}
}
