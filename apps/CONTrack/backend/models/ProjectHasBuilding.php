<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_project_has_building".
 *
 * @property string $id
 * @property string $project_id
 * @property string $bulding_id
 * @property string $quantity
 *
 * @property Building $bulding
 * @property Project $project
 */
class ProjectHasBuilding extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_project_has_building';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'project_id', 'bulding_id'], 'required'],
			[['id', 'project_id', 'bulding_id', 'quantity'], 'integer'],
			[['project_id', 'bulding_id'], 'unique', 'targetAttribute' => ['project_id', 'bulding_id'], 'message' => 'The combination of Project ID and Bulding ID has already been taken.']
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
			'bulding_id' => 'Bulding ID',
			'quantity' => 'Quantity',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getBulding()
	{
		return $this->hasOne(Building::className(), ['id' => 'bulding_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'project_id']);
	}
}
