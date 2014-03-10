<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProjectTeam;

/**
 * ProjectTeamSearch represents the model behind the search form about `\backend\models\ProjectTeam`.
 */
class ProjectTeamSearch extends Model
{
	public $id;
	public $is_active;
	public $project_id;
	public $entity_id;
	public $type_picklist_id;
	public $is_client;
	public $is_partner;
	public $is_sales_rep;
	public $is_schedule_visible;
	public $service_status;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'project_id', 'entity_id', 'type_picklist_id', 'is_client', 'is_partner', 'is_sales_rep', 'is_schedule_visible', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['service_status', 'note', 'create_time', 'update_time'], 'safe'],
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
			'project_id' => 'Project ID',
			'entity_id' => 'Entity ID',
			'type_picklist_id' => 'Type Picklist ID',
			'is_client' => 'Is Client',
			'is_partner' => 'Is Partner',
			'is_sales_rep' => 'Is Sales Rep',
			'is_schedule_visible' => 'Is Schedule Visible',
			'service_status' => 'Service Status',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = ProjectTeam::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'project_id');
		$this->addCondition($query, 'entity_id');
		$this->addCondition($query, 'type_picklist_id');
		$this->addCondition($query, 'is_client');
		$this->addCondition($query, 'is_partner');
		$this->addCondition($query, 'is_sales_rep');
		$this->addCondition($query, 'is_schedule_visible');
		$this->addCondition($query, 'service_status', true);
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
