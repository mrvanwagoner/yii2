<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Code;

/**
 * CodeSearch represents the model behind the search form about `\backend\models\Code`.
 */
class CodeSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $code_number;
	public $description;
	public $hierarchy;
	public $tag_aka;
	public $prior_number;
	public $standard_code_id;
	public $phase_picklist_id;
	public $is_cost;
	public $percent_of_cost;
	public $percent_variance;
	public $formula_id;
	public $order_qty;
	public $unit_picklist_id;
	public $hours;
	public $crew_size;
	public $material_cost;
	public $labor_cost;
	public $other_cost;
	public $sub_cost;
	public $is_add_tax;
	public $cost_total;
	public $provider_entity_id;
	public $realease;
	public $postal_code;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'standard_code_id', 'phase_picklist_id', 'is_cost', 'formula_id', 'unit_picklist_id', 'crew_size', 'is_add_tax', 'provider_entity_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'code_number', 'description', 'hierarchy', 'tag_aka', 'prior_number', 'realease', 'postal_code', 'note', 'create_time', 'update_time'], 'safe'],
			[['percent_of_cost', 'percent_variance', 'order_qty', 'hours', 'material_cost', 'labor_cost', 'other_cost', 'sub_cost', 'cost_total'], 'number'],
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

	public function search($params)
	{
		$query = Code::find();
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
		$this->addCondition($query, 'code_number', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'hierarchy', true);
		$this->addCondition($query, 'tag_aka', true);
		$this->addCondition($query, 'prior_number', true);
		$this->addCondition($query, 'standard_code_id');
		$this->addCondition($query, 'phase_picklist_id');
		$this->addCondition($query, 'is_cost');
		$this->addCondition($query, 'percent_of_cost');
		$this->addCondition($query, 'percent_variance');
		$this->addCondition($query, 'formula_id');
		$this->addCondition($query, 'order_qty');
		$this->addCondition($query, 'unit_picklist_id');
		$this->addCondition($query, 'hours');
		$this->addCondition($query, 'crew_size');
		$this->addCondition($query, 'material_cost');
		$this->addCondition($query, 'labor_cost');
		$this->addCondition($query, 'other_cost');
		$this->addCondition($query, 'sub_cost');
		$this->addCondition($query, 'is_add_tax');
		$this->addCondition($query, 'cost_total');
		$this->addCondition($query, 'provider_entity_id');
		$this->addCondition($query, 'realease', true);
		$this->addCondition($query, 'postal_code', true);
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
