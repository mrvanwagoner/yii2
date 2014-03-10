<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TaskPredecessor;

/**
 * TaskPredecessorSearch represents the model behind the search form about `\backend\models\TaskPredecessor`.
 */
class TaskPredecessorSearch extends Model
{
	public $id;
	public $is_active;
	public $task_id;
	public $predecessor_task_id;
	public $predecessor;
	public $restraint;
	public $lag;
	public $start_day;
	public $end_day;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'task_id', 'predecessor_task_id', 'lag', 'start_day', 'end_day', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['predecessor', 'restraint', 'create_time', 'update_time'], 'safe'],
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
			'task_id' => 'Task ID',
			'predecessor_task_id' => 'Predecessor Task ID',
			'predecessor' => 'Predecessor',
			'restraint' => 'Restraint',
			'lag' => 'Lag',
			'start_day' => 'Start Day',
			'end_day' => 'End Day',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = TaskPredecessor::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'task_id');
		$this->addCondition($query, 'predecessor_task_id');
		$this->addCondition($query, 'predecessor', true);
		$this->addCondition($query, 'restraint', true);
		$this->addCondition($query, 'lag');
		$this->addCondition($query, 'start_day');
		$this->addCondition($query, 'end_day');
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
