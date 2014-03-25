<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Project;

/**
 * ProjectSearch represents the model behind the search form about `backend\models\Project`.
 */
class ProjectSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $is_template;
	public $project_number;
	public $description;
	public $comment;
	public $x_address_id;
	public $construction_classification_id;
	public $project_status_picklist_id;
	public $sponsor_entity_id;
	public $client_entity_id;
	public $lead_picklist_id;
	public $is_track_loan;
	public $is_track_draw;
	public $is_track_lien;
	public $is_track_progress;
	public $is_track_quality;
	public $is_track_cost;
	public $is_track_compare;
	public $is_track_history;
	public $is_track_qto;
	public $is_track_schedule;
	public $is_track_purchase;
	public $is_route;
	public $project_document_picklist_id;
	public $percent_retainage;
	public $percent_variance;
	public $need_picklist_id;
	public $purpose_picklist_id;
	public $property_use;
	public $loan_number;
	public $account_number;
	public $loan_classification_id;
	public $can_pull_credit;
	public $can_lock_loan;
	public $appraised_value;
	public $loan_amount;
	public $ltv;
	public $loan_balance;
	public $loan_term;
	public $loan_term_remaining;
	public $rate_interest;
	public $is_rate_fixed;
	public $points;
	public $loan_fees;
	public $date_close;
	public $date_maturity;
	public $date_reprice;
	public $date_balloon;
	public $is_first_time;
	public $is_first_position;
	public $is_long_term;
	public $is_waive_escrow;
	public $down_payment;
	public $payment_max;
	public $payment_pi;
	public $payment_total;
	public $is_payment_fixed;
	public $is_current_on_payments;
	public $equity_in_property;
	public $subordination_amount;
	public $cash_out_amount;
	public $property_tax;
	public $hazard_insurance;
	public $is_pmi;
	public $date_end_pmi;
	public $amount_pmi;
	public $date_purchase;
	public $selling_price;
	public $purchase_price;
	public $is_fsbo;
	public $date_listing;
	public $is_listing_expired;
	public $gross_rent;
	public $rate_occupancy;
	public $date_start;
	public $date_finish;
	public $date_finish_estimated;
	public $benchmarks;
	public $damages;
	public $work_week;
	public $work_day;
	public $cost_land;
	public $cost_design;
	public $cost_permit;
	public $cost_site;
	public $cost_gc;
	public $cost_building;
	public $cost_bond;
	public $cost_insurance;
	public $cost_contingency;
	public $cost_fee;
	public $cost_soft;
	public $cost_ti;
	public $cost_ffe;
	public $location_factor;
	public $inflation_factor;
	public $sf_cost_site;
	public $sf_cost_building;
	public $sf_cost_ti;
	public $sf_cost_total;
	public $percent_gc;
	public $percent_permit;
	public $percent_design;
	public $percent_bond;
	public $percent_insurance;
	public $percent_contingency;
	public $percent_fee;
	public $percent_soft;
	public $template_project_id;
	public $folder;
	public $date_archive;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'tenant_dbu', 'is_template', 'x_address_id', 'construction_classification_id', 'project_status_picklist_id', 'sponsor_entity_id', 'client_entity_id', 'lead_picklist_id', 'is_track_loan', 'is_track_draw', 'is_track_lien', 'is_track_progress', 'is_track_quality', 'is_track_cost', 'is_track_compare', 'is_track_history', 'is_track_qto', 'is_track_schedule', 'is_track_purchase', 'is_route', 'project_document_picklist_id', 'need_picklist_id', 'purpose_picklist_id', 'loan_classification_id', 'loan_term', 'loan_term_remaining', 'is_rate_fixed', 'is_first_time', 'is_first_position', 'is_long_term', 'is_waive_escrow', 'is_payment_fixed', 'is_current_on_payments', 'is_pmi', 'is_fsbo', 'is_listing_expired', 'work_week', 'work_day', 'template_project_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'project_number', 'description', 'comment', 'property_use', 'loan_number', 'account_number', 'can_pull_credit', 'can_lock_loan', 'date_close', 'date_maturity', 'date_reprice', 'date_balloon', 'date_end_pmi', 'date_purchase', 'date_listing', 'date_start', 'date_finish', 'date_finish_estimated', 'benchmarks', 'damages', 'folder', 'date_archive', 'note', 'create_time', 'update_time'], 'safe'],
			[['percent_retainage', 'percent_variance', 'appraised_value', 'loan_amount', 'ltv', 'loan_balance', 'rate_interest', 'points', 'loan_fees', 'down_payment', 'payment_max', 'payment_pi', 'payment_total', 'equity_in_property', 'subordination_amount', 'cash_out_amount', 'property_tax', 'hazard_insurance', 'amount_pmi', 'selling_price', 'purchase_price', 'gross_rent', 'rate_occupancy', 'cost_land', 'cost_design', 'cost_permit', 'cost_site', 'cost_gc', 'cost_building', 'cost_bond', 'cost_insurance', 'cost_contingency', 'cost_fee', 'cost_soft', 'cost_ti', 'cost_ffe', 'location_factor', 'inflation_factor', 'sf_cost_site', 'sf_cost_building', 'sf_cost_ti', 'sf_cost_total', 'percent_gc', 'percent_permit', 'percent_design', 'percent_bond', 'percent_insurance', 'percent_contingency', 'percent_fee', 'percent_soft'], 'number'],
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
			'is_template' => 'Is Template',
			'project_number' => 'Project Number',
			'description' => 'Description',
			'comment' => 'Comment',
			'x_address_id' => 'X Address ID',
			'construction_classification_id' => 'Construction Classification ID',
			'project_status_picklist_id' => 'Project Status Picklist ID',
			'sponsor_entity_id' => 'Sponsor Entity ID',
			'client_entity_id' => 'Client Entity ID',
			'lead_picklist_id' => 'Lead Picklist ID',
			'is_track_loan' => 'Is Track Loan',
			'is_track_draw' => 'Is Track Draw',
			'is_track_lien' => 'Is Track Lien',
			'is_track_progress' => 'Is Track Progress',
			'is_track_quality' => 'Is Track Quality',
			'is_track_cost' => 'Is Track Cost',
			'is_track_compare' => 'Is Track Compare',
			'is_track_history' => 'Is Track History',
			'is_track_qto' => 'Is Track Qto',
			'is_track_schedule' => 'Is Track Schedule',
			'is_track_purchase' => 'Is Track Purchase',
			'is_route' => 'Is Route',
			'project_document_picklist_id' => 'Project Document Picklist ID',
			'percent_retainage' => 'Percent Retainage',
			'percent_variance' => 'Percent Variance',
			'need_picklist_id' => 'Need Picklist ID',
			'purpose_picklist_id' => 'Purpose Picklist ID',
			'property_use' => 'Property Use',
			'loan_number' => 'Loan Number',
			'account_number' => 'Account Number',
			'loan_classification_id' => 'Loan Classification ID',
			'can_pull_credit' => 'Can Pull Credit',
			'can_lock_loan' => 'Can Lock Loan',
			'appraised_value' => 'Appraised Value',
			'loan_amount' => 'Loan Amount',
			'ltv' => 'Ltv',
			'loan_balance' => 'Loan Balance',
			'loan_term' => 'Loan Term',
			'loan_term_remaining' => 'Loan Term Remaining',
			'rate_interest' => 'Rate Interest',
			'is_rate_fixed' => 'Is Rate Fixed',
			'points' => 'Points',
			'loan_fees' => 'Loan Fees',
			'date_close' => 'Date Close',
			'date_maturity' => 'Date Maturity',
			'date_reprice' => 'Date Reprice',
			'date_balloon' => 'Date Balloon',
			'is_first_time' => 'Is First Time',
			'is_first_position' => 'Is First Position',
			'is_long_term' => 'Is Long Term',
			'is_waive_escrow' => 'Is Waive Escrow',
			'down_payment' => 'Down Payment',
			'payment_max' => 'Payment Max',
			'payment_pi' => 'Payment Pi',
			'payment_total' => 'Payment Total',
			'is_payment_fixed' => 'Is Payment Fixed',
			'is_current_on_payments' => 'Is Current On Payments',
			'equity_in_property' => 'Equity In Property',
			'subordination_amount' => 'Subordination Amount',
			'cash_out_amount' => 'Cash Out Amount',
			'property_tax' => 'Property Tax',
			'hazard_insurance' => 'Hazard Insurance',
			'is_pmi' => 'Is Pmi',
			'date_end_pmi' => 'Date End Pmi',
			'amount_pmi' => 'Amount Pmi',
			'date_purchase' => 'Date Purchase',
			'selling_price' => 'Selling Price',
			'purchase_price' => 'Purchase Price',
			'is_fsbo' => 'Is Fsbo',
			'date_listing' => 'Date Listing',
			'is_listing_expired' => 'Is Listing Expired',
			'gross_rent' => 'Gross Rent',
			'rate_occupancy' => 'Rate Occupancy',
			'date_start' => 'Date Start',
			'date_finish' => 'Date Finish',
			'date_finish_estimated' => 'Date Finish Estimated',
			'benchmarks' => 'Benchmarks',
			'damages' => 'Damages',
			'work_week' => 'Work Week',
			'work_day' => 'Work Day',
			'cost_land' => 'Cost Land',
			'cost_design' => 'Cost Design',
			'cost_permit' => 'Cost Permit',
			'cost_site' => 'Cost Site',
			'cost_gc' => 'Cost Gc',
			'cost_building' => 'Cost Building',
			'cost_bond' => 'Cost Bond',
			'cost_insurance' => 'Cost Insurance',
			'cost_contingency' => 'Cost Contingency',
			'cost_fee' => 'Cost Fee',
			'cost_soft' => 'Cost Soft',
			'cost_ti' => 'Cost Ti',
			'cost_ffe' => 'Cost Ffe',
			'location_factor' => 'Location Factor',
			'inflation_factor' => 'Inflation Factor',
			'sf_cost_site' => 'Sf Cost Site',
			'sf_cost_building' => 'Sf Cost Building',
			'sf_cost_ti' => 'Sf Cost Ti',
			'sf_cost_total' => 'Sf Cost Total',
			'percent_gc' => 'Percent Gc',
			'percent_permit' => 'Percent Permit',
			'percent_design' => 'Percent Design',
			'percent_bond' => 'Percent Bond',
			'percent_insurance' => 'Percent insurance',
			'percent_contingency' => 'Percent Contingency',
			'percent_fee' => 'Percent Fee',
			'percent_soft' => 'Percent Soft',
			'template_project_id' => 'Template Project ID',
			'folder' => 'Folder',
			'date_archive' => 'Date Archive',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Project::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'tenant_id');
		$this->addCondition($query, 'tenant_dbu');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'is_template');
		$this->addCondition($query, 'project_number', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'comment', true);
		$this->addCondition($query, 'x_address_id');
		$this->addCondition($query, 'construction_classification_id');
		$this->addCondition($query, 'project_status_picklist_id');
		$this->addCondition($query, 'sponsor_entity_id');
		$this->addCondition($query, 'client_entity_id');
		$this->addCondition($query, 'lead_picklist_id');
		$this->addCondition($query, 'is_track_loan');
		$this->addCondition($query, 'is_track_draw');
		$this->addCondition($query, 'is_track_lien');
		$this->addCondition($query, 'is_track_progress');
		$this->addCondition($query, 'is_track_quality');
		$this->addCondition($query, 'is_track_cost');
		$this->addCondition($query, 'is_track_compare');
		$this->addCondition($query, 'is_track_history');
		$this->addCondition($query, 'is_track_qto');
		$this->addCondition($query, 'is_track_schedule');
		$this->addCondition($query, 'is_track_purchase');
		$this->addCondition($query, 'is_route');
		$this->addCondition($query, 'project_document_picklist_id');
		$this->addCondition($query, 'percent_retainage');
		$this->addCondition($query, 'percent_variance');
		$this->addCondition($query, 'need_picklist_id');
		$this->addCondition($query, 'purpose_picklist_id');
		$this->addCondition($query, 'property_use', true);
		$this->addCondition($query, 'loan_number', true);
		$this->addCondition($query, 'account_number', true);
		$this->addCondition($query, 'loan_classification_id');
		$this->addCondition($query, 'can_pull_credit', true);
		$this->addCondition($query, 'can_lock_loan', true);
		$this->addCondition($query, 'appraised_value');
		$this->addCondition($query, 'loan_amount');
		$this->addCondition($query, 'ltv');
		$this->addCondition($query, 'loan_balance');
		$this->addCondition($query, 'loan_term');
		$this->addCondition($query, 'loan_term_remaining');
		$this->addCondition($query, 'rate_interest');
		$this->addCondition($query, 'is_rate_fixed');
		$this->addCondition($query, 'points');
		$this->addCondition($query, 'loan_fees');
		$this->addCondition($query, 'date_close');
		$this->addCondition($query, 'date_maturity');
		$this->addCondition($query, 'date_reprice');
		$this->addCondition($query, 'date_balloon');
		$this->addCondition($query, 'is_first_time');
		$this->addCondition($query, 'is_first_position');
		$this->addCondition($query, 'is_long_term');
		$this->addCondition($query, 'is_waive_escrow');
		$this->addCondition($query, 'down_payment');
		$this->addCondition($query, 'payment_max');
		$this->addCondition($query, 'payment_pi');
		$this->addCondition($query, 'payment_total');
		$this->addCondition($query, 'is_payment_fixed');
		$this->addCondition($query, 'is_current_on_payments');
		$this->addCondition($query, 'equity_in_property');
		$this->addCondition($query, 'subordination_amount');
		$this->addCondition($query, 'cash_out_amount');
		$this->addCondition($query, 'property_tax');
		$this->addCondition($query, 'hazard_insurance');
		$this->addCondition($query, 'is_pmi');
		$this->addCondition($query, 'date_end_pmi');
		$this->addCondition($query, 'amount_pmi');
		$this->addCondition($query, 'date_purchase');
		$this->addCondition($query, 'selling_price');
		$this->addCondition($query, 'purchase_price');
		$this->addCondition($query, 'is_fsbo');
		$this->addCondition($query, 'date_listing');
		$this->addCondition($query, 'is_listing_expired');
		$this->addCondition($query, 'gross_rent');
		$this->addCondition($query, 'rate_occupancy');
		$this->addCondition($query, 'date_start');
		$this->addCondition($query, 'date_finish');
		$this->addCondition($query, 'date_finish_estimated', true);
		$this->addCondition($query, 'benchmarks', true);
		$this->addCondition($query, 'damages', true);
		$this->addCondition($query, 'work_week');
		$this->addCondition($query, 'work_day');
		$this->addCondition($query, 'cost_land');
		$this->addCondition($query, 'cost_design');
		$this->addCondition($query, 'cost_permit');
		$this->addCondition($query, 'cost_site');
		$this->addCondition($query, 'cost_gc');
		$this->addCondition($query, 'cost_building');
		$this->addCondition($query, 'cost_bond');
		$this->addCondition($query, 'cost_insurance');
		$this->addCondition($query, 'cost_contingency');
		$this->addCondition($query, 'cost_fee');
		$this->addCondition($query, 'cost_soft');
		$this->addCondition($query, 'cost_ti');
		$this->addCondition($query, 'cost_ffe');
		$this->addCondition($query, 'location_factor');
		$this->addCondition($query, 'inflation_factor');
		$this->addCondition($query, 'sf_cost_site');
		$this->addCondition($query, 'sf_cost_building');
		$this->addCondition($query, 'sf_cost_ti');
		$this->addCondition($query, 'sf_cost_total');
		$this->addCondition($query, 'percent_gc');
		$this->addCondition($query, 'percent_permit');
		$this->addCondition($query, 'percent_design');
		$this->addCondition($query, 'percent_bond');
		$this->addCondition($query, 'percent_insurance');
		$this->addCondition($query, 'percent_contingency');
		$this->addCondition($query, 'percent_fee');
		$this->addCondition($query, 'percent_soft');
		$this->addCondition($query, 'template_project_id');
		$this->addCondition($query, 'folder', true);
		$this->addCondition($query, 'date_archive');
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