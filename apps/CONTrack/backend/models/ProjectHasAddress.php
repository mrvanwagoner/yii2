<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_project_has_address".
 *
 * @property string $id
 * @property string $project_id
 * @property string $address_id
 * @property integer $is_default
 *
 * @property Address $address
 * @property Project $project
 */
class ProjectHasAddress extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_project_has_address';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'project_id', 'address_id'], 'required'],
			[['id', 'project_id', 'address_id', 'is_default'], 'integer'],
			[['project_id', 'address_id', 'is_default'], 'unique', 'targetAttribute' => ['project_id', 'address_id', 'is_default'], 'message' => 'The combination of Project ID, Address ID and Is Default has already been taken.']
		];
	}

	/**
	 * @inheritdoc
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'project_id' => 'Project ID',
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
	public function getProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'project_id']);
	}
}
