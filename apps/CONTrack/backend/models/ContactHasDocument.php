<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_contact_has_document".
 *
 * @property string $id
 * @property string $contact_id
 * @property string $document_id
 *
 * @property Contact $contact
 * @property Document $document
 */
class ContactHasDocument extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_contact_has_document';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['contact_id', 'document_id'], 'required'],
			[['contact_id', 'document_id'], 'integer']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'contact_id' => 'Contact ID',
			'document_id' => 'Document ID',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContact()
	{
		return $this->hasOne(Contact::className(), ['id' => 'contact_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDocument()
	{
		return $this->hasOne(Document::className(), ['id' => 'document_id']);
	}
}
