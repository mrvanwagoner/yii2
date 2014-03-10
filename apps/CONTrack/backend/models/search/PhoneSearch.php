<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Phone;

/**
 * PhoneSearch represents the model behind the search form about `\backend\models\Phone`.
 */
class PhoneSearch extends Model
{
	public $id;
	public $is_active;
	public $type;
	public $prefix;
	public $phone;
	public $extension;
	public $is_text;
	public $phone_carrier;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'is_text', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'prefix', 'phone', 'extension', 'phone_carrier', 'create_time', 'update_time'], 'safe'],
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
			'type' => 'Type',
			'prefix' => 'Prefix',
			'phone' => 'Phone',
			'extension' => 'Extension',
			'is_text' => 'Is Text',
			'phone_carrier' => 'Phone Carrier',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Phone::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'prefix', true);
		$this->addCondition($query, 'phone', true);
		$this->addCondition($query, 'extension', true);
		$this->addCondition($query, 'is_text');
		$this->addCondition($query, 'phone_carrier', true);
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
