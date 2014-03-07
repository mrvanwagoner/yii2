<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_contact_role".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $tenant_id
 * @property string $tenant_dbu
 * @property string $contact_id
 * @property string $role_type_picklist_id
 * @property string $description
 * @property integer $is_enabled
 * @property string $last_login_time
 * @property string $x_login_time_out
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Contact $contact
 * @property Entity $createdByEntity
 * @property Entity $tenant
 * @property Picklist $roleTypePicklist
 * @property Entity $updatedByEntity
 * @property Entity[] $entities
 */
class Role extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_contact_role';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'tenant_id', 'contact_id', 'role_type_picklist_id', 'is_enabled', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['tenant_id', 'contact_id', 'role_type_picklist_id'], 'required'],
			[['last_login_time', 'x_login_time_out', 'create_time', 'update_time'], 'safe'],
			[['note'], 'string'],
			[['tenant_dbu'], 'string', 'max' => 16],
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
			'tenant_id' => 'Tenant ID',
			'tenant_dbu' => 'Tenant Dbu',
			'contact_id' => 'Contact ID',
			'role_type_picklist_id' => 'Role Type Picklist ID',
			'description' => 'Description',
			'is_enabled' => 'Is Enabled',
			'last_login_time' => 'Last Login Time',
			'x_login_time_out' => 'X Login Time Out',
			'note' => 'Note',
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
	public function getTenant()
	{
		return $this->hasOne(Entity::className(), ['id' => 'tenant_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getRoleTypePicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'role_type_picklist_id']);
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
	public function getEntities()
	{
		return $this->hasMany(Entity::className(), ['current_role_id' => 'id']);
	}
}
