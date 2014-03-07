<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/06/14. Needed for list functions

/**
 * This is the model class for table "tbl_picklist".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property string $description
 * @property string $comment
 * @property string $location
 * @property string $hierarchy
 * @property string $sort_order
 * @property string $code_id
 * @property integer $is_tenant
 * @property integer $is_company
 * @property integer $is_person
 * @property integer $is_role
 * @property integer $is_customer
 * @property integer $is_provider
 * @property integer $is_license
 * @property integer $is_transaction
 * @property integer $is_project
 * @property integer $is_loan
 * @property integer $is_commercial
 * @property integer $is_residential
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Account[] $accounts
 * @property Campaign[] $campaigns
 * @property CampaignStep[] $campaignSteps
 * @property Code[] $codes
 * @property Contact[] $contacts
 * @property ContactAccess[] $contactAccesses
 * @property ContactDeclaration[] $contactDeclarations
 * @property ContactLog[] $contactLogs
 * @property ContactRole[] $contactRoles
 * @property Document[] $documents
 * @property Entity[] $entities
 * @property EntityHasType[] $entityHasTypes
 * @property EntityInsurance[] $entityInsurances
 * @property EntityLicense[] $entityLicenses
 * @property EntityTrigger[] $entityTriggers
 * @property Formula[] $formulas
 * @property Mapping[] $mappings
 * @property Code $code
 * @property Entity $createdByEntity
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property Project[] $projects
 * @property ProjectTeam[] $projectTeams
 * @property Task[] $tasks
 * @property TaskRecurrence[] $taskRecurrences
 */
class Picklist extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_picklist';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'code_id', 'is_tenant', 'is_company', 'is_person', 'is_role', 'is_customer', 'is_provider', 'is_license', 'is_transaction', 'is_project', 'is_loan', 'is_commercial', 'is_residential', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'create_time', 'update_time'], 'required'],
			[['description', 'comment', 'note'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['type', 'location', 'hierarchy', 'sort_order'], 'string', 'max' => 255]
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
			'tenant_dbu' => 'Tenant Dbu',
			'type' => 'Type',
			'description' => 'Description',
			'comment' => 'Comment',
			'location' => 'Location',
			'hierarchy' => 'Hierarchy',
			'sort_order' => 'Sort Order',
			'code_id' => 'Code ID',
			'is_tenant' => 'Is Tenant?',
			'is_company' => 'Is Company?',
			'is_person' => 'Is Person?',
			'is_role' => 'Is Role?',
			'is_customer' => 'Is Customer?',
			'is_provider' => 'Is Provide?r',
			'is_license' => 'Is License?',
			'is_transaction' => 'Is Transaction?',
			'is_project' => 'Is Project?',
			'is_loan' => 'Is Loan?',
			'is_commercial' => 'Is Commercial?',
			'is_residential' => 'Is Residential?',
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
		return $this->hasMany(Account::className(), ['status_transaction_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCampaigns()
	{
		return $this->hasMany(Campaign::className(), ['project_status_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCampaignSteps()
	{
		return $this->hasMany(CampaignStep::className(), ['period_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCodes()
	{
		return $this->hasMany(Code::className(), ['unit_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContacts()
	{
		return $this->hasMany(Contact::className(), ['type_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactAccesses()
	{
		return $this->hasMany(ContactAccess::className(), ['access_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactDeclarations()
	{
		return $this->hasMany(ContactDeclaration::className(), ['declaration_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactLogs()
	{
		return $this->hasMany(ContactLog::className(), ['contact_method_person_task_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactRoles()
	{
		return $this->hasMany(ContactRole::className(), ['role_type_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDocuments()
	{
		return $this->hasMany(Document::className(), ['document_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntities()
	{
		return $this->hasMany(Entity::className(), ['tenant_type_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasTypes()
	{
		return $this->hasMany(EntityHasType::className(), ['type_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityInsurances()
	{
		return $this->hasMany(EntityInsurance::className(), ['insurance_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityLicenses()
	{
		return $this->hasMany(EntityLicense::className(), ['license_type_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityTriggers()
	{
		return $this->hasMany(EntityTrigger::className(), ['trigger_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getFormulas()
	{
		return $this->hasMany(Formula::className(), ['unit_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getMappings()
	{
		return $this->hasMany(Mapping::className(), ['lead_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCode()
	{
		return $this->hasOne(Code::className(), ['id' => 'code_id']);
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
	public function getProjects()
	{
		return $this->hasMany(Project::className(), ['purpose_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProjectTeams()
	{
		return $this->hasMany(ProjectTeam::className(), ['type_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTasks()
	{
		return $this->hasMany(Task::className(), ['project_status_picklist_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskRecurrences()
	{
		return $this->hasMany(TaskRecurrence::className(), ['week_period_picklist_id' => 'id']);
	}
  
  //CHANGED MVW 03/06/14. Added
  public static function listTenantTypes()
  {
    $query = (new \yii\db\Query())
      ->select('id, description')
      ->from('tbl_picklist')
      ->where([
        'is_active' => 1,
        'type' => 'Type',
        'is_tenant' => 1,
        ])
      ->orderBy('description')
      ->all();

    return ArrayHelper::map($query, 'id', 'description');
    // return ArrayHelper::map(Picklist::find()->where(['is_active'=>1,'type'=>'Type', 'is_tenant'=>1])->all(), 'id', 'description' );//CHANGED This works too
  }

  //CHANGED MVW 03/06/14. Added. See listTenantTyupes for additional notes
  public static function listCredit()
  {
    $query = (new \yii\db\Query())
      ->select('id, description')
      ->from('tbl_picklist')
      ->where([
        'is_active' => 1,
        'type' => 'Credit',
        // 'is_tenant' => 1,
        ])
      ->orderBy('description')
      ->all();

    return ArrayHelper::map($query, 'id', 'description');
  }

  //CHANGED MVW 03/06/14. Added. See listTenantTyupes for additional notes
  public static function listOrder()
  {
    $query = (new \yii\db\Query())
      ->select('id, description')
      ->from('tbl_picklist')
      ->where([
        'is_active' => 1,
        'type' => 'Order',
        // 'is_tenant' => 1,
        ])
      // ->orderBy('description')
      ->all();

    return ArrayHelper::map($query, 'id', 'description');
  }

  //CHANGED MVW 03/06/14. Added. See listTenantTyupes for additional notes
  public static function listEthnicity()
  {
    $query = (new \yii\db\Query())
      ->select('id, description')
      ->from('tbl_picklist')
      ->where([
        'is_active' => 1,
        'type' => 'Ethnicity',
        // 'is_tenant' => 1,
        ])
      // ->OrderBy('description')
      ->all();

    return ArrayHelper::map($query, 'id', 'description');
  }

  //CHANGED MVW 03/06/14. Added. See listTenantTyupes for additional notes
  public static function listNeed()
  {
    $query = (new \yii\db\Query())
      ->select('id, description')
      ->from('tbl_picklist')
      ->where([
        'is_active' => 1,
        'type' => 'Need',
        // 'is_tenant' => 1,
        ])
      // ->OrderBy('description')
      ->all();

    return ArrayHelper::map($query, 'id', 'description');
  }
}
