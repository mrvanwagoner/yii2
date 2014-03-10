<?php
/* 
  Custom code
*/
namespace common\components;

use yii\base\Component;
use backend\models\Picklist;
use yii\helpers\ArrayHelper;

class Custom extends Component
{
/*  CHANGED MVW 03/06/14: This creates a dropdown list from enum values. 
  Modified to work with Yii2 from  http://www.yiiframework.com/wiki/303/drop-down-list-with-enum-values-for-column-of-type-enum-incorporate-into-giix/
  To use in ActiveForm: <?= $form->field($model, 'type')->dropDownList(Zhtml::enumItems($model, 'attribute_name')) ?>
*/
  public static function listEnum($model,$attribute)
  {
    $attr=$attribute;
//    self::resolveName($model,$attr); //No such method in Yii2 (?)
    preg_match('/\((.*)\)/',$model->tableSchema->columns[$attr]->dbType,$matches);
    foreach(explode("','", $matches[1]) as $value) 
    {
      $value = str_replace("'",null,$value);
      // $values[$value] = \Yii::t('enumItem',$value); // This doesn't work.
      $values[$value] = $value;
    }
    $values[] = null;//CHANGED MVW 03/08/14: Add null to array
    return $values;
  }
  
  // CHANGED MVW 03/06/14: create picklist of Tenant types.
  public static function picklist($type, $filter)
  {
    if ($filter) 
    {
      $query = Picklist::find()->where(['is_active'=>1, 'type'=>$type, $filter=>1])->all();
    }
    else
    {
      $query = Picklist::find()->where(['is_active'=>1, 'type'=>$type])->all();
    } 
    return ArrayHelper::map($query , 'id', 'description');
  }

  // CHANGED MVW 03/08/14: gets picklist.id of typeahead input. Modified from http://stackoverflow.com/questions/18084408/how-to-use-typeahead-js-with-a-large-database //FIXME Doesn't work. Get id of typeahead
  // public static function getSelectionId($table,$field)
  // {
  //   $query = $input.'%'; // add % for LIKE query later
  // 
  //   // $command = \yii\db\connection()->createCommand('SELECT id FROM tbl_documents WHERE description LIKE = :input');
  //   // $command->bindParam(':input', $query, PDO::PARAM_STR);
  //   // // $command->execute();
  //   // $results = $command->queryAll();
  //   // $results = [];
  //   // foreach ($stmt->fetchAll(PDO::FETCH_COLUMN) as $row) 
  //   // {
  //   //   $results[] = $row;
  //   // }
  // 
  //   $query = Picklist::find()->select('id')->where(['description'=> 'LIKE = :input'])->all();
  // 
  // 
  //   // return json_encode($results);
  //   return json_encode($query);
  // }

}