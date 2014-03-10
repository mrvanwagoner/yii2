<?php

namespace backend\models;

/**
 * This is the model class for table "tbl_contact_log".
 *
 * @property string $id
 * @property integer $is_active
 * @property string $contact_id
 * @property string $contacted_by_entity_id
 * @property string $contact_method_person_task_picklist_id
 * @property string $date_contact
 * @property string $comment
 * @property string $date_to_follow_up
 * @property string $date_entered
 * @property string $referred_by
 * @property string $ref_to_service_rep
 * @property integer $is_initial_contact
 * @property integer $is_questionnaire_completed
 * @property integer $is_status_completed
 * @property integer $is_interested_in_one_close
 * @property integer $is_interested_in_two_close
 * @property integer $is_interested_in_spec
 * @property integer $is_interested_in_kiosk
 * @property integer $is_interested_in_mez
 * @property string $note
 * @property string $create_time
 * @property string $created_by_entity_id
 * @property string $update_time
 * @property string $updated_by_entity_id
 *
 * @property Contact $contact
 * @property Entity $contactedByEntity
 * @property Picklist $contactMethodPersonTaskPicklist
 * @property Entity $createdByEntity
 * @property Entity $updatedByEntity
 */
class ContactLog extends \yii\db\ActiveRecord
{
	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'tbl_contact_log';
	}

	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['is_active', 'contact_id', 'contacted_by_entity_id', 'contact_method_person_task_picklist_id', 'is_initial_contact', 'is_questionnaire_completed', 'is_status_completed', 'is_interested_in_one_close', 'is_interested_in_two_close', 'is_interested_in_spec', 'is_interested_in_kiosk', 'is_interested_in_mez', 'created_by_entity_id', 'updated_by_entity_id'], 'integer'],
			[['contact_id', 'create_time', 'update_time'], 'required'],
			[['date_contact', 'date_to_follow_up', 'date_entered', 'create_time', 'update_time'], 'safe'],
			[['note'], 'string'],
			[['comment', 'referred_by', 'ref_to_service_rep'], 'string', 'max' => 255]
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
			'contacted_by_entity_id' => 'Contacted By Entity ID',
			'contact_method_person_task_picklist_id' => 'Contact Method Person Task Picklist ID',
			'date_contact' => 'Date Contact',
			'comment' => 'Comment',
			'date_to_follow_up' => 'Date To Follow Up',
			'date_entered' => 'Date Entered',
			'referred_by' => 'Referred By',
			'ref_to_service_rep' => 'Ref To Service Rep',
			'is_initial_contact' => 'Is Initial Contact',
			'is_questionnaire_completed' => 'Is Questionnaire Completed',
			'is_status_completed' => 'Is Status Completed',
			'is_interested_in_one_close' => 'Is Interested In One Close',
			'is_interested_in_two_close' => 'Is Interested In Two Close',
			'is_interested_in_spec' => 'Is Interested In Spec',
			'is_interested_in_kiosk' => 'Is Interested In Kiosk',
			'is_interested_in_mez' => 'Is Interested In Mez',
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
	public function getContactedByEntity()
	{
		return $this->hasOne(Entity::className(), ['id' => 'contacted_by_entity_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getContactMethodPersonTaskPicklist()
	{
		return $this->hasOne(Picklist::className(), ['id' => 'contact_method_person_task_picklist_id']);
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
