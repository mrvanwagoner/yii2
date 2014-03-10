<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Formula;

/**
 * FormulaSearch represents the model behind the search form about `\backend\models\Formula`.
 */
class FormulaSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $description;
	public $unit_picklist_id;
	public $is_residential;
	public $is_commercial;
	public $percent_variance;
	public $formula;
	public $is_template;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'unit_picklist_id', 'is_residential', 'is_commercial', 'is_template', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'description', 'formula', 'note', 'create_time', 'update_time'], 'safe'],
			[['percent_variance'], 'number'],
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

	public function search($params)
	{
		$query = Formula::find();
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
		$this->addCondition($query, 'unit_picklist_id');
		$this->addCondition($query, 'is_residential');
		$this->addCondition($query, 'is_commercial');
		$this->addCondition($query, 'percent_variance');
		$this->addCondition($query, 'formula', true);
		$this->addCondition($query, 'is_template');
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
