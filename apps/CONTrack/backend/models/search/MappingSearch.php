<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Mapping;

/**
 * MappingSearch represents the model behind the search form about `\backend\models\Mapping`.
 */
class MappingSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $lead_picklist_id;
	public $source_field;
	public $description_field;
	public $is_map_field;
	public $map_to_table;
	public $map_to_field;
	public $type;
	public $record;
	public $import_function;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'lead_picklist_id', 'is_map_field', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'source_field', 'description_field', 'map_to_table', 'map_to_field', 'type', 'record', 'import_function', 'note', 'create_time', 'update_time'], 'safe'],
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

	public function search($params)
	{
		$query = Mapping::find();
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
		$this->addCondition($query, 'lead_picklist_id');
		$this->addCondition($query, 'source_field', true);
		$this->addCondition($query, 'description_field', true);
		$this->addCondition($query, 'is_map_field');
		$this->addCondition($query, 'map_to_table', true);
		$this->addCondition($query, 'map_to_field', true);
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'record', true);
		$this->addCondition($query, 'import_function', true);
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
