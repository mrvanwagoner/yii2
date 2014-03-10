<?php

namespace backend\controllers;

use Yii;
use backend\models\Document;
use backend\models\search\DocumentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\VerbFilter;
use yii\web\UploadedFile; //CHANGED MVW 03/07/14

/**
 * DocumentController implements the CRUD actions for Document model.
 */
class DocumentController extends Controller
{
	public function behaviors()
	{
		return [
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'delete' => ['post'],
				],
			],
		];
	}

	/**
	 * Lists all Document models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new DocumentSearch;
		$dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

		return $this->render('index', [
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
		]);
	}

	/**
	 * Displays a single Document model.
	 * @param string $id
	 * @return mixed
	 */
	public function actionView($id)
	{
		return $this->render('view', [
			'model' => $this->findModel($id),
		]);
	}

	/**
	 * Creates a new Document model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Document;

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Document model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param string $id
	 * @return mixed
	 */
	public function actionUpdate($id)
	{
		$model = $this->findModel($id);

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('update', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Deletes an existing Document model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * @param string $id
	 * @return mixed
	 */
	public function actionDelete($id)
	{
		$this->findModel($id)->delete();
		return $this->redirect(['index']);
	}

	/**
	 * Finds the Document model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param string $id
	 * @return Document the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if ($id !== null && ($model = Document::find($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}

  //CHANGED MVW 03/07/14: See http://www.yiiframework.com/forum/index.php/topic/51243-imagefile-upload-in-yii2/ and http://www.yiiframework.com/wiki/2/how-to-upload-a-file-using-a-model/
  public function actionUpload()
  {
    $model = new Document;
    if (!empty($_POST)) 
    {
      // $model->file_name = $_POST['Demo']['image'];
      $model->attributes = $_POST['Item'];
      $file = UploadedFile::getInstance($model, 'file_name');
      var_dump($file);
      // You can then do the following
      if ($model->save())
      {
        $file->saveAs('/Users/Marty/Sites/Yii2/apps/CONTrack/data');//FIXME Create folder based on Tenant
      }
      // It's better if you relegate such a code to your model class
    }
    return $this->render('upload', ['model'=>$model]);
  }
}
