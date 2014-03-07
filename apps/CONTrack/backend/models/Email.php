<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_email".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $type
 * @property string $description
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Contact[] $contacts
 * @property Entity $createdByEntity
 * @property Entity $updatedByEntity
 * @property EntityHasEmail[] $entityHasEmails
 */
class Email extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_email';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['description'], 'string', 'max' => 255]
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
			'description' => 'Description',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContacts()
	{
		return $this->hasMany(Contact::className(), ['email_id' => 'id']);
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
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasEmails()
	{
		return $this->hasMany(EntityHasEmail::className(), ['email_id' => 'id']);
	}
}
