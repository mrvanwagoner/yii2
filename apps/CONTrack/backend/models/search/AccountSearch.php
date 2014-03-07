<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Account;

/**
 * AccountSearch represents the model behind the search form about `\backend\models\Account`.
 */
class AccountSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $account_number;
	public $date_established;
	public $description;
	public $location;
	public $account_picklist_id;
	public $status_transaction_picklist_id;
	public $parent_account_id;
	public $is_track_transactions;
	public $provider_entity_id;
	public $gl_code_id;
	public $project_id;
	public $ref_number;
	public $date_ref;
	public $budget_impact;
	public $gross_amount;
	public $adjustment;
	public $net_amount;
	public $is_reported;
	public $comment_budget;
	public $is_bold;
	public $beginning_balance;
	public $current_balance;
	public $is_asset;
	public $is_liability;
	public $date_maturity;
	public $face_amount;
	public $current_value;
	public $address_id;
	public $is_paid_by_close;
	public $rate_interest;
	public $payment_min;
	public $months_to_pay;
	public $year;
	public $make;
	public $model;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'account_picklist_id', 'status_transaction_picklist_id', 'parent_account_id', 'is_track_transactions', 'provider_entity_id', 'gl_code_id', 'project_id', 'is_reported', 'is_bold', 'is_asset', 'is_liability', 'address_id', 'is_paid_by_close', 'months_to_pay', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'account_number', 'date_established', 'description', 'location', 'ref_number', 'date_ref', 'budget_impact', 'comment_budget', 'date_maturity', 'year', 'make', 'model', 'note', 'create_time', 'update_time'], 'safe'],
			[['gross_amount', 'adjustment', 'net_amount', 'beginning_balance', 'current_balance', 'face_amount', 'current_value', 'rate_interest', 'payment_min'], 'number'],
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
			'account_number' => 'Account Number',
			'date_established' => 'Date Established',
			'description' => 'Description',
			'location' => 'Location',
			'account_picklist_id' => 'Account Picklist ID',
			'status_transaction_picklist_id' => 'Status Transaction Picklist ID',
			'parent_account_id' => 'Parent Account ID',
			'is_track_transactions' => 'Is Track Transactions',
			'provider_entity_id' => 'Provider Entity ID',
			'gl_code_id' => 'Gl Code ID',
			'project_id' => 'Project ID',
			'ref_number' => 'Ref Number',
			'date_ref' => 'Date Ref',
			'budget_impact' => 'Budget Impact',
			'gross_amount' => 'Gross Amount',
			'adjustment' => 'Adjustment',
			'net_amount' => 'Net Amount',
			'is_reported' => 'Is Reported',
			'comment_budget' => 'Comment Budget',
			'is_bold' => 'Is Bold',
			'beginning_balance' => 'Beginning Balance',
			'current_balance' => 'Current Balance',
			'is_asset' => 'Is Asset',
			'is_liability' => 'Is Liability',
			'date_maturity' => 'Date Maturity',
			'face_amount' => 'Face Amount',
			'current_value' => 'Current Value',
			'address_id' => 'Address ID',
			'is_paid_by_close' => 'Is Paid By Close',
			'rate_interest' => 'Rate Interest',
			'payment_min' => 'Payment Min',
			'months_to_pay' => 'Months To Pay',
			'year' => 'Year',
			'make' => 'Make',
			'model' => 'Model',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Account::find();
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
		$this->addCondition($query, 'account_number', true);
		$this->addCondition($query, 'date_established');
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'location', true);
		$this->addCondition($query, 'account_picklist_id');
		$this->addCondition($query, 'status_transaction_picklist_id');
		$this->addCondition($query, 'parent_account_id');
		$this->addCondition($query, 'is_track_transactions');
		$this->addCondition($query, 'provider_entity_id');
		$this->addCondition($query, 'gl_code_id');
		$this->addCondition($query, 'project_id');
		$this->addCondition($query, 'ref_number', true);
		$this->addCondition($query, 'date_ref');
		$this->addCondition($query, 'budget_impact', true);
		$this->addCondition($query, 'gross_amount');
		$this->addCondition($query, 'adjustment');
		$this->addCondition($query, 'net_amount');
		$this->addCondition($query, 'is_reported');
		$this->addCondition($query, 'comment_budget', true);
		$this->addCondition($query, 'is_bold');
		$this->addCondition($query, 'beginning_balance');
		$this->addCondition($query, 'current_balance');
		$this->addCondition($query, 'is_asset');
		$this->addCondition($query, 'is_liability');
		$this->addCondition($query, 'date_maturity');
		$this->addCondition($query, 'face_amount');
		$this->addCondition($query, 'current_value');
		$this->addCondition($query, 'address_id');
		$this->addCondition($query, 'is_paid_by_close');
		$this->addCondition($query, 'rate_interest');
		$this->addCondition($query, 'payment_min');
		$this->addCondition($query, 'months_to_pay');
		$this->addCondition($query, 'year', true);
		$this->addCondition($query, 'make', true);
		$this->addCondition($query, 'model', true);
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
