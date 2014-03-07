<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CampaignStep;

/**
 * CampaignStepSearch represents the model behind the search form about `\backend\models\CampaignStep`.
 */
class CampaignStepSearch extends Model
{
	public $id;
	public $is_active;
	public $campaign_id;
	public $step_number;
	public $description;
	public $project_task_picklist_id;
	public $status_picklist_id;
	public $perform;
	public $period_picklist_id;
	public $order;
	public $from;
	public $specific_date;
	public $document_id;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'campaign_id', 'step_number', 'project_task_picklist_id', 'status_picklist_id', 'perform', 'period_picklist_id', 'document_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['description', 'order', 'from', 'specific_date', 'note', 'create_time', 'update_time'], 'safe'],
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
			'campaign_id' => 'Campaign ID',
			'step_number' => 'Step Number',
			'description' => 'Description',
			'project_task_picklist_id' => 'Project Task Picklist ID',
			'status_picklist_id' => 'Status Picklist ID',
			'perform' => 'Perform',
			'period_picklist_id' => 'Period Picklist ID',
			'order' => 'Order',
			'from' => 'From',
			'specific_date' => 'Specific Date',
			'document_id' => 'Document ID',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = CampaignStep::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'campaign_id');
		$this->addCondition($query, 'step_number');
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'project_task_picklist_id');
		$this->addCondition($query, 'status_picklist_id');
		$this->addCondition($query, 'perform');
		$this->addCondition($query, 'period_picklist_id');
		$this->addCondition($query, 'order', true);
		$this->addCondition($query, 'from', true);
		$this->addCondition($query, 'specific_date');
		$this->addCondition($query, 'document_id');
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
