<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/08/14

/**
 * This is the model class for table "tbl_address".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $type
 * @property string $description
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state
 * @property string $postal_code
 * @property string $zip_plus_4
 * @property string $county
 * @property string $default_city
 * @property string $country
 * @property integer $is_standardized
 * @property integer $is_deliverable
 * @property string $delivery_point_barcode
 * @property string $latitude
 * @property string $longitude
 * @property string $site_classification_id
 * @property string $directions
 * @property string $property_url
 * @property string $legal_description
 * @property string $lot_number
 * @property string $parcel_number
 * @property integer $is_flood_zone
 * @property string $date_in_service
 * @property integer $years_occupied
 * @property string $property_value
 * @property string $description_site
 * @property string $description_building
 * @property string $description_amenities
 * @property integer $number_buildings
 * @property integer $sf_site
 * @property integer $sf_site_disrupted
 * @property integer $sf_site_landscaped
 * @property integer $sf_paving
 * @property integer $sf_road
 * @property integer $lf_road
 * @property integer $sf_site_concrete
 * @property integer $sf_sidewalk
 * @property integer $parking_stalls
 * @property integer $parking_stalls_hc
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Account[] $accounts
 * @property Entity $createdByEntity
 * @property Classification $siteClassification
 * @property Entity $updatedByEntity
 * @property Contact[] $contacts
 * @property EntityHasAddress[] $entityHasAddresses
 * @property Project[] $projects
 * @property ProjectHasAddress[] $projectHasAddresses
 */
class Address extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_address';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'is_standardized', 'is_deliverable', 'site_classification_id', 'is_flood_zone', 'years_occupied', 'number_buildings', 'sf_site', 'sf_site_disrupted', 'sf_site_landscaped', 'sf_paving', 'sf_road', 'lf_road', 'sf_site_concrete', 'sf_sidewalk', 'parking_stalls', 'parking_stalls_hc', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'note'], 'string'],
			[['date_in_service', 'create_time', 'update_time'], 'safe'],
			[['property_value'], 'number'],
			[['description', 'property_url', 'legal_description', 'lot_number', 'parcel_number', 'description_site', 'description_building', 'description_amenities'], 'string', 'max' => 255],
			[['address1', 'address2', 'city'], 'string', 'max' => 50],
			[['state'], 'string', 'max' => 2],
			[['postal_code'], 'string', 'max' => 5],
			[['zip_plus_4'], 'string', 'max' => 4],
			[['county'], 'string', 'max' => 30],
			[['default_city'], 'string', 'max' => 128],
			[['country'], 'string', 'max' => 15],
			[['delivery_point_barcode'], 'string', 'max' => 14],
			[['latitude', 'longitude'], 'string', 'max' => 24],
			[['directions'], 'string', 'max' => 155]
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

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAccounts()
	{
		return $this->hasMany(Account::className(), ['address_id' => 'id']);
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
	public function getSiteClassification()
	{
		return $this->hasOne(Classification::className(), ['id' => 'site_classification_id']);
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
	public function getContacts()
	{
		return $this->hasMany(Contact::className(), ['address_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasAddresses()
	{
		return $this->hasMany(EntityHasAddress::className(), ['address_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjects()
	{
		return $this->hasMany(Project::className(), ['address_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectHasAddresses()
	{
		return $this->hasMany(ProjectHasAddress::className(), ['address_id' => 'id']);
	}

  //CHANGED MVW 03/08/14: Extended address. i.e. to be used in drop down list.   public function getFullName() 
  public function getFullAddress() //CHANGED MVW 03/08/14
  {
    return $this->address1.', '.$this->city.', '.$this->state.', '.$this->postal_code;
  }

  public static function listActiveAddresses() //CHANGED MVW 03/08/14
  {
    $query = Address::find()->where(['is_active'=>1])->all();
    return ArrayHelper::map($query , 'id', 'fullAddress');
  }
}
