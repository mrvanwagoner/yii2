<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_has_email".
 *
 * @property string $id
 * @property string $entity_id
 * @property string $email_id
 *
 * @property EntityEmail $email
 * @property Entity $entity
 */
class EntityHasEmail extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_has_email';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'entity_id', 'email_id'], 'required'],
			[['id', 'entity_id', 'email_id'], 'integer'],
			[['entity_id', 'email_id'], 'unique', 'targetAttribute' => ['entity_id', 'email_id'], 'message' => 'The combination of Entity ID and Email ID has already been taken.']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'entity_id' => 'Entity ID',
			'email_id' => 'Email ID',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEmail()
	{
		return $this->hasOne(EntityEmail::className(), ['id' => 'email_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
	}
}
