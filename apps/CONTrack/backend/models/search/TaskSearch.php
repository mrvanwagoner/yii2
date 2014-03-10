<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Task;

/**
 * TaskSearch represents the model behind the search form about `\backend\models\Task`.
 */
class TaskSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $entity_id;
	public $type;
	public $description;
	public $task_picklist_id;
	public $priority;
	public $start;
	public $finish;
	public $duration;
	public $is_done;
	public $tags;
	public $assigned_to_entity_id;
	public $supervisor_entity_id;
	public $customer_entity_id;
	public $supplier_entity_id;
	public $person_task_picklist_id;
	public $project_id;
	public $location;
	public $project_status_picklist_id;
	public $code_id;
	public $late_start;
	public $late_finish;
	public $float;
	public $actual_start;
	public $actual_finish;
	public $actual_duration;
	public $percent_complete;
	public $campaign_id;
	public $campaign_step_id;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'entity_id', 'task_picklist_id', 'duration', 'is_done', 'assigned_to_entity_id', 'supervisor_entity_id', 'customer_entity_id', 'supplier_entity_id', 'person_task_picklist_id', 'project_id', 'project_status_picklist_id', 'code_id', 'float', 'actual_duration', 'campaign_id', 'campaign_step_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'description', 'priority', 'start', 'finish', 'tags', 'location', 'late_start', 'late_finish', 'actual_start', 'actual_finish', 'note', 'create_time', 'update_time'], 'safe'],
			[['percent_complete'], 'number'],
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
			'task_picklist_id' => 'Task Picklist ID',
			'priority' => 'Priority',
			'start' => 'Start',
			'finish' => 'Finish',
			'duration' => 'Duration',
			'is_done' => 'Is Done',
			'tags' => 'Tags',
			'assigned_to_entity_id' => 'Assigned To Entity ID',
			'supervisor_entity_id' => 'Supervisor Entity ID',
			'customer_entity_id' => 'Customer Entity ID',
			'supplier_entity_id' => 'Supplier Entity ID',
			'person_task_picklist_id' => 'Person Task Picklist ID',
			'project_id' => 'Project ID',
			'location' => 'Location',
			'project_status_picklist_id' => 'Project Status Picklist ID',
			'code_id' => 'Code ID',
			'late_start' => 'Late Start',
			'late_finish' => 'Late Finish',
			'float' => 'Float',
			'actual_start' => 'Actual Start',
			'actual_finish' => 'Actual Finish',
			'actual_duration' => 'Actual Duration',
			'percent_complete' => 'Percent Complete',
			'campaign_id' => 'Campaign ID',
			'campaign_step_id' => 'Campaign Step ID',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Task::find();
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
		$this->addCondition($query, 'entity_id');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'task_picklist_id');
		$this->addCondition($query, 'priority', true);
		$this->addCondition($query, 'start');
		$this->addCondition($query, 'finish');
		$this->addCondition($query, 'duration');
		$this->addCondition($query, 'is_done');
		$this->addCondition($query, 'tags', true);
		$this->addCondition($query, 'assigned_to_entity_id');
		$this->addCondition($query, 'supervisor_entity_id');
		$this->addCondition($query, 'customer_entity_id');
		$this->addCondition($query, 'supplier_entity_id');
		$this->addCondition($query, 'person_task_picklist_id');
		$this->addCondition($query, 'project_id');
		$this->addCondition($query, 'location', true);
		$this->addCondition($query, 'project_status_picklist_id');
		$this->addCondition($query, 'code_id');
		$this->addCondition($query, 'late_start');
		$this->addCondition($query, 'late_finish');
		$this->addCondition($query, 'float');
		$this->addCondition($query, 'actual_start');
		$this->addCondition($query, 'actual_finish');
		$this->addCondition($query, 'actual_duration');
		$this->addCondition($query, 'percent_complete');
		$this->addCondition($query, 'campaign_id');
		$this->addCondition($query, 'campaign_step_id');
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
