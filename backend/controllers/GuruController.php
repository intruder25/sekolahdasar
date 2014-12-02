<?php

namespace backend\controllers;

use Yii;
use app\models\Guru;
use app\models\Pelajaran;
use app\models\GuruSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * GuruController implements the CRUD actions for Guru model.
 */
class GuruController extends Controller
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
     * Lists all Guru models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GuruSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Guru model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Guru model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Guru();
		$pelajaran = new Pelajaran();

        if ($model->load(Yii::$app->request->post())) {
			$photoGuru = UploadedFile::getInstance($model, 'photoGuru');
			
            $ext = end((explode(".", $photoGuru->name)));
			
			$model->filePhoto = Yii::$app->security->generateRandomString().".{$ext}";
			$path = Yii::$app->params['pathFileGuru'] . $model->filePhoto;
			
			if($model->save()){
				$photoGuru->saveAs($path);
            	return $this->redirect(['view', 'id' => $model->id]);
			}else {
				return $this->render('create', [
					'model' => $model,
					'pelajaran' => $pelajaran,
				]);
			}
        } else {
            return $this->render('create', [
                'model' => $model,
				'pelajaran' => $pelajaran,
            ]);
        }
    }

    /**
     * Updates an existing Guru model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		$pelajaran = new Pelajaran();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			$photoGuru = UploadedFile::getInstance($model, 'photoGuru');
			
            $ext = end((explode(".", $photoGuru->name)));
			
			$model->filePhoto = Yii::$app->security->generateRandomString().".{$ext}";
			$path = Yii::$app->basePath.'/web'.Yii::$app->params['pathFileGuru'] . $model->filePhoto;
			
			if($model->save()){
				$photoGuru->saveAs($path);
            	return $this->redirect(['view', 'id' => $model->id]);
			}else {
				return $this->render('create', [
					'model' => $model,
					'pelajaran' => $pelajaran,
				]);
			}
            
        } else {
            return $this->render('update', [
                'model' => $model,
				'pelajaran' => $pelajaran,
            ]);
        }
    }

    /**
     * Deletes an existing Guru model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Guru model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Guru the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Guru::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
