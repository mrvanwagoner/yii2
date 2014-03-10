<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_contact_access".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $contact_id
 * @property string $access_picklist_id
 * @property integer $is_enabled
 * @property string $username
 * @property string $password
 * @property string $last_login_time
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Picklist $accessPicklist
 * @property Contact $contact
 * @property Entity $createdByEntity
 * @property Entity $updatedByEntity
 */
class ContactAccess extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_contact_access';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'contact_id', 'access_picklist_id', 'is_enabled', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['contact_id', 'access_picklist_id', 'username'], 'required'],
			[['last_login_time', 'create_time', 'update_time'], 'safe'],
			[['username', 'password'], 'string', 'max' => 255]
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
			'access_picklist_id' => 'Access Picklist ID',
			'is_enabled' => 'Is Enabled',
			'username' => 'Username',
			'password' => 'Password',
			'last_login_time' => 'Last Login Time',
			'create_time' => 'Create Time',
			'created_by_entity_id' => 'Created By Entity ID',
			'update_time' => 'Update Time',
			'updated_by_entity_id' => 'Updated By Entity ID',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getAccessPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'access_picklist_id']);
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
	public function getUpdatedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'updated_by_entity_id']);
	}
}
