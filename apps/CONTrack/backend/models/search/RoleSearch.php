<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Role;

/**
 * RoleSearch represents the model behind the search form about `\backend\models\Role`.
 */
class RoleSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $contact_id;
	public $role_type_picklist_id;
	public $description;
	public $is_enabled;
	public $last_login_time;
	public $x_login_time_out;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'contact_id', 'role_type_picklist_id', 'is_enabled', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'description', 'last_login_time', 'x_login_time_out', 'note', 'create_time', 'update_time'], 'safe'],
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
			'contact_id' => 'Contact ID',
			'role_type_picklist_id' => 'Role Type Picklist ID',
			'description' => 'Description',
			'is_enabled' => 'Is Enabled',
			'last_login_time' => 'Last Login Time',
			'x_login_time_out' => 'X Login Time Out',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Role::find();
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
		$this->addCondition($query, 'contact_id');
		$this->addCondition($query, 'role_type_picklist_id');
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'is_enabled');
		$this->addCondition($query, 'last_login_time');
		$this->addCondition($query, 'x_login_time_out');
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
