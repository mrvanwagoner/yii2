<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Contact;

/**
 * ContactSearch represents the model behind the search form about `\backend\models\Contact`.
 */
class ContactSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $entity_id;
	public $type;
	public $description;
	public $type_picklist_id;
	public $status_picklist_id;
	public $address_id;
	public $phone_id;
	public $mobile_phone_id;
	public $fax_phone_id;
	public $email_id;
	public $contact_method_person_task_picklist_id;
	public $is_employee;
	public $trainer_entity_id;
	public $is_full_time;
	public $date_hire;
	public $date_modified;
	public $date_rehire;
	public $date_terminated;
	public $is_eligible_for_rehire;
	public $salary;
	public $wage;
	public $commission_percent;
	public $commission_amount;
	public $grade;
	public $date_grade_assigned;
	public $sponsor_entity_id;
	public $is_preferred;
	public $account_number;
	public $sales_rep_entity_id;
	public $date_sales_rep_assigned;
	public $service_rep_entity_id;
	public $date_service_rep_assigned;
	public $lead_picklist_id;
	public $credit_limit;
	public $provider_terms_picklist_id;
	public $payment_method_provider_task_picklist_id;
	public $refer_score;
	public $refer_comment;
	public $is_named_insured;
	public $date_first_contact;
	public $percent_close_out;
	public $ok_to_email;
	public $ok_to_text;
	public $comment_differentiation;
	public $builder_type;
	public $Jobs_per_year;
	public $avg_value;
	public $is_spec_builder;
	public $number_of_models;
	public $loan_in_name;
	public $current_lender_source;
	public $terms_points;
	public $terms_rate;
	public $sales_source;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'entity_id', 'type_picklist_id', 'status_picklist_id', 'address_id', 'phone_id', 'mobile_phone_id', 'fax_phone_id', 'email_id', 'contact_method_person_task_picklist_id', 'is_employee', 'trainer_entity_id', 'is_full_time', 'is_eligible_for_rehire', 'grade', 'sponsor_entity_id', 'is_preferred', 'sales_rep_entity_id', 'service_rep_entity_id', 'lead_picklist_id', 'provider_terms_picklist_id', 'payment_method_provider_task_picklist_id', 'refer_score', 'is_named_insured', 'ok_to_email', 'ok_to_text', 'Jobs_per_year', 'is_spec_builder', 'number_of_models', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'description', 'date_hire', 'date_modified', 'date_rehire', 'date_terminated', 'salary', 'wage', 'date_grade_assigned', 'account_number', 'date_sales_rep_assigned', 'date_service_rep_assigned', 'refer_comment', 'date_first_contact', 'comment_differentiation', 'builder_type', 'avg_value', 'loan_in_name', 'current_lender_source', 'sales_source', 'note', 'create_time', 'update_time'], 'safe'],
			[['commission_percent', 'commission_amount', 'credit_limit', 'percent_close_out', 'terms_points', 'terms_rate'], 'number'],
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
			'entity_id' => 'Entity ID',
			'type' => 'Type',
			'description' => 'Description',
			'type_picklist_id' => 'Type Picklist ID',
			'status_picklist_id' => 'Status Picklist ID',
			'address_id' => 'Address ID',
			'phone_id' => 'Phone ID',
			'mobile_phone_id' => 'Mobile Phone ID',
			'fax_phone_id' => 'Fax Phone ID',
			'email_id' => 'Email ID',
			'contact_method_person_task_picklist_id' => 'Contact Method Person Task Picklist ID',
			'is_employee' => 'Is Employee',
			'trainer_entity_id' => 'Trainer Entity ID',
			'is_full_time' => 'Is Full Time',
			'date_hire' => 'Date Hire',
			'date_modified' => 'Date Modified',
			'date_rehire' => 'Date Rehire',
			'date_terminated' => 'Date Terminated',
			'is_eligible_for_rehire' => 'Is Eligible For Rehire',
			'salary' => 'Salary',
			'wage' => 'Wage',
			'commission_percent' => 'Commission Percent',
			'commission_amount' => 'Commission Amount',
			'grade' => 'Grade',
			'date_grade_assigned' => 'Date Grade Assigned',
			'sponsor_entity_id' => 'Sponsor Entity ID',
			'is_preferred' => 'Is Preferred',
			'account_number' => 'Account Number',
			'sales_rep_entity_id' => 'Sales Rep Entity ID',
			'date_sales_rep_assigned' => 'Date Sales Rep Assigned',
			'service_rep_entity_id' => 'Service Rep Entity ID',
			'date_service_rep_assigned' => 'Date Service Rep Assigned',
			'lead_picklist_id' => 'Lead Picklist ID',
			'credit_limit' => 'Credit Limit',
			'provider_terms_picklist_id' => 'Provider Terms Picklist ID',
			'payment_method_provider_task_picklist_id' => 'Payment Method Provider Task Picklist ID',
			'refer_score' => 'Refer Score',
			'refer_comment' => 'Refer Comment',
			'is_named_insured' => 'Is Named Insured',
			'date_first_contact' => 'Date First Contact',
			'percent_close_out' => 'Percent Close Out',
			'ok_to_email' => 'Ok To Email',
			'ok_to_text' => 'Ok To Text',
			'comment_differentiation' => 'Comment Differentiation',
			'builder_type' => 'Builder Type',
			'Jobs_per_year' => 'Jobs Per Year',
			'avg_value' => 'Avg Value',
			'is_spec_builder' => 'Is Spec Builder',
			'number_of_models' => 'Number Of Models',
			'loan_in_name' => 'Loan In Name',
			'current_lender_source' => 'Current Lender Source',
			'terms_points' => 'Terms Points',
			'terms_rate' => 'Terms Rate',
			'sales_source' => 'Sales Source',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Contact::find();
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
		$this->addCondition($query, 'entity_id');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'type_picklist_id');
		$this->addCondition($query, 'status_picklist_id');
		$this->addCondition($query, 'address_id');
		$this->addCondition($query, 'phone_id');
		$this->addCondition($query, 'mobile_phone_id');
		$this->addCondition($query, 'fax_phone_id');
		$this->addCondition($query, 'email_id');
		$this->addCondition($query, 'contact_method_person_task_picklist_id');
		$this->addCondition($query, 'is_employee');
		$this->addCondition($query, 'trainer_entity_id');
		$this->addCondition($query, 'is_full_time');
		$this->addCondition($query, 'date_hire');
		$this->addCondition($query, 'date_modified');
		$this->addCondition($query, 'date_rehire');
		$this->addCondition($query, 'date_terminated');
		$this->addCondition($query, 'is_eligible_for_rehire');
		$this->addCondition($query, 'salary', true);
		$this->addCondition($query, 'wage', true);
		$this->addCondition($query, 'commission_percent');
		$this->addCondition($query, 'commission_amount');
		$this->addCondition($query, 'grade');
		$this->addCondition($query, 'date_grade_assigned');
		$this->addCondition($query, 'sponsor_entity_id');
		$this->addCondition($query, 'is_preferred');
		$this->addCondition($query, 'account_number', true);
		$this->addCondition($query, 'sales_rep_entity_id');
		$this->addCondition($query, 'date_sales_rep_assigned');
		$this->addCondition($query, 'service_rep_entity_id');
		$this->addCondition($query, 'date_service_rep_assigned');
		$this->addCondition($query, 'lead_picklist_id');
		$this->addCondition($query, 'credit_limit');
		$this->addCondition($query, 'provider_terms_picklist_id');
		$this->addCondition($query, 'payment_method_provider_task_picklist_id');
		$this->addCondition($query, 'refer_score');
		$this->addCondition($query, 'refer_comment', true);
		$this->addCondition($query, 'is_named_insured');
		$this->addCondition($query, 'date_first_contact');
		$this->addCondition($query, 'percent_close_out');
		$this->addCondition($query, 'ok_to_email');
		$this->addCondition($query, 'ok_to_text');
		$this->addCondition($query, 'comment_differentiation', true);
		$this->addCondition($query, 'builder_type', true);
		$this->addCondition($query, 'Jobs_per_year');
		$this->addCondition($query, 'avg_value', true);
		$this->addCondition($query, 'is_spec_builder');
		$this->addCondition($query, 'number_of_models');
		$this->addCondition($query, 'loan_in_name', true);
		$this->addCondition($query, 'current_lender_source', true);
		$this->addCondition($query, 'terms_points');
		$this->addCondition($query, 'terms_rate');
		$this->addCondition($query, 'sales_source', true);
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
