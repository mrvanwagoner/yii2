<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_has_phone".
 *
 * @property string $id
 * @property string $entity_id
 * @property string $phone_id
 *
 * @property Entity $entity
 * @property EntityPhone $phone
 */
class EntityHasPhone extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_has_phone';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'entity_id', 'phone_id'], 'required'],
			[['id', 'entity_id', 'phone_id'], 'integer'],
			[['entity_id', 'phone_id'], 'unique', 'targetAttribute' => ['entity_id', 'phone_id'], 'message' => 'The combination of Entity ID and Phone ID has already been taken.']
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
			'phone_id' => 'Phone ID',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getPhone()
	{
		return $this->hasOne(EntityPhone::className(), ['id' => 'phone_id']);
	}
}
