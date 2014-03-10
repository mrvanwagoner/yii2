<?php
/* 
  Custom code
*/
namespace common\components;

use yii\base\Component;

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
    return $values;
  }
  
  // CHANGED MVW 03/06/14: create picklist of Tenant types.
  public static function picklist($attribute)//FIXME Dyanmic picklist based on field name
  {
    // $column = 'is_'&&$is;
    // $column = 'is_tenant';
    // $picklist = \backend\models\Picklist::find()
    //     ->where([
    //       'is_active' => 1,
    //       'type' => $type,
    //       $column => 1,
    //       ])
    //     // ->orderBy('id')
    //     ->all();
    // return ArrayHelper::map([720,'Contractor'],'id', 'description');
    // 
    // $query = (new \yii\db\Query())
    //   ->select('id, description')
    //   ->from('tbl_picklist')
    //   ->where([
    //     'is_active' => 1,
    //     'type' => 'Type',
    //     'is_tenant' => 1,
    //     ])
    //   ->orderBy('description')
    //   ->all();
    // 
    // return ArrayHelper::map($query, 'id', 'description');
    // return ArrayHelper::map(Picklist::find()->where(['is_active'=>1,'type'=>'Type', 'is_tenant'=>1])->all(), 'id', 'description' );//CHANGED This works too
  }


}