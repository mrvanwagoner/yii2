<?php

namespace backend\models;

use yii\helpers\ArrayHelper; //CHANGED MVW 03/08/14

/**
 * This is the model class for table "tbl_entity_phone".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $type
 * @property string $prefix
 * @property string $phone
 * @property string $extension
 * @property integer $is_text
 * @property string $phone_carrier
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Contact[] $contacts
 * @property EntityHasPhone[] $entityHasPhones
 * @property Entity $createdByEntity
 * @property Entity $updatedByEntity
 */
class Phone extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_entity_phone';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'is_text', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['type'], 'string'],
			[['create_time', 'update_time'], 'safe'],
			[['prefix', 'phone', 'extension'], 'string', 'max' => 10],
			[['phone_carrier'], 'string', 'max' => 255]
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
			'prefix' => 'Prefix',
			'phone' => 'Phone',
			'extension' => 'Extension',
			'is_text' => 'Is Text',
			'phone_carrier' => 'Phone Carrier',
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
		return $this->hasMany(Contact::className(), ['phone_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getEntityHasPhones()
	{
		return $this->hasMany(EntityHasPhone::className(), ['phone_id' => 'id']);
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

  public static function listActivePhones() //CHANGED MVW 03/20/14
  {
    $query = Phone::find()->where(['is_active'=>1])->all();//FIXME , 'type' => !'Mobile' || !'Fax'
    return ArrayHelper::map($query , 'id', 'phone');
  }

  public static function listActiveMobiles() //CHANGED MVW 03/20/14
  {
    $query = Phone::find()->where(['is_active'=>1])->all();// FIXME If a phone is either or it wont' show. , 'type' => 'Mobile'
    return ArrayHelper::map($query , 'id', 'phone');
  }

  public static function listActiveFaxes() //CHANGED MVW 03/20/14
  {
    $query = Phone::find()->where(['is_active'=>1])->all();// FIXME If a phone is either or it wont' show. , 'type' => 'Fax'
    return ArrayHelper::map($query , 'id', 'phone');
  }
}
