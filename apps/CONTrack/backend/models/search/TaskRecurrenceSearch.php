<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TaskRecurrence;

/**
 * TaskRecurrenceSearch represents the model behind the search form about `\backend\models\TaskRecurrence`.
 */
class TaskRecurrenceSearch extends Model
{
	public $id;
	public $is_active;
	public $task_id;
	public $campaign_id;
	public $schedule_picklist_id;
	public $project_term_picklist_id;
	public $frequency;
	public $week_period_picklist_id;
	public $sun;
	public $mon;
	public $tue;
	public $wed;
	public $thu;
	public $fri;
	public $sat;
	public $target_picklist_id;
	public $1;
	public $2;
	public $3;
	public $4;
	public $5;
	public $6;
	public $7;
	public $8;
	public $9;
	public $10;
	public $11;
	public $12;
	public $13;
	public $14;
	public $15;
	public $16;
	public $17;
	public $18;
	public $19;
	public $20;
	public $21;
	public $22;
	public $23;
	public $24;
	public $25;
	public $26;
	public $27;
	public $28;
	public $29;
	public $30;
	public $31;
	public $month_period_picklist_id;
	public $jan;
	public $feb;
	public $mar;
	public $apr;
	public $may;
	public $jun;
	public $jul;
	public $aug;
	public $sep;
	public $oct;
	public $nov;
	public $dec;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'task_id', 'campaign_id', 'schedule_picklist_id', 'project_term_picklist_id', 'frequency', 'week_period_picklist_id', 'sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'target_picklist_id', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', 'month_period_picklist_id', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['note', 'create_time', 'update_time'], 'safe'],
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
			'campaign_id' => 'Campaign ID',
			'schedule_picklist_id' => 'Schedule Picklist ID',
			'project_term_picklist_id' => 'Project Term Picklist ID',
			'frequency' => 'Frequency',
			'week_period_picklist_id' => 'Week Period Picklist ID',
			'sun' => 'Sun',
			'mon' => 'Mon',
			'tue' => 'Tue',
			'wed' => 'Wed',
			'thu' => 'Thu',
			'fri' => 'Fri',
			'sat' => 'Sat',
			'target_picklist_id' => 'Target Picklist ID',
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'4' => '4',
			'5' => '5',
			'6' => '6',
			'7' => '7',
			'8' => '8',
			'9' => '9',
			'10' => '10',
			'11' => '11',
			'12' => '12',
			'13' => '13',
			'14' => '14',
			'15' => '15',
			'16' => '16',
			'17' => '17',
			'18' => '18',
			'19' => '19',
			'20' => '20',
			'21' => '21',
			'22' => '22',
			'23' => '23',
			'24' => '24',
			'25' => '25',
			'26' => '26',
			'27' => '27',
			'28' => '28',
			'29' => '29',
			'30' => '30',
			'31' => '31',
			'month_period_picklist_id' => 'Month Period Picklist ID',
			'jan' => 'Jan',
			'feb' => 'Feb',
			'mar' => 'Mar',
			'apr' => 'Apr',
			'may' => 'May',
			'jun' => 'Jun',
			'jul' => 'Jul',
			'aug' => 'Aug',
			'sep' => 'Sep',
			'oct' => 'Oct',
			'nov' => 'Nov',
			'dec' => 'Dec',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = TaskRecurrence::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query,
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}

		$this->addCondition($query, 'id');
		$this->addCondition($query, 'is_active');
		$this->addCondition($query, 'task_id');
		$this->addCondition($query, 'campaign_id');
		$this->addCondition($query, 'schedule_picklist_id');
		$this->addCondition($query, 'project_term_picklist_id');
		$this->addCondition($query, 'frequency');
		$this->addCondition($query, 'week_period_picklist_id');
		$this->addCondition($query, 'sun');
		$this->addCondition($query, 'mon');
		$this->addCondition($query, 'tue');
		$this->addCondition($query, 'wed');
		$this->addCondition($query, 'thu');
		$this->addCondition($query, 'fri');
		$this->addCondition($query, 'sat');
		$this->addCondition($query, 'target_picklist_id');
		$this->addCondition($query, '1');
		$this->addCondition($query, '2');
		$this->addCondition($query, '3');
		$this->addCondition($query, '4');
		$this->addCondition($query, '5');
		$this->addCondition($query, '6');
		$this->addCondition($query, '7');
		$this->addCondition($query, '8');
		$this->addCondition($query, '9');
		$this->addCondition($query, '10');
		$this->addCondition($query, '11');
		$this->addCondition($query, '12');
		$this->addCondition($query, '13');
		$this->addCondition($query, '14');
		$this->addCondition($query, '15');
		$this->addCondition($query, '16');
		$this->addCondition($query, '17');
		$this->addCondition($query, '18');
		$this->addCondition($query, '19');
		$this->addCondition($query, '20');
		$this->addCondition($query, '21');
		$this->addCondition($query, '22');
		$this->addCondition($query, '23');
		$this->addCondition($query, '24');
		$this->addCondition($query, '25');
		$this->addCondition($query, '26');
		$this->addCondition($query, '27');
		$this->addCondition($query, '28');
		$this->addCondition($query, '29');
		$this->addCondition($query, '30');
		$this->addCondition($query, '31');
		$this->addCondition($query, 'month_period_picklist_id');
		$this->addCondition($query, 'jan');
		$this->addCondition($query, 'feb');
		$this->addCondition($query, 'mar');
		$this->addCondition($query, 'apr');
		$this->addCondition($query, 'may');
		$this->addCondition($query, 'jun');
		$this->addCondition($query, 'jul');
		$this->addCondition($query, 'aug');
		$this->addCondition($query, 'sep');
		$this->addCondition($query, 'oct');
		$this->addCondition($query, 'nov');
		$this->addCondition($query, 'dec');
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
