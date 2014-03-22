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
	public $project_id;
	public $type;
	public $account_number;
	public $craft_number;
	public $client_number;
	public $date_established;
	public $description;
	public $location;
	public $original_amount;
	public $budget_impact;
	public $cost_code_id;
	public $account_picklist_id;
	public $transaction_status_picklist_id;
	public $comment_budget;
	public $is_estimate;
	public $is_track_draws;
	public $is_track_transactions;
	public $analyze;
	public $budget_account_id;
	public $breakdown_account_id;
	public $contract_account_id;
	public $project_documents_picklist_id;
	public $percent_retainage;
	public $percent_variance;
	public $ref_number;
	public $date_ref;
	public $date_requested;
	public $date_received;
	public $revision;
	public $retainage;
	public $net_amount;
	public $completed;
	public $previous_payment;
	public $provider_entity_id;
	public $draw_account_id;
	public $date_paid;
	public $check_number;
	public $gl_code_id;
	public $inspector_entity_id;
	public $route_project_id;
	public $date_inspected;
	public $percent_previous;
	public $percent_current;
	public $comment_inspection;
	public $is_reported;
	public $is_bold;
	public $owner_entity_id;
	public $is_asset;
	public $is_liability;
	public $is_paid_by_close;
	public $address_id;
	public $date_maturity;
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
  public $projectDescription; //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'project_id', 'cost_code_id', 'account_picklist_id', 'transaction_status_picklist_id', 'is_estimate', 'is_track_draws', 'is_track_transactions', 'budget_account_id', 'breakdown_account_id', 'contract_account_id', 'project_documents_picklist_id', 'provider_entity_id', 'draw_account_id', 'gl_code_id', 'inspector_entity_id', 'route_project_id', 'is_reported', 'is_bold', 'owner_entity_id', 'is_asset', 'is_liability', 'is_paid_by_close', 'address_id', 'months_to_pay', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'account_number', 'craft_number', 'client_number', 'date_established', 'description', 'location', 'budget_impact', 'comment_budget', 'analyze', 'ref_number', 'date_ref', 'date_requested', 'date_received', 'date_paid', 'check_number', 'date_inspected', 'comment_inspection', 'date_maturity', 'year', 'make', 'model', 'note', 'create_time', 'update_time', 'projectDescription'], 'safe'], //CHANGED MVW 03/22/14: Added projectDescriptin to allow Filter/Search.
			[['original_amount', 'percent_retainage', 'percent_variance', 'revision', 'retainage', 'net_amount', 'completed', 'previous_payment', 'percent_previous', 'percent_current', 'rate_interest', 'payment_min'], 'number'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() //CHANGED MVW 03/22/14: Copied from Account Model
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant DBU',
      'project_id' => 'Project ID',
      'projectDescription' => 'Project Description',//CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
			'type' => 'Type',
			'account_number' => 'Account Number',
			'craft_number' => 'Craft Number',
			'client_number' => 'Client Number',
			'date_established' => 'Date Established',
			'description' => 'Description',
			'location' => 'Location',
			'original_amount' => 'Original Amount',
			'budget_impact' => 'Budget Impact',
			'cost_code_id' => 'Cost Code ID',
			'account_picklist_id' => 'Account Picklist ID',
			'transaction_status_picklist_id' => 'Transaction Status Picklist ID',
			'comment_budget' => 'Comment Budget',
			'is_estimate' => 'Is Estimate?',
			'is_track_draws' => 'Track Draws?',
			'is_track_transactions' => 'Track Transactions?',
			'analyze' => 'Analyze',
			'budget_account_id' => 'Budget Account ID',
			'breakdown_account_id' => 'Breakdown Account ID',
			'contract_account_id' => 'Contract Account ID',
			'project_documents_picklist_id' => 'Project Documents Picklist ID',
			'percent_retainage' => 'Percent Retainage',
			'percent_variance' => 'Percent Variance',
			'ref_number' => 'Ref Number',
			'date_ref' => 'Date Ref',
			'date_requested' => 'Date Requested',
			'date_received' => 'Date Received',
			'revision' => 'Revision',
			'retainage' => 'Retainage',
			'net_amount' => 'Net Amount',
			'completed' => 'Completed',
			'previous_payment' => 'Previous Payment',
			'provider_entity_id' => 'Provider Entity ID',
			'draw_account_id' => 'Draw Account ID',
			'date_paid' => 'Date Paid',
			'check_number' => 'Check Number',
			'gl_code_id' => 'Gl Code ID',
			'inspector_entity_id' => 'Inspector Entity ID',
			'route_project_id' => 'Route Project ID',
			'date_inspected' => 'Date Inspected',
			'percent_previous' => 'Percent Previous',
			'percent_current' => 'Percent Current',
			'comment_inspection' => 'Comment Inspection',
			'is_reported' => 'Include in Report?',
			'is_bold' => 'Show As Bold In Report?',
			'owner_entity_id' => 'Owner Entity ID',
			'is_asset' => 'Is Asset?',
			'is_liability' => 'Is Liability?',
			'is_paid_by_close' => 'Is Paid By Close?',
			'address_id' => 'Address ID',
			'date_maturity' => 'Date Maturity',
			'rate_interest' => 'Rate Interest',
			'payment_min' => 'Payment Minimum',
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

    $dataProvider->setSort([ //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
      'attributes' => [ //CHANGED MVW 03/22/14: Copied list of attributes from index.php then edited
  			'id',
  			'is_active',
        'tenant_id',
        'tenant_dbu',
  			'project_id',
        'projectDescription' => [
          'asc' => ['tbl_country.country_name' => SORT_ASC],
          'desc' => ['tbl_country.country_name' => SORT_DESC],
          'label' => 'Country Name'
        ],
        'type',
        'account_number',
        'craft_number',
        'client_number',
        'date_established',
        'description',
        'location',
        'original_amount',
        'budget_impact',
        'cost_code_id',
        'account_picklist_id',
        'transaction_status_picklist_id',
        'comment_budget:ntext',
        'is_estimate',
        'is_track_draws',
        'is_track_transactions',
        'analyze',
        'budget_account_id',
        'breakdown_account_id',
        'contract_account_id',
        'project_documents_picklist_id',
        'percent_retainage',
        'percent_variance',
        'ref_number',
        'date_ref',
        'date_requested',
        'date_received',
        'revision',
        'retainage',
        'net_amount',
        'completed',
        'previous_payment',
        'provider_entity_id',
        'draw_account_id',
        'date_paid',
        'check_number',
        'gl_code_id',
        'inspector_entity_id',
        'route_project_id',
        'date_inspected',
        'percent_previous',
        'percent_current',
        'comment_inspection:ntext',
        'is_reported',
        'is_bold',
        'owner_entity_id',
        'is_asset',
        'is_liability',
        'is_paid_by_close',
        'address_id',
        'date_maturity',
        'rate_interest',
        'payment_min',
        'months_to_pay',
        'year',
        'make',
        'model',
        'note:ntext',
        'create_time',
        'created_by_entity_id',
        'update_time',
        'updated_by_entity_id',

      ]
    ]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'tenant_id');
		$this->addCondition($query, 'tenant_dbu', true);
		$this->addCondition($query, 'project_id');
    // $this->addCondition($query, 'projectDescription', true); //FIXME Sort/Filter on relational field. See http://www.mrsoundless.com/php/yii/searching-and-sorting-a-column-from-a-related-table-in-a-cgridview/
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'account_number', true);
		$this->addCondition($query, 'craft_number', true);
		$this->addCondition($query, 'client_number', true);
		$this->addCondition($query, 'date_established');
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'location', true);
		$this->addCondition($query, 'original_amount');
		$this->addCondition($query, 'budget_impact', true);
		$this->addCondition($query, 'cost_code_id');
		$this->addCondition($query, 'account_picklist_id');
		$this->addCondition($query, 'transaction_status_picklist_id');
		$this->addCondition($query, 'comment_budget', true);
		$this->addCondition($query, 'is_estimate');
		$this->addCondition($query, 'is_track_draws');
		$this->addCondition($query, 'is_track_transactions');
		$this->addCondition($query, 'analyze', true);
		$this->addCondition($query, 'budget_account_id');
		$this->addCondition($query, 'breakdown_account_id');
		$this->addCondition($query, 'contract_account_id');
		$this->addCondition($query, 'project_documents_picklist_id');
		$this->addCondition($query, 'percent_retainage');
		$this->addCondition($query, 'percent_variance');
		$this->addCondition($query, 'ref_number', true);
		$this->addCondition($query, 'date_ref');
		$this->addCondition($query, 'date_requested');
		$this->addCondition($query, 'date_received');
		$this->addCondition($query, 'revision');
		$this->addCondition($query, 'retainage');
		$this->addCondition($query, 'net_amount');
		$this->addCondition($query, 'completed');
		$this->addCondition($query, 'previous_payment');
		$this->addCondition($query, 'provider_entity_id');
		$this->addCondition($query, 'draw_account_id');
		$this->addCondition($query, 'date_paid');
		$this->addCondition($query, 'check_number', true);
		$this->addCondition($query, 'gl_code_id');
		$this->addCondition($query, 'inspector_entity_id');
		$this->addCondition($query, 'route_project_id');
		$this->addCondition($query, 'date_inspected');
		$this->addCondition($query, 'percent_previous');
		$this->addCondition($query, 'percent_current');
		$this->addCondition($query, 'comment_inspection', true);
		$this->addCondition($query, 'is_reported');
		$this->addCondition($query, 'is_bold');
		$this->addCondition($query, 'owner_entity_id');
		$this->addCondition($query, 'is_asset');
		$this->addCondition($query, 'is_liability');
		$this->addCondition($query, 'is_paid_by_close');
		$this->addCondition($query, 'address_id');
		$this->addCondition($query, 'date_maturity');
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
    $query->joinWith(['project' => function ($q) { //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
      $q->where('tbl_project.description LIKE "%' . $this->projectDescription . '%"');
    }]);
 
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
