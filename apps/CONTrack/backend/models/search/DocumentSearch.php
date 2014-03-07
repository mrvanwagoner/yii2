<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Document;

/**
 * DocumentSearch represents the model behind the search form about `\backend\models\Document`.
 */
class DocumentSearch extends Model
{
	public $id;
	public $is_active;
	public $tenant_id;
	public $tenant_dbu;
	public $type;
	public $document_number;
	public $date_document;
	public $description;
	public $document_picklist_id;
	public $is_file;
	public $date_received;
	public $file_name;
	public $file_content_type;
	public $file_size;
	public $file_update_time;
	public $is_email;
	public $is_mail_merge;
	public $is_deliverable;
	public $subject;
	public $body;
	public $is_provided;
	public $is_reviewed;
	public $is_endorsed;
	public $is_conforming;
	public $note;
	public $create_time;
	public $created_by_entity_id;
	public $update_time;
	public $updated_by_entity_id;

	public function rules()
	{
		return [
			[['id', 'is_active', 'tenant_id', 'document_picklist_id', 'is_file', 'file_size', 'is_email', 'is_mail_merge', 'is_deliverable', 'is_provided', 'is_reviewed', 'is_endorsed', 'is_conforming', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_dbu', 'type', 'document_number', 'date_document', 'description', 'date_received', 'file_name', 'file_content_type', 'file_update_time', 'subject', 'body', 'note', 'create_time', 'update_time'], 'safe'],
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
			'type' => 'Type',
			'document_number' => 'Document Number',
			'date_document' => 'Date Document',
			'description' => 'Description',
			'document_picklist_id' => 'Document Picklist ID',
			'is_file' => 'Is File',
			'date_received' => 'Date Received',
			'file_name' => 'File Name',
			'file_content_type' => 'File Content Type',
			'file_size' => 'File Size',
			'file_update_time' => 'File Update Time',
			'is_email' => 'Is Email',
			'is_mail_merge' => 'Is Mail Merge',
			'is_deliverable' => 'Is Deliverable',
			'subject' => 'Subject',
			'body' => 'Body',
			'is_provided' => 'Is Provided',
			'is_reviewed' => 'Is Reviewed',
			'is_endorsed' => 'Is Endorsed',
			'is_conforming' => 'Is Conforming',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	public function search($params)
	{
		$query = Document::find();
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
		$this->addCondition($query, 'type', true);
		$this->addCondition($query, 'document_number', true);
		$this->addCondition($query, 'date_document');
		$this->addCondition($query, 'description', true);
		$this->addCondition($query, 'document_picklist_id');
		$this->addCondition($query, 'is_file');
		$this->addCondition($query, 'date_received');
		$this->addCondition($query, 'file_name', true);
		$this->addCondition($query, 'file_content_type', true);
		$this->addCondition($query, 'file_size');
		$this->addCondition($query, 'file_update_time');
		$this->addCondition($query, 'is_email');
		$this->addCondition($query, 'is_mail_merge');
		$this->addCondition($query, 'is_deliverable');
		$this->addCondition($query, 'subject', true);
		$this->addCondition($query, 'body', true);
		$this->addCondition($query, 'is_provided');
		$this->addCondition($query, 'is_reviewed');
		$this->addCondition($query, 'is_endorsed');
		$this->addCondition($query, 'is_conforming');
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
