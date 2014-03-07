<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Correspondence;

/**
 * CorrespondenceSearch represents the model behind the search form about `\backend\models\Correspondence`.
 */
class CorrespondenceSearch extends Model
{
	public $id;
	public $is_active;
	public $task_id;
	public $type;
	public $from_entity_id;
	public $to_entities;
	public $cc_entities;
	public $bcc_entities;
	public $subject;
	public $body;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'task_id', 'from_entity_id', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'to_entities', 'cc_entities', 'bcc_entities', 'subject', 'body', 'note', 'create_time', 'update_time'], 'safe'],
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
			'type' => 'Type',
			'from_entity_id' => 'From Entity ID',
			'to_entities' => 'To Entities',
			'cc_entities' => 'Cc Entities',
			'bcc_entities' => 'Bcc Entities',
			'subject' => 'Subject',
			'body' => 'Body',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Correspondence::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'task_id');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'from_entity_id');
		$this->addCondition($query, 'to_entities', true);
		$this->addCondition($query, 'cc_entities', true);
		$this->addCondition($query, 'bcc_entities', true);
		$this->addCondition($query, 'subject', true);
		$this->addCondition($query, 'body', true);
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
