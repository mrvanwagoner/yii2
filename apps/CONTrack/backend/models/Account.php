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
 * @property string $type
 * @property string $account_number
 * @property string $date_established
 * @property string $description
 * @property string $location
 * @property string $account_picklist_id
 * @property string $transaction_status_picklist_id
 * @property string $parent_account_id
 * @property integer $is_track_transactions
 * @property string $provider_entity_id
 * @property string $gl_code_id
 * @property string $project_id
 * @property string $ref_number
 * @property string $date_ref
 * @property string $budget_impact
 * @property string $gross_amount
 * @property string $adjustment
 * @property string $net_amount
 * @property integer $is_reported
 * @property string $comment_budget
 * @property integer $is_bold
 * @property string $beginning_balance
 * @property string $current_balance
 * @property integer $is_asset
 * @property integer $is_liability
 * @property string $date_maturity
 * @property string $face_amount
 * @property string $current_value
 * @property string $address_id
 * @property integer $is_paid_by_close
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
 * @property Entity $createdByEntity
 * @property Code $glCode
 * @property Account $parentAccount
 * @property Account[] $accounts
 * @property Project $project
 * @property Entity $providerEntity
 * @property Picklist $statusTransactionPicklist
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

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'account_picklist_id', 'transaction_status_picklist_id', 'parent_account_id', 'is_track_transactions', 'provider_entity_id', 'gl_code_id', 'project_id', 'is_reported', 'is_bold', 'is_asset', 'is_liability', 'address_id', 'is_paid_by_close', 'months_to_pay', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'create_time', 'update_time'], 'required'],
			[['type', 'budget_impact', 'comment_budget', 'note'], 'string'],
			[['date_established', 'date_ref', 'date_maturity', 'create_time', 'update_time'], 'safe'],
			[['gross_amount', 'adjustment', 'net_amount', 'beginning_balance', 'current_balance', 'face_amount', 'current_value', 'rate_interest', 'payment_min'], 'number'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['account_number', 'ref_number', 'year', 'make', 'model'], 'string', 'max' => 45],
			[['description', 'location'], 'string', 'max' => 255]
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
			'account_number' => 'Account Number',
			'date_established' => 'Date Established',
			'description' => 'Description',
			'location' => 'Location',
			'account_picklist_id' => 'Account',
			'transaction_status_picklist_id' => 'Status',
			'parent_account_id' => 'Parent Account',
			'is_track_transactions' => 'Track Transactions?',
			'provider_entity_id' => 'Provider',
			'gl_code_id' => 'GL Account',
			'project_id' => 'Project',
			'ref_number' => 'Ref Number',
			'date_ref' => 'Date Ref',
			'budget_impact' => 'Budget Impact',
			'gross_amount' => 'Gross Amount',
			'adjustment' => 'Adjustment',
			'net_amount' => 'Net Amount',
			'is_reported' => 'Report?',
			'comment_budget' => 'Comment Budget',
			'is_bold' => 'Bold?',
			'beginning_balance' => 'Beginning Balance',
			'current_balance' => 'Current Balance',
			'is_asset' => 'Asset?',
			'is_liability' => 'Liability?',
			'date_maturity' => 'Date Maturity',
			'face_amount' => 'Face Amount',
			'current_value' => 'Current Value',
			'address_id' => 'Address',
			'is_paid_by_close' => 'Paid By Close?',
			'rate_interest' => 'Rate Interest',
			'payment_min' => 'Payment Min',
			'months_to_pay' => 'Months To Pay',
			'year' => 'Year',
			'make' => 'Make',
			'model' => 'Model',
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
	public function getCreatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'created_by_entity_id']);
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
	public function getParentAccount()
	{
		return $this->hasOne(Account::className(), ['id' => 'parent_account_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAccounts()
	{
		return $this->hasMany(Account::className(), ['parent_account_id' => 'id']);
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
	public function getProviderEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'provider_entity_id']);
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
}
