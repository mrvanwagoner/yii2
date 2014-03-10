<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_contact".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $entity_id
 * @property string $type
 * @property string $description
 * @property string $type_picklist_id
 * @property string $status_picklist_id
 * @property string $address_id
 * @property string $phone_id
 * @property string $mobile_phone_id
 * @property string $fax_phone_id
 * @property string $email_id
 * @property string $contact_method_person_task_picklist_id
 * @property integer $is_employee
 * @property string $trainer_entity_id
 * @property integer $is_full_time
 * @property string $date_hire
 * @property string $date_modified
 * @property string $date_rehire
 * @property string $date_terminated
 * @property integer $is_eligible_for_rehire
 * @property string $salary
 * @property string $wage
 * @property string $commission_percent
 * @property string $commission_amount
 * @property string $grade
 * @property string $date_grade_assigned
 * @property string $sponsor_entity_id
 * @property integer $is_preferred
 * @property string $account_number
 * @property string $sales_rep_entity_id
 * @property string $date_sales_rep_assigned
 * @property string $service_rep_entity_id
 * @property string $date_service_rep_assigned
 * @property string $lead_picklist_id
 * @property string $credit_limit
 * @property string $provider_terms_picklist_id
 * @property string $payment_method_provider_task_picklist_id
 * @property integer $refer_score
 * @property string $refer_comment
 * @property integer $is_named_insured
 * @property string $date_first_contact
 * @property string $percent_close_out
 * @property integer $ok_to_email
 * @property integer $ok_to_text
 * @property string $comment_differentiation
 * @property string $builder_type
 * @property integer $Jobs_per_year
 * @property string $avg_value
 * @property integer $is_spec_builder
 * @property integer $number_of_models
 * @property string $loan_in_name
 * @property string $current_lender_source
 * @property string $terms_points
 * @property string $terms_rate
 * @property string $sales_source
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Address $address
 * @property Picklist $contactMethodPersonTaskPicklist
 * @property Entity $createdByEntity
 * @property EntityEmail $email
 * @property Entity $entity
 * @property EntityPhone $faxPhone
 * @property Picklist $leadPicklist
 * @property EntityPhone $mobilePhone
 * @property Picklist $paymentMethodProviderTaskPicklist
 * @property EntityPhone $phone
 * @property Picklist $providerTermsPicklist
 * @property Entity $salesRepEntity
 * @property Entity $serviceRepEntity
 * @property Entity $sponsorEntity
 * @property Picklist $statusPicklist
 * @property Entity $tenant
 * @property Entity $trainerEntity
 * @property Picklist $typePicklist
 * @property Entity $updatedByEntity
 * @property ContactAccess[] $contactAccesses
 * @property ContactDeclaration[] $contactDeclarations
 * @property ContactHasDocument[] $contactHasDocuments
 * @property ContactLog[] $contactLogs
 * @property ContactRole[] $contactRoles
 */
class Contact extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_contact';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'entity_id', 'type_picklist_id', 'status_picklist_id', 'address_id', 'phone_id', 'mobile_phone_id', 'fax_phone_id', 'email_id', 'contact_method_person_task_picklist_id', 'is_employee', 'trainer_entity_id', 'is_full_time', 'is_eligible_for_rehire', 'grade', 'sponsor_entity_id', 'is_preferred', 'sales_rep_entity_id', 'service_rep_entity_id', 'lead_picklist_id', 'provider_terms_picklist_id', 'payment_method_provider_task_picklist_id', 'refer_score', 'is_named_insured', 'ok_to_email', 'ok_to_text', 'Jobs_per_year', 'is_spec_builder', 'number_of_models', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'entity_id'], 'required'],
			[['type', 'builder_type', 'loan_in_name', 'note'], 'string'],
			[['date_hire', 'date_modified', 'date_rehire', 'date_terminated', 'date_grade_assigned', 'date_sales_rep_assigned', 'date_service_rep_assigned', 'date_first_contact', 'create_time', 'update_time'], 'safe'],
			[['commission_percent', 'commission_amount', 'credit_limit', 'percent_close_out', 'terms_points', 'terms_rate'], 'number'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['description', 'salary', 'wage', 'refer_comment', 'comment_differentiation', 'avg_value', 'current_lender_source', 'sales_source'], 'string', 'max' => 255],
			[['account_number'], 'string', 'max' => 45]
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
	public function getContactMethodPersonTaskPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'contact_method_person_task_picklist_id']);
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
	public function getEmail()
	{
		return $this->hasOne(EntityEmail::className(), ['id' => 'email_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFaxPhone()
	{
		return $this->hasOne(EntityPhone::className(), ['id' => 'fax_phone_id']);
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
	public function getMobilePhone()
	{
		return $this->hasOne(EntityPhone::className(), ['id' => 'mobile_phone_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPaymentMethodProviderTaskPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'payment_method_provider_task_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPhone()
	{
		return $this->hasOne(EntityPhone::className(), ['id' => 'phone_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProviderTermsPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'provider_terms_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getSalesRepEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'sales_rep_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getServiceRepEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'service_rep_entity_id']);
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
	public function getStatusPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'status_picklist_id']);
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
	public function getTrainerEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'trainer_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTypePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'type_picklist_id']);
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
	public function getContactAccesses()
	{
		return $this->hasMany(ContactAccess::className(), ['contact_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactDeclarations()
	{
		return $this->hasMany(ContactDeclaration::className(), ['contact_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactHasDocuments()
	{
		return $this->hasMany(ContactHasDocument::className(), ['contact_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactLogs()
	{
		return $this->hasMany(ContactLog::className(), ['contact_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactRoles()
	{
		return $this->hasMany(ContactRole::className(), ['contact_id' => 'id']);
	}
}
