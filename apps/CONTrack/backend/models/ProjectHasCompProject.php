<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_project_has_comp_project".
 *
 * @property string $id
 * @property string $project_id
 * @property string $comp_project_id
 * @property integer $is_default
 *
 * @property Project $compProject
 * @property Project $project
 */
class ProjectHasCompProject extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_project_has_comp_project';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['id', 'project_id', 'comp_project_id'], 'required'],
			[['id', 'project_id', 'comp_project_id', 'is_default'], 'integer'],
			[['project_id', 'comp_project_id', 'is_default'], 'unique', 'targetAttribute' => ['project_id', 'comp_project_id', 'is_default'], 'message' => 'The combination of Project ID, Comp Project ID and Is Default has already been taken.']
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
			'comp_project_id' => 'Comp Project ID',
			'is_default' => 'Is Default',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCompProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'comp_project_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getProject()
	{
		return $this->hasOne(Project::className(), ['id' => 'project_id']);
	}
}
