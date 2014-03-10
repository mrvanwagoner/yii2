<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/08/14

/**
 * This is the model class for table "tbl_project".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property integer $is_template
 * @property integer $is_route
 * @property string $project_number
 * @property string $description
 * @property string $address_id
 * @property string $construction_classification_id
 * @property string $project_status_picklist_id
 * @property integer $is_track_loan
 * @property integer $is_track_purchase
 * @property integer $is_track_cost
 * @property integer $is_track_compare
 * @property integer $is_track_qto
 * @property integer $is_track_schedule
 * @property integer $is_track_draw
 * @property integer $is_track_lien
 * @property integer $is_track_completion
 * @property integer $is_track_quality
 * @property string $sponsor_entity_id
 * @property string $client_entity_id
 * @property string $lead_picklist_id
 * @property string $need_picklist_id
 * @property string $purpose_picklist_id
 * @property string $property_use
 * @property string $loan_classification_id
 * @property string $appraised_value
 * @property string $loan_amount
 * @property string $loan_balance
 * @property integer $loan_term
 * @property integer $loan_term_remaining
 * @property string $rate_interest
 * @property string $points
 * @property string $loan_fees
 * @property string $date_close
 * @property string $date_maturity
 * @property string $date_reprice
 * @property string $date_balloon
 * @property integer $is_first_time
 * @property integer $is_first_position
 * @property integer $is_long_term
 * @property integer $is_waive_escrow
 * @property string $down_payment
 * @property string $payment_max
 * @property string $payment_pi
 * @property string $payment_total
 * @property integer $is_payment_fixed
 * @property integer $is_current_on_payments
 * @property string $equity_property
 * @property string $subordination_amount
 * @property string $cash_out_amount
 * @property string $tax_property
 * @property string $hazard_insurance
 * @property integer $is_pmi
 * @property string $date_end_pmi
 * @property string $amount_pmi
 * @property string $date_purchase
 * @property string $selling_price
 * @property string $purchase_price
 * @property integer $is_fsbo
 * @property string $date_listing
 * @property integer $is_listing_expired
 * @property string $gross_rent
 * @property string $rate_occupancy
 * @property string $date_start
 * @property string $date_finish
 * @property integer $work_week
 * @property integer $work_day
 * @property string $cost_land
 * @property string $cost_site
 * @property string $cost_gc
 * @property string $cost_building
 * @property string $cost_soft
 * @property string $cost_ti
 * @property string $cost_ffe
 * @property string $location_factor
 * @property string $inflation_factor
 * @property string $sf_cost_site
 * @property string $sf_cost_building
 * @property string $sf_cost_ti
 * @property string $sf_cost_total
 * @property string $percent_gc
 * @property string $percent_permit
 * @property string $percent_design
 * @property string $percent_bond
 * @property string $percent_liability
 * @property string $percent_contingency
 * @property string $percent_fee
 * @property string $percent_soft
 * @property string $template_project_id
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Account[] $accounts
 * @property Address $address
 * @property Classification $loanClassification
 * @property Entity $clientEntity
 * @property Classification $constructionClassification
 * @property Entity $createdByEntity
 * @property Picklist $leadPicklist
 * @property Picklist $needPicklist
 * @property Picklist $projectStatusPicklist
 * @property Picklist $purposePicklist
 * @property Entity $sponsorEntity
 * @property Project $templateProject
 * @property Project[] $projects
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property ProjectHasAddress[] $projectHasAddresses
 * @property ProjectHasBuilding[] $projectHasBuildings
 * @property ProjectHasCompProject[] $projectHasCompProjects
 * @property ProjectTeam[] $projectTeams
 * @property Task[] $tasks
 */
class Project extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_project';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'tenant_dbu', 'is_template', 'is_route', 'address_id', 'construction_classification_id', 'project_status_picklist_id', 'is_track_loan', 'is_track_purchase', 'is_track_cost', 'is_track_compare', 'is_track_qto', 'is_track_schedule', 'is_track_draw', 'is_track_lien', 'is_track_completion', 'is_track_quality', 'sponsor_entity_id', 'client_entity_id', 'lead_picklist_id', 'need_picklist_id', 'purpose_picklist_id', 'loan_classification_id', 'loan_term', 'loan_term_remaining', 'is_first_time', 'is_first_position', 'is_long_term', 'is_waive_escrow', 'is_payment_fixed', 'is_current_on_payments', 'is_pmi', 'is_fsbo', 'is_listing_expired', 'work_week', 'work_day', 'template_project_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'create_time', 'update_time'], 'required'],
			[['type', 'property_use', 'note'], 'string'],
			[['appraised_value', 'loan_amount', 'loan_balance', 'rate_interest', 'points', 'loan_fees', 'down_payment', 'payment_max', 'payment_pi', 'payment_total', 'equity_property', 'subordination_amount', 'cash_out_amount', 'tax_property', 'hazard_insurance', 'amount_pmi', 'selling_price', 'purchase_price', 'gross_rent', 'rate_occupancy', 'cost_land', 'cost_site', 'cost_gc', 'cost_building', 'cost_soft', 'cost_ti', 'cost_ffe', 'location_factor', 'inflation_factor', 'sf_cost_site', 'sf_cost_building', 'sf_cost_ti', 'sf_cost_total', 'percent_gc', 'percent_permit', 'percent_design', 'percent_bond', 'percent_liability', 'percent_contingency', 'percent_fee', 'percent_soft'], 'number'],
			[['date_close', 'date_maturity', 'date_reprice', 'date_balloon', 'date_end_pmi', 'date_purchase', 'date_listing', 'date_start', 'date_finish', 'create_time', 'update_time'], 'safe'],
			[['project_number'], 'string', 'max' => 45],
			[['description'], 'string', 'max' => 255]
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
			'is_route' => 'Is Route',
			'project_number' => 'Project Number',
			'description' => 'Description',
			'address_id' => 'Address ID',
			'construction_classification_id' => 'Construction Classification ID',
			'project_status_picklist_id' => 'Project Status Picklist ID',
			'is_track_loan' => 'Is Track Loan',
			'is_track_purchase' => 'Is Track Purchase',
			'is_track_cost' => 'Is Track Cost',
			'is_track_compare' => 'Is Track Compare',
			'is_track_qto' => 'Is Track Qto',
			'is_track_schedule' => 'Is Track Schedule',
			'is_track_draw' => 'Is Track Draw',
			'is_track_lien' => 'Is Track Lien',
			'is_track_completion' => 'Is Track Completion',
			'is_track_quality' => 'Is Track Quality',
			'sponsor_entity_id' => 'Sponsor Entity ID',
			'client_entity_id' => 'Client Entity ID',
			'lead_picklist_id' => 'Lead Picklist ID',
			'need_picklist_id' => 'Need Picklist ID',
			'purpose_picklist_id' => 'Purpose Picklist ID',
			'property_use' => 'Property Use',
			'loan_classification_id' => 'Loan Classification ID',
			'appraised_value' => 'Appraised Value',
			'loan_amount' => 'Loan Amount',
			'loan_balance' => 'Loan Balance',
			'loan_term' => 'Loan Term',
			'loan_term_remaining' => 'Loan Term Remaining',
			'rate_interest' => 'Rate Interest',
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
			'equity_property' => 'Equity Property',
			'subordination_amount' => 'Subordination Amount',
			'cash_out_amount' => 'Cash Out Amount',
			'tax_property' => 'Tax Property',
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
			'work_week' => 'Work Week',
			'work_day' => 'Work Day',
			'cost_land' => 'Cost Land',
			'cost_site' => 'Cost Site',
			'cost_gc' => 'Cost Gc',
			'cost_building' => 'Cost Building',
			'cost_soft' => 'Cost Soft',
			'cost_ti' => 'Cost Ti',
			'cost_ffe' => 'Cost ffe',
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
			'percent_liability' => 'Percent Liability',
			'percent_contingency' => 'Percent Contingency',
			'percent_fee' => 'Percent Fee',
			'percent_soft' => 'Percent Soft',
			'template_project_id' => 'Template Project ID',
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
		return $this->hasMany(Account::className(), ['project_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAddress()
	{
		return $this->hasOne(Address::className(), ['id' => 'address_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getLoanClassification()
	{
		return $this->hasOne(Classification::className(), ['id' => 'loan_classification_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getClientEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'client_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getConstructionClassification()
	{
		return $this->hasOne(Classification::className(), ['id' => 'construction_classification_id']);
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
	public function getLeadPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'lead_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getNeedPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'need_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectStatusPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'project_status_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPurposePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'purpose_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSponsorEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'sponsor_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTemplateProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'template_project_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjects()
	{
		return $this->hasMany(Project::className(), ['template_project_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTenant()
	{
		return $this->hasOne(Entity::className(), ['id' => 'tenant_id']);
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
	public function getProjectHasAddresses()
	{
		return $this->hasMany(ProjectHasAddress::className(), ['project_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectHasBuildings()
	{
		return $this->hasMany(ProjectHasBuilding::className(), ['project_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectHasCompProjects()
	{
		return $this->hasMany(ProjectHasCompProject::className(), ['project_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectTeams()
	{
		return $this->hasMany(ProjectTeam::className(), ['project_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTasks()
	{
		return $this->hasMany(Task::className(), ['project_id' => 'id']);
	}

  public static function listActiveProjects() //CHANGED MVW 03/08/14
  {
    $query = Project::find()->where(['is_active'=>1])->all();
    return ArrayHelper::map($query , 'id', 'description');
  }
}
