<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Picklist;

/**
 * PicklistSearch represents the model behind the search form about `\backend\models\Picklist`.
 */
class PicklistSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $description;
	public $comment;
	public $location;
	public $hierarchy;
	public $sort_order;
	public $code_id;
	public $is_tenant;
	public $is_company;
	public $is_person;
	public $is_role;
	public $is_customer;
	public $is_provider;
	public $is_license;
	public $is_transaction;
	public $is_project;
	public $is_loan;
	public $is_commercial;
	public $is_residential;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'code_id', 'is_tenant', 'is_company', 'is_person', 'is_role', 'is_customer', 'is_provider', 'is_license', 'is_transaction', 'is_project', 'is_loan', 'is_commercial', 'is_residential', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'description', 'comment', 'location', 'hierarchy', 'sort_order', 'note', 'create_time', 'update_time'], 'safe'],
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
			'comment' => 'Comment',
			'location' => 'Location',
			'hierarchy' => 'Hierarchy',
			'sort_order' => 'Sort Order',
			'code_id' => 'Code ID',
			'is_tenant' => 'Is Tenant',
			'is_company' => 'Is Company',
			'is_person' => 'Is Person',
			'is_role' => 'Is Role',
			'is_customer' => 'Is Customer',
			'is_provider' => 'Is Provider',
			'is_license' => 'Is License',
			'is_transaction' => 'Is Transaction',
			'is_project' => 'Is Project',
			'is_loan' => 'Is Loan',
			'is_commercial' => 'Is Commercial',
			'is_residential' => 'Is Residential',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Picklist::find();
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
		$this->addCondition($query, 'comment', true);
		$this->addCondition($query, 'location', true);
		$this->addCondition($query, 'hierarchy', true);
		$this->addCondition($query, 'sort_order', true);
		$this->addCondition($query, 'code_id');
		$this->addCondition($query, 'is_tenant');
		$this->addCondition($query, 'is_company');
		$this->addCondition($query, 'is_person');
		$this->addCondition($query, 'is_role');
		$this->addCondition($query, 'is_customer');
		$this->addCondition($query, 'is_provider');
		$this->addCondition($query, 'is_license');
		$this->addCondition($query, 'is_transaction');
		$this->addCondition($query, 'is_project');
		$this->addCondition($query, 'is_loan');
		$this->addCondition($query, 'is_commercial');
		$this->addCondition($query, 'is_residential');
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
