<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_has_url".
 *
 * @property string $id
 * @property string $entity_id
 * @property string $url_id
 *
 * @property Entity $entity
 * @property EntityUrl $url
 */
class EntityHasUrl extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_has_url';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'entity_id', 'url_id'], 'required'],
			[['id', 'entity_id', 'url_id'], 'integer'],
			[['entity_id', 'url_id'], 'unique', 'targetAttribute' => ['entity_id', 'url_id'], 'message' => 'The combination of Entity ID and Url ID has already been taken.']
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
			'url_id' => 'Url ID',
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
	public function getUrl()
	{
		return $this->hasOne(EntityUrl::className(), ['id' => 'url_id']);
	}
}
