<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_contact_declaration".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $contact_id
 * @property string $declaration_picklist_id
 * @property string $description
 * @property integer $is_letter_on_file
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Contact $contact
 * @property Entity $createdByEntity
 * @property Picklist $declarationPicklist
 * @property Entity $updatedByEntity
 */
class ContactDeclaration extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_contact_declaration';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'contact_id', 'declaration_picklist_id', 'is_letter_on_file', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['contact_id'], 'required'],
			[['create_time', 'update_time'], 'safe'],
			[['description'], 'string', 'max' => 510]
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
			'declaration_picklist_id' => 'Declaration Picklist ID',
			'description' => 'Description',
			'is_letter_on_file' => 'Is Letter On File',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
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
	public function getCreatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'created_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getDeclarationPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'declaration_picklist_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
