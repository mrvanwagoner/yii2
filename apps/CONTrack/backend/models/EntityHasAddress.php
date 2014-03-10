<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_has_address".
 *
 * @property string $id
 * @property string $entity_id
 * @property string $address_id
 * @property integer $is_default
 *
 * @property Address $address
 * @property Entity $entity
 */
class EntityHasAddress extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_has_address';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'entity_id', 'address_id'], 'required'],
			[['id', 'entity_id', 'address_id', 'is_default'], 'integer'],
			[['entity_id', 'address_id'], 'unique', 'targetAttribute' => ['entity_id', 'address_id'], 'message' => 'The combination of Entity ID and Address ID has already been taken.']
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
			'address_id' => 'Address ID',
			'is_default' => 'Is Default',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAddress()
	{
		return $this->hasOne(Address::className(), ['id' => 'address_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'entity_id']);
	}
}
