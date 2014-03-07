<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_entity_has_type".
 *
 * @property string $id
 * @property string $entity_id
 * @property string $type_picklist_id
 *
 * @property Entity $entity
 * @property Picklist $typePicklist
 */
class EntityHasType extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_has_type';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'entity_id', 'type_picklist_id'], 'required'],
			[['id', 'entity_id', 'type_picklist_id'], 'integer'],
			[['entity_id', 'type_picklist_id'], 'unique', 'targetAttribute' => ['entity_id', 'type_picklist_id'], 'message' => 'The combination of Entity ID and Type Picklist ID has already been taken.']
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
			'type_picklist_id' => 'Type Picklist ID',
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
	public function getTypePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'type_picklist_id']);
	}
}
