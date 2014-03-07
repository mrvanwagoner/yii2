<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Relationship;

/**
 * RelationshipSearch represents the model behind the search form about `\backend\models\Relationship`.
 */
class RelationshipSearch extends Model
{
	public $id;
	public $is_active;
	public $entity_id;
	public $child_entity_id;
	public $type;
	public $division_entity_id;
	public $supervisor_entity_id;
	public $is_private;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'entity_id', 'child_entity_id', 'division_entity_id', 'supervisor_entity_id', 'is_private', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'note', 'create_time', 'update_time'], 'safe'],
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
			'entity_id' => 'Entity ID',
			'child_entity_id' => 'Child Entity ID',
			'type' => 'Type',
			'division_entity_id' => 'Division Entity ID',
			'supervisor_entity_id' => 'Supervisor Entity ID',
			'is_private' => 'Is Private',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Relationship::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'entity_id');
		$this->addCondition($query, 'child_entity_id');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'division_entity_id');
		$this->addCondition($query, 'supervisor_entity_id');
		$this->addCondition($query, 'is_private');
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
