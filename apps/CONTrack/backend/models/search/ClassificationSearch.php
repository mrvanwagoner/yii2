<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Classification;

/**
 * ClassificationSearch represents the model behind the search form about `\backend\models\Classification`.
 */
class ClassificationSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $description;
	public $hierarchy;
	public $is_commercial;
	public $is_residential;
	public $term;
	public $cost_sf_site;
	public $cost_sf_building;
	public $cost_sf_gc;
	public $cost_sf_total;
	public $amortization;
	public $is_long_term;
	public $is_interest_only;
	public $is_rate_fixed;
	public $interest_rate;
	public $points;
	public $fees;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'is_commercial', 'is_residential', 'term', 'amortization', 'is_long_term', 'is_interest_only', 'is_rate_fixed', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'description', 'hierarchy', 'note', 'create_time', 'update_time'], 'safe'],
			[['cost_sf_site', 'cost_sf_building', 'cost_sf_gc', 'cost_sf_total', 'interest_rate', 'points', 'fees'], 'number'],
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
			'hierarchy' => 'Hierarchy',
			'is_commercial' => 'Is Commercial',
			'is_residential' => 'Is Residential',
			'term' => 'Term',
			'cost_sf_site' => 'Cost Sf Site',
			'cost_sf_building' => 'Cost Sf Building',
			'cost_sf_gc' => 'Cost Sf Gc',
			'cost_sf_total' => 'Cost Sf Total',
			'amortization' => 'Amortization',
			'is_long_term' => 'Is Long Term',
			'is_interest_only' => 'Is Interest Only',
			'is_rate_fixed' => 'Is Rate Fixed',
			'interest_rate' => 'Interest Rate',
			'points' => 'Points',
			'fees' => 'Fees',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Classification::find();
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
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'hierarchy', true);
		$this->addCondition($query, 'is_commercial');
		$this->addCondition($query, 'is_residential');
		$this->addCondition($query, 'term');
		$this->addCondition($query, 'cost_sf_site');
		$this->addCondition($query, 'cost_sf_building');
		$this->addCondition($query, 'cost_sf_gc');
		$this->addCondition($query, 'cost_sf_total');
		$this->addCondition($query, 'amortization');
		$this->addCondition($query, 'is_long_term');
		$this->addCondition($query, 'is_interest_only');
		$this->addCondition($query, 'is_rate_fixed');
		$this->addCondition($query, 'interest_rate');
		$this->addCondition($query, 'points');
		$this->addCondition($query, 'fees');
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
