<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/06/14. Needed for list functions

/**
 * This is the model class for table "tbl_entity".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $type
 * @property string $name
 * @property string $contact
 * @property string $aka
 * @property string $dba
 * @property string $middle_name
 * @property string $suffix
 * @property string $previous_name
 * @property string $signature
 * @property integer $is_tenant
 * @property integer $is_user
 * @property integer $is_provider
 * @property integer $is_customer
 * @property string $tenant_type_picklist_id
 * @property integer $is_tenant_enabled
 * @property string $db_username
 * @property string $db_password
 * @property integer $is_track_customers
 * @property integer $is_track_providers
 * @property integer $is_track_employees
 * @property integer $is_track_projects
 * @property integer $is_track_transactions
 * @property integer $is_track_campaigns
 * @property integer $is_track_content
 * @property integer $is_branded
 * @property string $slogan
 * @property string $logo_document_id
 * @property integer $is_user_enabled
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $salt
 * @property string $current_role_id
 * @property string $last_sign_in_time
 * @property string $x_reset_password_sent_time
 * @property string $x_remember_created_time
 * @property integer $x_sign_in_count
 * @property string $x_current_sign_in_time
 * @property string $x_current_sign_in_ip
 * @property string $x_last_sign_in_ip
 * @property integer $is_provider_approved
 * @property string $organization_type
 * @property integer $is_1099_eligible
 * @property integer $is_material_only
 * @property integer $is_track_license
 * @property integer $is_track_insurance
 * @property string $sponsor_entity_id
 * @property string $credit_picklist_id
 * @property string $credit_score
 * @property string $total_income
 * @property string $housing_expense
 * @property string $liquid_assets
 * @property string $investments
 * @property string $personal_property
 * @property string $real_property
 * @property string $total_assets
 * @property string $current_liabilities
 * @property string $long_term_liabilities
 * @property string $total_liabilities
 * @property string $equity
 * @property string $order_picklist_id
 * @property integer $is_renter
 * @property integer $years_school
 * @property string $employment_status
 * @property string $occupation
 * @property string $employer
 * @property string $position
 * @property string $years_employed
 * @property integer $retirement_age
 * @property string $date_bankruptcy
 * @property string $date_birth
 * @property string $date_anniversary
 * @property string $gender
 * @property string $marital_status
 * @property string $ethnicity_picklist_id
 * @property integer $is_us_citizen
 * @property string $military_status
 * @property integer $is_us_veteran
 * @property integer $is_disabled
 * @property string $description_disability
 * @property string $dependents
 * @property string $dependent_ages
 * @property string $customer_need_picklist_id
 * @property string $folder_location
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Account[] $accounts
 * @property Address[] $addresses
 * @property Building[] $buildings
 * @property Campaign[] $campaigns
 * @property CampaignStep[] $campaignSteps
 * @property Classification[] $classifications
 * @property Code[] $codes
 * @property Contact[] $contacts
 * @property ContactAccess[] $contactAccesses
 * @property ContactDeclaration[] $contactDeclarations
 * @property ContactLog[] $contactLogs
 * @property ContactRole[] $contactRoles
 * @property Document[] $documents
 * @property Entity $createdByEntity
 * @property Entity[] $entities
 * @property Picklist $creditPicklist
 * @property ContactRole $currentRole
 * @property Picklist $customerNeedPicklist
 * @property Picklist $ethnicityPicklist
 * @property Document $logoDocument
 * @property Picklist $orderPicklist
 * @property Entity $sponsorEntity
 * @property Picklist $tenantTypePicklist
 * @property Entity $updatedByEntity
 * @property EntityEmail[] $entityEmails
 * @property EntityHasAddress[] $entityHasAddresses
 * @property EntityHasEmail[] $entityHasEmails
 * @property EntityHasPhone[] $entityHasPhones
 * @property EntityHasType[] $entityHasTypes
 * @property EntityHasUrl[] $entityHasUrls
 * @property EntityInsurance[] $entityInsurances
 * @property EntityLicense[] $entityLicenses
 * @property EntityPhone[] $entityPhones
 * @property EntityRelationship[] $entityRelationships
 * @property EntityTax[] $entityTaxes
 * @property EntityTrigger[] $entityTriggers
 * @property EntityUrl[] $entityUrls
 * @property Formula[] $formulas
 * @property Mapping[] $mappings
 * @property Picklist[] $picklists
 * @property Project[] $projects
 * @property ProjectTeam[] $projectTeams
 * @property Rate[] $rates
 * @property Task[] $tasks
 * @property TaskCorrespondence[] $taskCorrespondences
 * @property TaskPredecessor[] $taskPredecessors
 * @property TaskRecurrence[] $taskRecurrences
 */
class Entity extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'is_tenant', 'is_user', 'is_provider', 'is_customer', 'tenant_type_picklist_id', 'is_tenant_enabled', 'is_track_customers', 'is_track_providers', 'is_track_employees', 'is_track_projects', 'is_track_transactions', 'is_track_campaigns', 'is_track_content', 'is_branded', 'logo_document_id', 'is_user_enabled', 'current_role_id', 'x_sign_in_count', 'is_provider_approved', 'is_1099_eligible', 'is_material_only', 'is_track_license', 'is_track_insurance', 'sponsor_entity_id', 'credit_picklist_id', 'order_picklist_id', 'is_renter', 'years_school', 'retirement_age', 'ethnicity_picklist_id', 'is_us_citizen', 'is_us_veteran', 'is_disabled', 'customer_need_picklist_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'signature', 'organization_type', 'employment_status', 'gender', 'marital_status', 'military_status', 'note'], 'string'],
			[['last_sign_in_time', 'x_reset_password_sent_time', 'x_remember_created_time', 'x_current_sign_in_time', 'date_bankruptcy', 'date_birth', 'date_anniversary', 'create_time', 'update_time','fullName'], 'safe'], //CHANGED MVW 03/22/14: Added fullName to allow Filter/Search
			[['total_income', 'housing_expense', 'liquid_assets', 'investments', 'personal_property', 'real_property', 'total_assets', 'current_liabilities', 'long_term_liabilities', 'total_liabilities', 'equity'], 'number'],
			[['name', 'contact', 'aka', 'dba', 'middle_name', 'suffix', 'previous_name', 'slogan', 'username', 'password_hash', 'password_reset_token', 'x_current_sign_in_ip', 'x_last_sign_in_ip', 'credit_score', 'occupation', 'employer', 'position', 'years_employed', 'description_disability', 'dependents', 'dependent_ages', 'folder_location'], 'string', 'max' => 255],
			[['db_username'], 'string', 'max' => 16],
			[['db_password'], 'string', 'max' => 1024],
			[['auth_key'], 'string', 'max' => 32],
			[['salt'], 'string', 'max' => 40],
			[['organization_type', 'employment_status', 'gender', 'marital_status', 'military_status'], 'default', 'value' => null],//CHANGED MVW 03/08/14: Needed so ENUM can be created or updated to NULL
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() //CHANGED MVW 03/08/14
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'type' => 'Type',
			'name' => 'Name',
			'contact' => 'Contact',
      'fullName' => 'Full Name', //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
			'aka' => 'AKA',
			'dba' => 'DBA',
			'middle_name' => 'Middle Name',
			'suffix' => 'Suffix',
			'previous_name' => 'Previous Name',
			'signature' => 'Signature',
			'is_tenant' => 'Is Tenant?',
			'is_user' => 'Is User?',
			'is_provider' => 'Is Provider?',
			'is_customer' => 'Is Customer?',
			'tenant_type_picklist_id' => 'Tenant Type',
			'is_tenant_enabled' => 'Is Tenant Enabled?',
			'db_username' => 'DB Username',
			'db_password' => 'DB Password',
			'is_track_customers' => 'Track Customers?',
			'is_track_providers' => 'Track Providers?',
			'is_track_employees' => 'Track Employees?',
			'is_track_projects' => 'Track Projects?',
			'is_track_transactions' => 'Track Transactions?/',
			'is_track_campaigns' => 'Track Campaigns?',
			'is_track_content' => 'Track Content?',
			'is_branded' => 'Is Tenant Branded?',
			'slogan' => 'Slogan',
			'logo_document_id' => 'Company Logo Document',
			'is_user_enabled' => 'Is User Enabled?',
			'username' => 'Username',
			'auth_key' => 'Auth Key',
			'password_hash' => 'Password',
			'password_reset_token' => 'Password Reset Token',
			'salt' => 'Salt',
			'current_role_id' => 'Current Role',
			'last_sign_in_time' => 'Last Sign In Time',
			'x_reset_password_sent_time' => 'X Reset Password Sent Time',
			'x_remember_created_time' => 'X Remember Created Time',
			'x_sign_in_count' => 'X Sign In Count',
			'x_current_sign_in_time' => 'X Current Sign In Time',
			'x_current_sign_in_ip' => 'X Current Sign In Ip',
			'x_last_sign_in_ip' => 'X Last Sign In Ip',
			'is_provider_approved' => 'Is Approved Provider?',
			'organization_type' => 'Organization Type',
			'is_1099_eligible' => 'Is 1099 Eligible?',
			'is_material_only' => 'Is Material Only?',
			'is_track_license' => 'Track License?',
			'is_track_insurance' => 'Track Insurance?',
      'sponsor_entity_id' => 'Sponsor ID',
			'credit_picklist_id' => 'Credit',
			'credit_score' => 'Credit Score',
			'total_income' => 'Total Income',
			'housing_expense' => 'Housing Expense',
			'liquid_assets' => 'Liquid Assets',
			'investments' => 'Investments',
			'personal_property' => 'Personal Property',
			'real_property' => 'Real Property',
			'total_assets' => 'Total Assets',
			'current_liabilities' => 'Current Liabilities',
			'long_term_liabilities' => 'Long Term Liabilities',
			'total_liabilities' => 'Total Liabilities',
			'equity' => 'Equity',
			'order_picklist_id' => 'Debt Payoff Order',
			'is_renter' => 'Is Renting',
			'years_school' => 'Years School',
			'employment_status' => 'Employment Status',
			'occupation' => 'Occupation',
			'employer' => 'Employer',
			'position' => 'Position',
			'years_employed' => 'Years Employed',
			'retirement_age' => 'Retirement Age',
			'date_bankruptcy' => 'Date Bankruptcy',
			'date_birth' => 'Date Birth',
			'date_anniversary' => 'Date Anniversary',
			'gender' => 'Gender',
			'marital_status' => 'Marital Status',
			'ethnicity_picklist_id' => 'Ethnicity',
			'is_us_citizen' => 'Is Us Citizen?',
			'military_status' => 'Military Status',
			'is_us_veteran' => 'Is Us Veteran?',
			'is_disabled' => 'Is Disabled?',
			'description_disability' => 'Description Disability',
			'dependents' => 'Dependents',
			'dependent_ages' => 'Dependent Ages',
			'customer_need_picklist_id' => 'Customer Need',
			'folder_location' => 'Folder Location',
			'note' => 'Note',
			'create_time' => 'Created',
			'created_by_entity_id' => 'Created By',
			'update_time' => 'Update',
			'updated_by_entity_id' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAccounts()
	{
		return $this->hasMany(Account::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAddresses()
	{
		return $this->hasMany(Address::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getBuildings()
	{
		return $this->hasMany(Building::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCampaigns()
	{
		return $this->hasMany(Campaign::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCampaignSteps()
	{
		return $this->hasMany(CampaignStep::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getClassifications()
	{
		return $this->hasMany(Classification::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCodes()
	{
		return $this->hasMany(Code::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContacts()
	{
		return $this->hasMany(Contact::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactAccesses()
	{
		return $this->hasMany(ContactAccess::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactDeclarations()
	{
		return $this->hasMany(ContactDeclaration::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactLogs()
	{
		return $this->hasMany(ContactLog::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactRoles()
	{
		return $this->hasMany(ContactRole::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDocuments()
	{
		return $this->hasMany(Document::className(), ['updated_by_entity_id' => 'id']);
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
	public function getEntities()
	{
		return $this->hasMany(Entity::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCreditPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'credit_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCurrentRole()
	{
		return $this->hasOne(ContactRole::className(), ['id' => 'current_role_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCustomerNeedPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'customer_need_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEthnicityPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'ethnicity_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getLogoDocument()
	{
		return $this->hasOne(Document::className(), ['id' => 'logo_document_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getOrderPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'order_picklist_id']);
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
  public function getSponsor() //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
  {
    return $this->hasOne(self::classname(), ['parent_id' => 'id'])->from(self::tableName() . ' AS parent');
  }


	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTenantTypePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'tenant_type_picklist_id']);
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
	public function getEntityEmails()
	{
		return $this->hasMany(EntityEmail::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasAddresses()
	{
		return $this->hasMany(EntityHasAddress::className(), ['entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasEmails()
	{
		return $this->hasMany(EntityHasEmail::className(), ['entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasPhones()
	{
		return $this->hasMany(EntityHasPhone::className(), ['entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasTypes()
	{
		return $this->hasMany(EntityHasType::className(), ['entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasUrls()
	{
		return $this->hasMany(EntityHasUrl::className(), ['entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityInsurances()
	{
		return $this->hasMany(EntityInsurance::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityLicenses()
	{
		return $this->hasMany(EntityLicense::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityPhones()
	{
		return $this->hasMany(EntityPhone::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityRelationships()
	{
		return $this->hasMany(EntityRelationship::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityTaxes()
	{
		return $this->hasMany(EntityTax::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityTriggers()
	{
		return $this->hasMany(EntityTrigger::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityUrls()
	{
		return $this->hasMany(EntityUrl::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFormulas()
	{
		return $this->hasMany(Formula::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMappings()
	{
		return $this->hasMany(Mapping::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPicklists()
	{
		return $this->hasMany(Picklist::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjects()
	{
		return $this->hasMany(Project::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectTeams()
	{
		return $this->hasMany(ProjectTeam::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getRates()
	{
		return $this->hasMany(Rate::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTasks()
	{
		return $this->hasMany(Task::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskCorrespondences()
	{
		return $this->hasMany(TaskCorrespondence::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskPredecessors()
	{
		return $this->hasMany(TaskPredecessor::className(), ['updated_by_entity_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskRecurrences()
	{
		return $this->hasMany(TaskRecurrence::className(), ['updated_by_entity_id' => 'id']);
	}

  public function getFullName() //CHANGED MVW 12/11/13: Extended name. i.e. to be used in drop down list. http://stackoverflow.com/questions/12812062/in-yii-framework-how-can-i-combine-two-columns-and-show-as-display-string-in-dro
  {
    if($this->type == 'Company')
    {
      if ($this->aka == null) return $this->name;
      else return $this->aka;
    }
    else
    {
      if ($this->aka == null) return $this->contact.' '.$this->name;
      else return $this->aka.' '.$this->name;
    }
  }

  public Static function listActiveTenants() //CHANGED MVW 03/06/14
  {
    $query = (new \yii\db\Query())
      ->select('id, name, contact, middle_name')
      ->from('tbl_entity')
      ->where([
        'is_active' => 1,
        'is_tenant' => 1,
        // 'type' => 'Person',
        ])
      ->OrderBy('name')
      ->all();

    return ArrayHelper::map($query, 'id', 'name');
    // return ArrayHelper::map($query, 'id', $entity->getFullName());
  }

  public static function listActiveUsers() //CHANGED MVW 03/06/14: Extended name. i.e. to be used in drop down list. http://www.yiiframework.com/forum/index.php/topic/7461-adding-columns-into-query/
  {
    // $query = (new \yii\db\Query())
      // ->select('id, name, contact, middle_name', Entity::getFullName())
      // ->select('id, name, contact, middle_name')
      // ->from('tbl_entity')
      // ->where([
      //   'is_active' => 1,
      //   'is_user' => 1,
      //   'type' => 'Person',
      //   // 'is_tenant' => 1,
      //   ])
      //  ->OrderBy('name')
      // ->all();

    // return ArrayHelper::map($query, 'id', Entity::getFullName());
    // return ArrayHelper::map($query, 'id', 'contact');
    // return ArrayHelper::map($query, 'id', 'fullName');
    $query = Entity::find()->where(['is_active'=>1, 'type'=>'Person', 'is_user'=>1])->all();
    return ArrayHelper::map($query , 'id', 'fullName');
  }

  public Static function listActiveProviders() //CHANGED MVW 03/08/14
  {
    $query = Entity::find()->where(['is_active'=>1, 'is_provider'=>1])->all();
    return ArrayHelper::map($query , 'id', 'fullName');
  }

  public Static function listActiveEntities() //CHANGED MVW 03/08/14 //FIXME limit
  {
    $query = Entity::find()->where(['is_active'=>1])->limit(4000)->all();
    return ArrayHelper::map($query , 'id', 'fullName');
  }

  public function getSponsorName() //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
  {
    return $this->sponsor->fullName;
  }
}
