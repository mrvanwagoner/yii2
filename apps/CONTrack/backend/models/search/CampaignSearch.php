<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Campaign;

/**
 * CampaignSearch represents the model behind the search form about `\backend\models\Campaign`.
 */
class CampaignSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $campaign_picklist_id;
	public $description;
	public $is_contractor_campaign;
	public $is_lender_campaign;
	public $is_mortgage_campaign;
	public $is_realtor_campaign;
	public $is_service_campaign;
	public $originating_entity_id;
	public $is_project_based;
	public $recipient_entity_ids;
	public $start_time;
	public $project_status_picklist_id;
	public $stop_time;
	public $recur_every;
	public $period_picklist_id;
	public $number_of_occurences;
	public $sent_occurences;
	public $last_sent_time;
	public $current_step;
	public $x_filter_id;
	public $x_search_condtions;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'campaign_picklist_id', 'is_contractor_campaign', 'is_lender_campaign', 'is_mortgage_campaign', 'is_realtor_campaign', 'is_service_campaign', 'originating_entity_id', 'is_project_based', 'project_status_picklist_id', 'period_picklist_id', 'sent_occurences', 'current_step', 'x_filter_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'description', 'recipient_entity_ids', 'start_time', 'stop_time', 'last_sent_time', 'x_search_condtions', 'note', 'create_time', 'update_time'], 'safe'],
			[['recur_every', 'number_of_occurences'], 'number'],
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
			'campaign_picklist_id' => 'Campaign Picklist ID',
			'description' => 'Description',
			'is_contractor_campaign' => 'Is Contractor Campaign',
			'is_lender_campaign' => 'Is Lender Campaign',
			'is_mortgage_campaign' => 'Is Mortgage Campaign',
			'is_realtor_campaign' => 'Is Realtor Campaign',
			'is_service_campaign' => 'Is Service Campaign',
			'originating_entity_id' => 'Originating Entity ID',
			'is_project_based' => 'Is Project Based',
			'recipient_entity_ids' => 'Recipient Entity Ids',
			'start_time' => 'Start Time',
			'project_status_picklist_id' => 'Project Status Picklist ID',
			'stop_time' => 'Stop Time',
			'recur_every' => 'Recur Every',
			'period_picklist_id' => 'Period Picklist ID',
			'number_of_occurences' => 'Number Of Occurences',
			'sent_occurences' => 'Sent Occurences',
			'last_sent_time' => 'Last Sent Time',
			'current_step' => 'Current Step',
			'x_filter_id' => 'X Filter ID',
			'x_search_condtions' => 'X Search Condtions',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Campaign::find();
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
		$this->addCondition($query, 'campaign_picklist_id');
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'is_contractor_campaign');
		$this->addCondition($query, 'is_lender_campaign');
		$this->addCondition($query, 'is_mortgage_campaign');
		$this->addCondition($query, 'is_realtor_campaign');
		$this->addCondition($query, 'is_service_campaign');
		$this->addCondition($query, 'originating_entity_id');
		$this->addCondition($query, 'is_project_based');
		$this->addCondition($query, 'recipient_entity_ids', true);
		$this->addCondition($query, 'start_time');
		$this->addCondition($query, 'project_status_picklist_id');
		$this->addCondition($query, 'stop_time');
		$this->addCondition($query, 'recur_every');
		$this->addCondition($query, 'period_picklist_id');
		$this->addCondition($query, 'number_of_occurences');
		$this->addCondition($query, 'sent_occurences');
		$this->addCondition($query, 'last_sent_time');
		$this->addCondition($query, 'current_step');
		$this->addCondition($query, 'x_filter_id');
		$this->addCondition($query, 'x_search_condtions', true);
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
