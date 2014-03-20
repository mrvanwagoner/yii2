<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/07/14

/**
 * This is the model class for table "tbl_document".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $type
 * @property string $document_number
 * @property string $date_document
 * @property string $description
 * @property string $document_picklist_id
 * @property integer $is_file
 * @property string $date_received
 * @property string $file_name
 * @property string $file_content_type
 * @property integer $file_size
 * @property string $file_update_time
 * @property integer $is_email
 * @property integer $is_mail_merge
 * @property integer $is_deliverable
 * @property string $subject
 * @property string $body
 * @property integer $is_provided
 * @property integer $is_reviewed
 * @property integer $is_endorsed
 * @property integer $is_conforming
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property ContactHasDocument[] $contactHasDocuments
 * @property Entity $createdByEntity
 * @property Picklist $documentPicklist
 * @property Entity $tenant
 * @property Entity $updatedByEntity
 * @property Entity[] $entities
 * @property TaskHasDocument[] $taskHasDocuments
 */
class Document extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */

  // public $document_type;//CHANGED MVW 0308/14: Use for hidden field and typeahead combobox

	public static function tableName()
	{
		return 'tbl_document';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'document_picklist_id', 'is_file', 'file_size', 'is_email', 'is_mail_merge', 'is_deliverable', 'is_provided', 'is_reviewed', 'is_endorsed', 'is_conforming', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type', 'body', 'note'], 'string'],
			[['date_document', 'date_received', 'file_update_time', 'create_time', 'update_time'], 'safe'],
			[['create_time', 'update_time'], 'required'],
			[['tenant_dbu'], 'string', 'max' => 16],
			[['document_number', 'description', 'file_name', 'file_content_type', 'subject'], 'string', 'max' => 255],
      [['file_name'], 'file', 'types' => 'jpg, gif, png'],//CHANGED MVW 03/07/14 Added.
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'is_active' => 'Active?',
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant DBU',
			'type' => 'Type',
			'document_number' => 'Document Number',
			'date_document' => 'Date Document',
			'description' => 'Description',
			'document_picklist_id' => 'Document Type',
			'is_file' => 'Is Document a File?',
			'date_received' => 'Date Received',
			'file_name' => 'File Name',
			'file_content_type' => 'File Content Type',
			'file_size' => 'File Size',
			'file_update_time' => 'File Update Time',
			'is_email' => 'Is Email?',
			'is_mail_merge' => 'Is Mail Merge Document?',
			'is_deliverable' => 'Is Deliverable Document?',
			'subject' => 'Subject',
			'body' => 'Body',
			'is_provided' => 'Has Document Been Provided?',
			'is_reviewed' => 'Has Document Been Reviewed?',
			'is_endorsed' => 'Has Document Been Property Endorsed?',
			'is_conforming' => 'Is Document Conforming?',
			'note' => 'Note',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactHasDocuments()
	{
		return $this->hasMany(ContactHasDocument::className(), ['document_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCreatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'created_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDocumentPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'document_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTenant()
	{
		return $this->hasOne(Entity::className(), ['id' => 'tenant_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntities()
	{
		return $this->hasMany(Entity::className(), ['logo_document_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getTaskHasDocuments()
	{
		return $this->hasMany(TaskHasDocument::className(), ['document_id' => 'id']);
	}

  public static function listActiveDocuments() //CHANGED MVW 03/20/14
  {
    $query = Document::find()->where(['is_active'=>1])->all();
    return ArrayHelper::map($query , 'id', 'description');
  }

  public static function listFileDocuments() //CHANGED MVW 03/07/14 //FIXME Update tbl_documents.is_file=>1
  {
    $query = Document::find()->where(['is_active'=>1, 'is_file'=>1])->all();
    return ArrayHelper::map($query , 'id', 'description');
  }

  //CHANGED MVW 03/08/14: To allow for typeahead in dropdown lists
  // public function getPicklistId()
  // {
  //   
  // }

  //CHANGED MVW 03/08/14: Use to populate hidden fields //FIXME create typeahead combobox for things like Document Type
  // public function beforeSave()
  // {
  //   $this->document_picklist_id = new CDbExpression('NOW()');
  //   $this->timesheet_timein = new CDbExpression('NOW()');
  //   return parent::beforeSave();   
  // }
}