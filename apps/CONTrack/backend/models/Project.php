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
 * @property string $project_number
 * @property string $description
 * @property string $comment
 * @property string $x_address_id
 * @property string $construction_classification_id
 * @property string $project_status_picklist_id
 * @property string $sponsor_entity_id
 * @property string $client_entity_id
 * @property string $lead_picklist_id
 * @property integer $is_track_loan
 * @property integer $is_track_draw
 * @property integer $is_track_lien
 * @property integer $is_track_progress
 * @property integer $is_track_quality
 * @property integer $is_track_cost
 * @property integer $is_track_compare
 * @property integer $is_track_history
 * @property integer $is_track_qto
 * @property integer $is_track_schedule
 * @property integer $is_track_purchase
 * @property integer $is_route
 * @property string $project_document_picklist_id
 * @property string $percent_retainage
 * @property string $percent_variance
 * @property string $need_picklist_id
 * @property string $purpose_picklist_id
 * @property string $property_use
 * @property string $loan_number
 * @property string $account_number
 * @property string $loan_classification_id
 * @property string $can_pull_credit
 * @property string $can_lock_loan
 * @property string $appraised_value
 * @property string $loan_amount
 * @property string $ltv
 * @property string $loan_balance
 * @property integer $loan_term
 * @property integer $loan_term_remaining
 * @property string $rate_interest
 * @property integer $is_rate_fixed
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
 * @property string $equity_in_property
 * @property string $subordination_amount
 * @property string $cash_out_amount
 * @property string $property_tax
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
 * @property string $date_finish_estimated
 * @property string $benchmarks
 * @property string $damages
 * @property integer $work_week
 * @property integer $work_day
 * @property string $cost_land
 * @property string $cost_design
 * @property string $cost_permit
 * @property string $cost_site
 * @property string $cost_gc
 * @property string $cost_building
 * @property string $cost_bond
 * @property string $cost_insurance
 * @property string $cost_contingency
 * @property string $cost_fee
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
 * @property string $percent_insurance
 * @property string $percent_contingency
 * @property string $percent_fee
 * @property string $percent_soft
 * @property string $template_project_id
 * @property string $folder
 * @property string $date_archive
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Account[] $accounts
 * @property Address $xAddress
 * @property Classification $loanClassification
 * @property Entity $clientEntity
 * @property Classification $constructionClassification
 * @property Entity $createdByEntity
 * @property Picklist $leadPicklist
 * @property Picklist $needPicklist
 * @property Picklist $projectDocumentPicklist
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
			[['is_active', 'tenant_id', 'tenant_dbu', 'is_template', 'x_address_id', 'construction_classification_id', 'project_status_picklist_id', 'sponsor_entity_id', 'client_entity_id', 'lead_picklist_id', 'is_track_loan', 'is_track_draw', 'is_track_lien', 'is_track_progress', 'is_track_quality', 'is_track_cost', 'is_track_compare', 'is_track_history', 'is_track_qto', 'is_track_schedule', 'is_track_purchase', 'is_route', 'project_document_picklist_id', 'need_picklist_id', 'purpose_picklist_id', 'loan_classification_id', 'loan_term', 'loan_term_remaining', 'is_rate_fixed', 'is_first_time', 'is_first_position', 'is_long_term', 'is_waive_escrow', 'is_payment_fixed', 'is_current_on_payments', 'is_pmi', 'is_fsbo', 'is_listing_expired', 'work_week', 'work_day', 'template_project_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'create_time', 'update_time'], 'required'],
			[['type', 'comment', 'property_use', 'can_pull_credit', 'can_lock_loan', 'benchmarks', 'damages', 'note'], 'string'],
			[['percent_retainage', 'percent_variance', 'appraised_value', 'loan_amount', 'ltv', 'loan_balance', 'rate_interest', 'points', 'loan_fees', 'down_payment', 'payment_max', 'payment_pi', 'payment_total', 'equity_in_property', 'subordination_amount', 'cash_out_amount', 'property_tax', 'hazard_insurance', 'amount_pmi', 'selling_price', 'purchase_price', 'gross_rent', 'rate_occupancy', 'cost_land', 'cost_design', 'cost_permit', 'cost_site', 'cost_gc', 'cost_building', 'cost_bond', 'cost_insurance', 'cost_contingency', 'cost_fee', 'cost_soft', 'cost_ti', 'cost_ffe', 'location_factor', 'inflation_factor', 'sf_cost_site', 'sf_cost_building', 'sf_cost_ti', 'sf_cost_total', 'percent_gc', 'percent_permit', 'percent_design', 'percent_bond', 'percent_insurance', 'percent_contingency', 'percent_fee', 'percent_soft'], 'number'],
			[['date_close', 'date_maturity', 'date_reprice', 'date_balloon', 'date_end_pmi', 'date_purchase', 'date_listing', 'date_start', 'date_finish', 'date_archive', 'create_time', 'update_time'], 'safe'],
			[['project_number'], 'string', 'max' => 45],
			[['description', 'loan_number', 'account_number', 'date_finish_estimated', 'folder'], 'string', 'max' => 255],
		[['can_pull_credit', 'can_lock_loan'], 'default', 'value' => null],//CHANGED MVW 03/08/14: Needed so ENUM can be created or updated to NULL
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant DBU',
			'type' => 'Type',
			'is_template' => 'Is Template?',
			'project_number' => 'Project Number',
			'description' => 'Description',
			'comment' => 'Comment',
			'x_address_id' => 'Address ID',
			'construction_classification_id' => 'Construction Classification',
			'project_status_picklist_id' => 'Project Status',
			'sponsor_entity_id' => 'Sponsor',
			'client_entity_id' => 'Client',
			'lead_picklist_id' => 'Lead',
			'is_track_loan' => 'Track Loan?',
			'is_track_draw' => 'Track Draw?',
			'is_track_lien' => 'Track Lien?',
			'is_track_progress' => 'Track Progress?',
			'is_track_quality' => 'Track Quality?',
			'is_track_cost' => 'Track Cost?',
			'is_track_compare' => 'Track Comparison?',
			'is_track_history' => 'Track History?',
			'is_track_qto' => 'Track QTO?',
			'is_track_schedule' => 'Track Schedule?',
			'is_track_purchase' => 'Track Purchase?',
			'is_route' => 'Is Route?',
			'project_document_picklist_id' => 'Draw Form',
			'percent_retainage' => 'Percent Retainage',
			'percent_variance' => 'Percent Variance',
			'need_picklist_id' => 'Client Need',
			'purpose_picklist_id' => 'Client Purpose',
			'property_use' => 'Property Use',
			'loan_number' => 'Loan Number',
			'account_number' => 'Account Number',
			'loan_classification_id' => 'Loan Classification',
			'can_pull_credit' => 'Can Pull Credit?',
			'can_lock_loan' => 'Can Lock Loan?',
			'appraised_value' => 'Appraised Value',
			'loan_amount' => 'Loan Amount',
			'ltv' => 'LTV',
			'loan_balance' => 'Loan Balance',
			'loan_term' => 'Loan Term',
			'loan_term_remaining' => 'Loan Term Remaining',
			'rate_interest' => 'Rate Interest',
			'is_rate_fixed' => 'Is Rate Fixed?',
			'points' => 'Points',
			'loan_fees' => 'Loan Fees',
			'date_close' => 'Date Close',
			'date_maturity' => 'Date Maturity',
			'date_reprice' => 'Date Reprice',
			'date_balloon' => 'Date Balloon',
			'is_first_time' => 'Is First Time Home Buyer?',
			'is_first_position' => 'Is Loan In First Position?',
			'is_long_term' => 'Is Long Term Loan?',
			'is_waive_escrow' => 'Waive Escrow?',
			'down_payment' => 'Down Payment',
			'payment_max' => 'Payment Max',
			'payment_pi' => 'Payment PI',
			'payment_total' => 'Payment Total',
			'is_payment_fixed' => 'Is Payment Fixed?',
			'is_current_on_payments' => 'Is Current On Payments?',
			'equity_in_property' => 'Equity In Property',
			'subordination_amount' => 'Subordination Amount',
			'cash_out_amount' => 'Cash Out Amount',
			'property_tax' => 'Property Tax',
			'hazard_insurance' => 'Hazard Insurance',
			'is_pmi' => 'Is PMI Required?',
			'date_end_pmi' => 'Date End PMI',
			'amount_pmi' => 'Amount PMI',
			'date_purchase' => 'Date Purchase',
			'selling_price' => 'Selling Price',
			'purchase_price' => 'Purchase Price',
			'is_fsbo' => 'Is FSBO?',
			'date_listing' => 'Date Listing',
			'is_listing_expired' => 'Is Listing Expired?',
			'gross_rent' => 'Gross Rent',
			'rate_occupancy' => 'Rate Occupancy',
			'date_start' => 'Date Start',
			'date_finish' => 'Date Finish',
			'date_finish_estimated' => 'Estimated Finish Date',
			'benchmarks' => 'Benchmarks',
			'damages' => 'Damages',
			'work_week' => 'Work Week',
			'work_day' => 'Work Day',
			'cost_land' => 'Cost Land',
			'cost_design' => 'Cost Design',
			'cost_permit' => 'Cost Permit',
			'cost_site' => 'Cost Site',
			'cost_gc' => 'Cost GC',
			'cost_building' => 'Cost Building',
			'cost_bond' => 'Cost Bond',
			'cost_insurance' => 'Cost Insurance',
			'cost_contingency' => 'Cost Contingency',
			'cost_fee' => 'Cost Builder Fee',
			'cost_soft' => 'Cost Soft',
			'cost_ti' => 'Cost TI',
			'cost_ffe' => 'Cost FF&E',
			'location_factor' => 'Location Factor',
			'inflation_factor' => 'Inflation Factor',
			'sf_cost_site' => 'SF Cost Site',
			'sf_cost_building' => 'SF Cost Building',
			'sf_cost_ti' => 'SF Cost TI',
			'sf_cost_total' => 'SF Cost Total',
			'percent_gc' => 'Percent Gc',
			'percent_permit' => 'Percent Permit',
			'percent_design' => 'Percent Design',
			'percent_bond' => 'Percent Bond',
			'percent_insurance' => 'Percent insurance',
			'percent_contingency' => 'Percent Contingency',
			'percent_fee' => 'Percent Fee',
			'percent_soft' => 'Percent Soft',
			'template_project_id' => 'Template Project',
			'folder' => 'Folder',
			'date_archive' => 'Date Archive',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By',
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
	public function getXAddress()
	{
		return $this->hasOne(Address::className(), ['id' => 'x_address_id']);
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
	public function getProjectDocumentPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'project_document_picklist_id']);
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

  public static function listActiveProjects() //CHANGED MVW 03/20/14
  {
    // $query = (new \yii\db\Query())
    //   ->select('id','description')
    //   ->from('tbl_project')
    //   ->where([
    //     'is_active' => 1,
    //     'description' => !'empty',
    //     // 'type' => 'Person',
    //     // 'is_tenant' => 1,
    //     ])
    //   ->distinct(true) //FIXME Need to select id and description but unique on description
    //   ->OrderBy('description')
    //   ->all();

    $query = Project::find()->where(['is_active'=>1])->all(); //CHANGED MVW 03/20/14: This does what the above does
    return ArrayHelper::map($query , 'id', 'description');
  }
}
