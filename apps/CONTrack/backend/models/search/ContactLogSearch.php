<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ContactLog;

/**
 * ContactLogSearch represents the model behind the search form about `\backend\models\ContactLog`.
 */
class ContactLogSearch extends Model
{
	public $id;
	public $is_active;
	public $contact_id;
	public $contacted_by_entity_id;
	public $contact_method_person_task_picklist_id;
	public $date_contact;
	public $comment;
	public $date_to_follow_up;
	public $date_entered;
	public $referred_by;
	public $ref_to_service_rep;
	public $is_initial_contact;
	public $is_questionnaire_completed;
	public $is_status_completed;
	public $is_interested_in_one_close;
	public $is_interested_in_two_close;
	public $is_interested_in_spec;
	public $is_interested_in_kiosk;
	public $is_interested_in_mez;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'contact_id', 'contacted_by_entity_id', 'contact_method_person_task_picklist_id', 'is_initial_contact', 'is_questionnaire_completed', 'is_status_completed', 'is_interested_in_one_close', 'is_interested_in_two_close', 'is_interested_in_spec', 'is_interested_in_kiosk', 'is_interested_in_mez', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['date_contact', 'comment', 'date_to_follow_up', 'date_entered', 'referred_by', 'ref_to_service_rep', 'note', 'create_time', 'update_time'], 'safe'],
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
			'contact_id' => 'Contact ID',
			'contacted_by_entity_id' => 'Contacted By Entity ID',
			'contact_method_person_task_picklist_id' => 'Contact Method Person Task Picklist ID',
			'date_contact' => 'Date Contact',
			'comment' => 'Comment',
			'date_to_follow_up' => 'Date To Follow Up',
			'date_entered' => 'Date Entered',
			'referred_by' => 'Referred By',
			'ref_to_service_rep' => 'Ref To Service Rep',
			'is_initial_contact' => 'Is Initial Contact',
			'is_questionnaire_completed' => 'Is Questionnaire Completed',
			'is_status_completed' => 'Is Status Completed',
			'is_interested_in_one_close' => 'Is Interested In One Close',
			'is_interested_in_two_close' => 'Is Interested In Two Close',
			'is_interested_in_spec' => 'Is Interested In Spec',
			'is_interested_in_kiosk' => 'Is Interested In Kiosk',
			'is_interested_in_mez' => 'Is Interested In Mez',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = ContactLog::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'contact_id');
		$this->addCondition($query, 'contacted_by_entity_id');
		$this->addCondition($query, 'contact_method_person_task_picklist_id');
		$this->addCondition($query, 'date_contact');
		$this->addCondition($query, 'comment', true);
		$this->addCondition($query, 'date_to_follow_up');
		$this->addCondition($query, 'date_entered');
		$this->addCondition($query, 'referred_by', true);
		$this->addCondition($query, 'ref_to_service_rep', true);
		$this->addCondition($query, 'is_initial_contact');
		$this->addCondition($query, 'is_questionnaire_completed');
		$this->addCondition($query, 'is_status_completed');
		$this->addCondition($query, 'is_interested_in_one_close');
		$this->addCondition($query, 'is_interested_in_two_close');
		$this->addCondition($query, 'is_interested_in_spec');
		$this->addCondition($query, 'is_interested_in_kiosk');
		$this->addCondition($query, 'is_interested_in_mez');
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
