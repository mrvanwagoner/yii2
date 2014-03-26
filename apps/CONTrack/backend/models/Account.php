<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/07/14

/**
 * This is the model class for table "tbl_account".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $project_id
 * @property string $type
 * @property string $account_number
 * @property string $craft_number
 * @property string $client_number
 * @property string $date_established
 * @property string $description
 * @property string $location
 * @property string $original_amount
 * @property string $budget_impact
 * @property string $cost_code_id
 * @property string $account_picklist_id
 * @property string $transaction_status_picklist_id
 * @property string $comment_budget
 * @property integer $is_estimate
 * @property integer $is_track_draws
 * @property integer $is_track_transactions
 * @property string $analyze
 * @property string $budget_account_id
 * @property string $breakdown_account_id
 * @property integer $contract_account_id
 * @property string $project_documents_picklist_id
 * @property string $percent_retainage
 * @property string $percent_variance
 * @property string $ref_number
 * @property string $date_ref
 * @property string $date_requested
 * @property string $date_received
 * @property string $revision
 * @property string $retainage
 * @property string $net_amount
 * @property string $completed
 * @property string $previous_payment
 * @property string $provider_entity_id
 * @property string $draw_account_id
 * @property string $date_paid
 * @property string $check_number
 * @property string $gl_code_id
 * @property string $inspector_entity_id
 * @property string $route_project_id
 * @property string $date_inspected
 * @property string $percent_previous
 * @property string $percent_current
 * @property string $comment_inspection
 * @property integer $is_reported
 * @property integer $is_bold
 * @property string $owner_entity_id
 * @property integer $is_asset
 * @property integer $is_liability
 * @property integer $is_paid_by_close
 * @property string $address_id
 * @property string $date_maturity
 * @property string $rate_interest
 * @property string $payment_min
 * @property integer $months_to_pay
 * @property string $year
 * @property string $make
 * @property string $model
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Picklist $accountPicklist
 * @property Address $address
 * @property Account $breakdownAccount
 * @property Account[] $accounts
 * @property Code $costCode
 * @property Entity $createdByEntity
 * @property Account $drawAccount
 * @property Code $glCode
 * @property Entity $inspectorEntity
 * @property Account $budgetAccount
 * @property Account $contractAccount
 * @property Project $project
 * @property Picklist $projectDocumentsPicklist
 * @property Entity $providerEntity
 * @property Project $routeProject
 * @property Picklist $transactionStatusPicklist
 * @property Entity $ownerEntity
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 */
class Account extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_account';
	}

  private $_projectDescription = null; //CHANGED MVW 03/22/14: Added projectDescriptin to allow Filter/Search. Used by getProjectDescription(). See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10. Also see http://www.mrsoundless.com/php/yii/searching-and-sorting-a-column-from-a-related-table-in-a-cgridview/

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'project_id', 'cost_code_id', 'account_picklist_id', 'transaction_status_picklist_id', 'is_estimate', 'is_track_draws', 'is_track_transactions', 'budget_account_id', 'breakdown_account_id', 'contract_account_id', 'project_documents_picklist_id', 'provider_entity_id', 'draw_account_id', 'gl_code_id', 'inspector_entity_id', 'route_project_id', 'is_reported', 'is_bold', 'owner_entity_id', 'is_asset', 'is_liability', 'is_paid_by_close', 'address_id', 'months_to_pay', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'create_time', 'update_time'], 'required'],
			[['type', 'budget_impact', 'comment_budget', 'analyze', 'comment_inspection', 'note'], 'string'],
			[['date_established', 'date_ref', 'date_requested', 'date_received', 'date_paid', 'date_inspected', 'date_maturity', 'create_time', 'update_time','projectDescription'], 'safe'], //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
			[['original_amount', 'percent_retainage', 'percent_variance', 'revision', 'retainage', 'net_amount', 'completed', 'previous_payment', 'percent_previous', 'percent_current', 'rate_interest', 'payment_min'], 'number'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['account_number', 'craft_number', 'client_number', 'ref_number', 'check_number', 'year', 'make', 'model'], 'string', 'max' => 45],
			[['description', 'location'], 'string', 'max' => 255],//CHANGED MVW 03/08/14: Add comma for next line
			[['budget_impact', 'analyze'], 'default', 'value' => null],//CHANGED MVW 03/08/14: Needed so ENUM can be created or updated to NULL
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() //CHANGED MVW 03/22/13
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant DBU',
      'project_id' => 'Project ID',
      // 'projectDescription' => 'Project Description',//CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
      'project.description' => "Project Description",
			'type' => 'Type',
			'account_number' => 'Account Number',
			'craft_number' => 'Craft Number',
			'client_number' => 'Client Number',
			'date_established' => 'Date Established',
			'description' => 'Description',
			'location' => 'Location',
			'original_amount' => 'Original Amount',
			'budget_impact' => 'Budget Impact',
      'costCode.code_number' => 'Cost Code Number',
      'costCode.description' => 'Cost Code Description',
      'accountPicklist.description' => 'Account Type',
      'transactionStatusPicklist.description' => 'Status',
			'comment_budget' => 'Comment Budget',
			'is_estimate' => 'Is Estimate?',
			'is_track_draws' => 'Track Draws?',
			'is_track_transactions' => 'Track Transactions?',
			'analyze' => 'Analyze',
      'budgetAccount.description' => 'Budget Account',
      'breakdownAccount.description' => 'Breakdown Account',
      'contractAccount.description' => 'Contract Account',
      'projectDocumentsPicklist.description' => 'Draw Form Used',
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
      'providerEntity.fullName' => 'Provider',
      'drawAccount.description' => 'Draw Account',
			'date_paid' => 'Date Paid',
			'check_number' => 'Check Number',
			'glCode.code_number' => 'GL Code',
			'glCode.description' => 'GL Code Description',
			'inspectorEntity.fullName' => 'Inspector',
			'routeProject.description' => 'Route',
			'date_inspected' => 'Date Inspected',
			'percent_previous' => 'Percent Previous',
			'percent_current' => 'Percent Current',
			'comment_inspection' => 'Comment Inspection',
			'is_reported' => 'Include in Report?',
			'is_bold' => 'Show As Bold In Report?',
			'ownerEntity.fullName' => 'Owner',
			'is_asset' => 'Is Asset?',
			'is_liability' => 'Is Liability?',
			'is_paid_by_close' => 'Is Paid By Close?',
			'address.fullAddress' => 'Address',
			'date_maturity' => 'Date Maturity',
			'rate_interest' => 'Rate Interest',
			'payment_min' => 'Payment Minimum',
			'months_to_pay' => 'Months To Pay',
			'year' => 'Year',
			'make' => 'Make',
			'model' => 'Model',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'createdByEntity.fullName' => 'Created By',
			'update_time' => 'Update Time',
			'updatedByEntity.fullName' => 'Updated By',      
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAccountPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'account_picklist_id']);
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
	public function getBreakdownAccount()
	{
		return $this->hasOne(Account::className(), ['id' => 'breakdown_account_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAccounts()
	{
		return $this->hasMany(Account::className(), ['budget_account_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContractAccount()
	{
		return $this->hasOne(Account::className(), ['id' => 'contract_account_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCostCode()
	{
		return $this->hasOne(Code::className(), ['id' => 'cost_code_id']);
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
	public function getDrawAccount()
	{
		return $this->hasOne(Account::className(), ['id' => 'draw_account_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getGlCode()
	{
		return $this->hasOne(Code::className(), ['id' => 'gl_code_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getInspectorEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'inspector_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getOwnerEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'owner_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getBudgetAccount()
	{
		return $this->hasOne(Account::className(), ['id' => 'budget_account_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'project_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectDocumentsPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'project_documents_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProviderEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'provider_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getRouteProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'route_project_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTransactionStatusPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'transaction_status_picklist_id']);
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

  public static function listActiveAccounts() //CHANGED MVW 03/08/14
  {
    $query = (new \yii\db\Query())
      ->select('id','description')
      ->from('tbl_account')
      ->where([
        'is_active' => 1,
        'description' => !'empty',
        // 'type' => 'Person',
        // 'is_tenant' => 1,
        ])
      ->distinct(true) //FIXME Need to select id and description but unique on description
      ->OrderBy('description')
      ->all();

    // $query = Account::find()->where(['is_active'=>1, 'description' => !'empty'])->all(); //CHANGED MVW 03/08/14: This does what the above does
    return ArrayHelper::map($query , 'id', 'description');
  }

  public static function listActiveBudgetAccounts() //CHANGED MVW 03/22/14
  {
    $query = Account::find()->where(['is_active'=>1, 'type' => 'Budget', 'description' => !'empty'])->all(); //CHANGED MVW 03/22/14: This does what the above does. //FIXME based on project/budget selected
    return ArrayHelper::map($query , 'id', 'description');
  }

  public static function listActiveContractAccounts() //CHANGED MVW 03/21/14
  {
    $query = Account::find()->where(['is_active'=>1, 'type' => 'Contract', 'description' => !'empty'])->all(); //CHANGED MVW 03/22/14: This does what the above does. //FIXME based on project/budget selected
    return ArrayHelper::map($query , 'id', 'description');
  }

  public static function listActiveDrawAccounts() //CHANGED MVW 03/21/14
  {
    $query = Account::find()->where(['is_active'=>1, 'type' => 'Draw', 'description' => !'empty'])->all(); //CHANGED MVW 03/21/14: This does what the above does. //FIXME based on project/budget selected
    return ArrayHelper::map($query , 'id', 'description');
  }

  public static function listActiveBreakdownAccounts() //CHANGED MVW 03/21/14
  {
    $query = Account::find()->where(['is_active'=>1, 'type' => 'Breakdown', 'description' => !'empty'])->all(); //CHANGED MVW 03/21/14: This does what the above does. //FIXME based on project/budget/draw selected
    return ArrayHelper::map($query , 'id', 'description');
  }

  public static function listActivePaymentAccounts() //CHANGED MVW 03/21/14
  {
    $query = Account::find()->where(['is_active'=>1, 'type' => 'Payment', 'description' => !'empty'])->all(); //CHANGED MVW 03/08/14: This does what the above does. //FIXME based on project/budget/draw selected
    return ArrayHelper::map($query , 'id', 'description');
  }
  
  public function getProjectDescription()  //CHANGED MVW 03/22/14: Added projectDescriptin to allow Filter/Search. Used by getProjectDescription(). See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10. Also see http://www.mrsoundless.com/php/yii/searching-and-sorting-a-column-from-a-related-table-in-a-cgridview/
  {
    if ($this->_projectDescription === null && $this->project !== null)
    {
      $this->_projectDescription = $this->project->description;
    }
    return $this->_projectDescription;
  }

  // public function setProjectDescription($value) //FIXME Not needed?
  // {
  //     $this->_projectDescription = $value;
  // }
}
