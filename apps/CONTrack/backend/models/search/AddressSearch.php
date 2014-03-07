<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Address;

/**
 * AddressSearch represents the model behind the search form about `\backend\models\Address`.
 */
class AddressSearch extends Model
{
	public $id;
	public $is_active;
	public $type;
	public $description;
	public $address1;
	public $address2;
	public $city;
	public $state;
	public $postal_code;
	public $zip_plus_4;
	public $county;
	public $default_city;
	public $country;
	public $is_standardized;
	public $is_deliverable;
	public $delivery_point_barcode;
	public $latitude;
	public $longitude;
	public $site_classification_id;
	public $directions;
	public $property_url;
	public $legal_description;
	public $lot_number;
	public $parcel_number;
	public $is_flood_zone;
	public $date_in_service;
	public $years_occupied;
	public $property_value;
	public $description_site;
	public $description_building;
	public $description_amenities;
	public $number_buildings;
	public $sf_site;
	public $sf_site_disrupted;
	public $sf_site_landscaped;
	public $sf_paving;
	public $sf_road;
	public $lf_road;
	public $sf_site_concrete;
	public $sf_sidewalk;
	public $parking_stalls;
	public $parking_stalls_hc;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'is_standardized', 'is_deliverable', 'site_classification_id', 'is_flood_zone', 'years_occupied', 'number_buildings', 'sf_site', 'sf_site_disrupted', 'sf_site_landscaped', 'sf_paving', 'sf_road', 'lf_road', 'sf_site_concrete', 'sf_sidewalk', 'parking_stalls', 'parking_stalls_hc', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'description', 'address1', 'address2', 'city', 'state', 'postal_code', 'zip_plus_4', 'county', 'default_city', 'country', 'delivery_point_barcode', 'latitude', 'longitude', 'directions', 'property_url', 'legal_description', 'lot_number', 'parcel_number', 'date_in_service', 'description_site', 'description_building', 'description_amenities', 'note', 'create_time', 'update_time'], 'safe'],
			[['property_value'], 'number'],
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
			'type' => 'Type',
			'description' => 'Description',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'state' => 'State',
			'postal_code' => 'Postal Code',
			'zip_plus_4' => 'Zip Plus 4',
			'county' => 'County',
			'default_city' => 'Default City',
			'country' => 'Country',
			'is_standardized' => 'Is Standardized',
			'is_deliverable' => 'Is Deliverable',
			'delivery_point_barcode' => 'Delivery Point Barcode',
			'latitude' => 'Latitude',
			'longitude' => 'Longitude',
			'site_classification_id' => 'Site Classification ID',
			'directions' => 'Directions',
			'property_url' => 'Property Url',
			'legal_description' => 'Legal Description',
			'lot_number' => 'Lot Number',
			'parcel_number' => 'Parcel Number',
			'is_flood_zone' => 'Is Flood Zone',
			'date_in_service' => 'Date In Service',
			'years_occupied' => 'Years Occupied',
			'property_value' => 'Property Value',
			'description_site' => 'Description Site',
			'description_building' => 'Description Building',
			'description_amenities' => 'Description Amenities',
			'number_buildings' => 'Number Buildings',
			'sf_site' => 'Sf Site',
			'sf_site_disrupted' => 'Sf Site Disrupted',
			'sf_site_landscaped' => 'Sf Site Landscaped',
			'sf_paving' => 'Sf Paving',
			'sf_road' => 'Sf Road',
			'lf_road' => 'Lf Road',
			'sf_site_concrete' => 'Sf Site Concrete',
			'sf_sidewalk' => 'Sf Sidewalk',
			'parking_stalls' => 'Parking Stalls',
			'parking_stalls_hc' => 'Parking Stalls Hc',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Address::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'address1', true);
		$this->addCondition($query, 'address2', true);
		$this->addCondition($query, 'city', true);
		$this->addCondition($query, 'state', true);
		$this->addCondition($query, 'postal_code', true);
		$this->addCondition($query, 'zip_plus_4', true);
		$this->addCondition($query, 'county', true);
		$this->addCondition($query, 'default_city', true);
		$this->addCondition($query, 'country', true);
		$this->addCondition($query, 'is_standardized');
		$this->addCondition($query, 'is_deliverable');
		$this->addCondition($query, 'delivery_point_barcode', true);
		$this->addCondition($query, 'latitude', true);
		$this->addCondition($query, 'longitude', true);
		$this->addCondition($query, 'site_classification_id');
		$this->addCondition($query, 'directions', true);
		$this->addCondition($query, 'property_url', true);
		$this->addCondition($query, 'legal_description', true);
		$this->addCondition($query, 'lot_number', true);
		$this->addCondition($query, 'parcel_number', true);
		$this->addCondition($query, 'is_flood_zone');
		$this->addCondition($query, 'date_in_service');
		$this->addCondition($query, 'years_occupied');
		$this->addCondition($query, 'property_value');
		$this->addCondition($query, 'description_site', true);
		$this->addCondition($query, 'description_building', true);
		$this->addCondition($query, 'description_amenities', true);
		$this->addCondition($query, 'number_buildings');
		$this->addCondition($query, 'sf_site');
		$this->addCondition($query, 'sf_site_disrupted');
		$this->addCondition($query, 'sf_site_landscaped');
		$this->addCondition($query, 'sf_paving');
		$this->addCondition($query, 'sf_road');
		$this->addCondition($query, 'lf_road');
		$this->addCondition($query, 'sf_site_concrete');
		$this->addCondition($query, 'sf_sidewalk');
		$this->addCondition($query, 'parking_stalls');
		$this->addCondition($query, 'parking_stalls_hc');
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
