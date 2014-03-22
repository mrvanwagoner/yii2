<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Entity;

/**
 * EntitySearch represents the model behind the search form about `backend\models\Entity`.
 */
class EntitySearch extends Model
{
	public $id;
	public $is_active;
	public $type;
	public $name;
	public $contact;
	public $aka;
	public $dba;
	public $middle_name;
	public $suffix;
	public $previous_name;
	public $signature;
	public $is_tenant;
	public $is_user;
	public $is_provider;
	public $is_customer;
	public $tenant_type_picklist_id;
	public $is_tenant_enabled;
	public $db_username;
	public $db_password;
	public $is_track_customers;
	public $is_track_providers;
	public $is_track_employees;
	public $is_track_projects;
	public $is_track_transactions;
	public $is_track_campaigns;
	public $is_track_content;
	public $is_branded;
	public $slogan;
	public $logo_document_id;
	public $is_user_enabled;
	public $username;
	public $auth_key;
	public $password_hash;
	public $password_reset_token;
	public $salt;
	public $current_role_id;
	public $last_sign_in_time;
	public $x_reset_password_sent_time;
	public $x_remember_created_time;
	public $x_sign_in_count;
	public $x_current_sign_in_time;
	public $x_current_sign_in_ip;
	public $x_last_sign_in_ip;
	public $is_provider_approved;
	public $organization_type;
	public $is_1099_eligible;
	public $is_material_only;
	public $is_track_license;
	public $is_track_insurance;
	public $sponsor_entity_id;
	public $credit_picklist_id;
	public $credit_score;
	public $total_income;
	public $housing_expense;
	public $liquid_assets;
	public $investments;
	public $personal_property;
	public $real_property;
	public $total_assets;
	public $current_liabilities;
	public $long_term_liabilities;
	public $total_liabilities;
	public $equity;
	public $order_picklist_id;
	public $is_renter;
	public $years_school;
	public $employment_status;
	public $occupation;
	public $employer;
	public $position;
	public $years_employed;
	public $retirement_age;
	public $date_bankruptcy;
	public $date_birth;
	public $date_anniversary;
	public $gender;
	public $marital_status;
	public $ethnicity_picklist_id;
	public $is_us_citizen;
	public $military_status;
	public $is_us_veteran;
	public $is_disabled;
	public $description_disability;
	public $dependents;
	public $dependent_ages;
	public $customer_need_picklist_id;
	public $folder_location;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;
  public $fullName; //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10

	public function rules()
	{
		return [
			[['id', 'is_active', 'is_tenant', 'is_user', 'is_provider', 'is_customer', 'tenant_type_picklist_id', 'is_tenant_enabled', 'is_track_customers', 'is_track_providers', 'is_track_employees', 'is_track_projects', 'is_track_transactions', 'is_track_campaigns', 'is_track_content', 'is_branded', 'logo_document_id', 'is_user_enabled', 'current_role_id', 'x_sign_in_count', 'is_provider_approved', 'is_1099_eligible', 'is_material_only', 'is_track_license', 'is_track_insurance', 'sponsor_entity_id', 'credit_picklist_id', 'order_picklist_id', 'is_renter', 'years_school', 'retirement_age', 'ethnicity_picklist_id', 'is_us_citizen', 'is_us_veteran', 'is_disabled', 'customer_need_picklist_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'name', 'contact', 'aka', 'dba', 'middle_name', 'suffix', 'previous_name', 'signature', 'db_username', 'db_password', 'slogan', 'username', 'auth_key', 'password_hash', 'password_reset_token', 'salt', 'last_sign_in_time', 'x_reset_password_sent_time', 'x_remember_created_time', 'x_current_sign_in_time', 'x_current_sign_in_ip', 'x_last_sign_in_ip', 'organization_type', 'credit_score', 'employment_status', 'occupation', 'employer', 'position', 'years_employed', 'date_bankruptcy', 'date_birth', 'date_anniversary', 'gender', 'marital_status', 'military_status', 'description_disability', 'dependents', 'dependent_ages', 'folder_location', 'note', 'create_time', 'update_time','fullName'], 'safe'], //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
			[['total_income', 'housing_expense', 'liquid_assets', 'investments', 'personal_property', 'real_property', 'total_assets', 'current_liabilities', 'long_term_liabilities', 'total_liabilities', 'equity'], 'number'],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels() //CHANGED MVW 03/22/14: Copied from Model
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'type' => 'Type',
			'name' => 'Name',
			'contact' => 'Contact',
      'fullName' => 'Full Name', //CHANGED MVW 03/22/14: Added to allow Filter/Search
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

	public function search($params)
	{
		$query = Entity::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

    $dataProvider->setSort([ //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
      'attributes' => [ //CHANGED MVW 03/22/14: Copied list of attributes from index.php then edited
        'id',
        'is_active',
        'type',
        'name',
        'contact',
        'fullName' => [ //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10
          'asc' => ['name' => SORT_ASC, 'contact' => SORT_ASC],
          'desc' => ['name' => SORT_DESC, 'contact' => SORT_DESC],
          'label' => 'Full Name',
          'default' => SORT_ASC
        ],
        'aka',
        'dba',
        'middle_name',
        'suffix',
        'previous_name',
        'signature:ntext',
        'is_tenant',
        'is_user',
        'is_provider',
        'is_customer',
        'tenant_type_picklist_id',
        'is_tenant_enabled',
        'db_username',
        'db_password',
        'is_track_customers',
        'is_track_providers',
        'is_track_employees',
        'is_track_projects',
        'is_track_transactions',
        'is_track_campaigns',
        'is_track_content',
        'is_branded',
        'slogan',
        'logo_document_id',
        'is_user_enabled',
        'username',
        'auth_key',
        'password_hash',
        'password_reset_token',
        'salt',
        'current_role_id',
        'last_sign_in_time',
        'x_reset_password_sent_time',
        'x_remember_created_time',
        'x_sign_in_count',
        'x_current_sign_in_time',
        'x_current_sign_in_ip',
        'x_last_sign_in_ip',
        'is_provider_approved',
        'organization_type',
        'is_1099_eligible',
        'is_material_only',
        'is_track_license',
        'is_track_insurance',
        'sponsor_entity_id',
        'credit_picklist_id',
        'credit_score',
        'total_income',
        'housing_expense',
        'liquid_assets',
        'investments',
        'personal_property',
        'real_property',
        'total_assets',
        'current_liabilities',
        'long_term_liabilities',
        'total_liabilities',
        'equity',
        'order_picklist_id',
        'is_renter',
        'years_school',
        'employment_status',
        'occupation',
        'employer',
        'position',
        'years_employed',
        'retirement_age',
        'date_bankruptcy',
        'date_birth',
        'date_anniversary',
        'gender',
        'marital_status',
        'ethnicity_picklist_id',
        'is_us_citizen',
        'military_status',
        'is_us_veteran',
        'is_disabled',
        'description_disability',
        'dependents',
        'dependent_ages',
        'customer_need_picklist_id',
        'folder_location',
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
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'name', true);
		$this->addCondition($query, 'contact', true);
		$this->addCondition($query, 'aka', true);
		$this->addCondition($query, 'dba', true);
		$this->addCondition($query, 'middle_name', true);
		$this->addCondition($query, 'suffix', true);
		$this->addCondition($query, 'previous_name', true);
		$this->addCondition($query, 'signature', true);
		$this->addCondition($query, 'is_tenant');
		$this->addCondition($query, 'is_user');
		$this->addCondition($query, 'is_provider');
		$this->addCondition($query, 'is_customer');
		$this->addCondition($query, 'tenant_type_picklist_id');
		$this->addCondition($query, 'is_tenant_enabled');
		$this->addCondition($query, 'db_username', true);
		$this->addCondition($query, 'db_password', true);
		$this->addCondition($query, 'is_track_customers');
		$this->addCondition($query, 'is_track_providers');
		$this->addCondition($query, 'is_track_employees');
		$this->addCondition($query, 'is_track_projects');
		$this->addCondition($query, 'is_track_transactions');
		$this->addCondition($query, 'is_track_campaigns');
		$this->addCondition($query, 'is_track_content');
		$this->addCondition($query, 'is_branded');
		$this->addCondition($query, 'slogan', true);
		$this->addCondition($query, 'logo_document_id');
		$this->addCondition($query, 'is_user_enabled');
		$this->addCondition($query, 'username', true);
		$this->addCondition($query, 'auth_key', true);
		$this->addCondition($query, 'password_hash', true);
		$this->addCondition($query, 'password_reset_token', true);
		$this->addCondition($query, 'salt', true);
		$this->addCondition($query, 'current_role_id');
		$this->addCondition($query, 'last_sign_in_time');
		$this->addCondition($query, 'x_reset_password_sent_time');
		$this->addCondition($query, 'x_remember_created_time');
		$this->addCondition($query, 'x_sign_in_count');
		$this->addCondition($query, 'x_current_sign_in_time');
		$this->addCondition($query, 'x_current_sign_in_ip', true);
		$this->addCondition($query, 'x_last_sign_in_ip', true);
		$this->addCondition($query, 'is_provider_approved');
		$this->addCondition($query, 'organization_type', true);
		$this->addCondition($query, 'is_1099_eligible');
		$this->addCondition($query, 'is_material_only');
		$this->addCondition($query, 'is_track_license');
		$this->addCondition($query, 'is_track_insurance');
		$this->addCondition($query, 'sponsor_entity_id');
		$this->addCondition($query, 'credit_picklist_id');
		$this->addCondition($query, 'credit_score', true);
		$this->addCondition($query, 'total_income');
		$this->addCondition($query, 'housing_expense');
		$this->addCondition($query, 'liquid_assets');
		$this->addCondition($query, 'investments');
		$this->addCondition($query, 'personal_property');
		$this->addCondition($query, 'real_property');
		$this->addCondition($query, 'total_assets');
		$this->addCondition($query, 'current_liabilities');
		$this->addCondition($query, 'long_term_liabilities');
		$this->addCondition($query, 'total_liabilities');
		$this->addCondition($query, 'equity');
		$this->addCondition($query, 'order_picklist_id');
		$this->addCondition($query, 'is_renter');
		$this->addCondition($query, 'years_school');
		$this->addCondition($query, 'employment_status', true);
		$this->addCondition($query, 'occupation', true);
		$this->addCondition($query, 'employer', true);
		$this->addCondition($query, 'position', true);
		$this->addCondition($query, 'years_employed', true);
		$this->addCondition($query, 'retirement_age');
		$this->addCondition($query, 'date_bankruptcy');
		$this->addCondition($query, 'date_birth');
		$this->addCondition($query, 'date_anniversary');
		$this->addCondition($query, 'gender', true);
		$this->addCondition($query, 'marital_status', true);
		$this->addCondition($query, 'ethnicity_picklist_id');
		$this->addCondition($query, 'is_us_citizen');
		$this->addCondition($query, 'military_status', true);
		$this->addCondition($query, 'is_us_veteran');
		$this->addCondition($query, 'is_disabled');
		$this->addCondition($query, 'description_disability', true);
		$this->addCondition($query, 'dependents', true);
		$this->addCondition($query, 'dependent_ages', true);
		$this->addCondition($query, 'customer_need_picklist_id');
		$this->addCondition($query, 'folder_location', true);
		$this->addCondition($query, 'note', true);
		$this->addCondition($query, 'create_time');
		$this->addCondition($query, 'created_by_entity_id');
		$this->addCondition($query, 'update_time');
		$this->addCondition($query, 'updated_by_entity_id');
    $query->andWhere('contact LIKE "%' . $this->fullName . '%" ' . 'OR name LIKE "%' . $this->fullName . '%"'); //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10

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

    $attribute = "tbl_entity.$attribute"; //CHANGED MVW 03/22/14: Added to allow Filter/Search. See http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/#hh10

		if ($partialMatch) {
			$query->andWhere(['like', $attribute, $value]);
		} else {
			$query->andWhere([$attribute => $value]);
		}
	}
}
