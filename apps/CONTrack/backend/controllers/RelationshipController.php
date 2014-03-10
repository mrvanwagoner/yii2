<?php

namespace backend\controllers;

use Yii;
use backend\models\Relationship;
use backend\models\search\RelationshipSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\VerbFilter;

/**
 * RelationshipController implements the CRUD actions for Relationship model.
 */
class RelationshipController extends Controller
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
	 * Lists all Relationship models.
	 * @return mixed
	 */
	public function actionIndex()
	{
		$searchModel = new RelationshipSearch;
		$dataProvider = $searchModel->search(Yii::$app->request->getQueryParams());

		return $this->render('index', [
			'dataProvider' => $dataProvider,
			'searchModel' => $searchModel,
		]);
	}

	/**
	 * Displays a single Relationship model.
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
	 * Creates a new Relationship model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * @return mixed
	 */
	public function actionCreate()
	{
		$model = new Relationship;

		if ($model->load(Yii::$app->request->post()) && $model->save()) {
			return $this->redirect(['view', 'id' => $model->id]);
		} else {
			return $this->render('create', [
				'model' => $model,
			]);
		}
	}

	/**
	 * Updates an existing Relationship model.
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
	 * Deletes an existing Relationship model.
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
	 * Finds the Relationship model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * @param string $id
	 * @return Relationship the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id)
	{
		if ($id !== null && ($model = Relationship::find($id)) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException('The requested page does not exist.');
		}
	}
}
