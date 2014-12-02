<?php

namespace backend\controllers;

use Yii;
use app\models\KelasDetail;
use app\models\Kelas;
use app\models\Guru;
use app\models\TahunAjaran;
use app\models\KelasDetailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KelasDetailController implements the CRUD actions for KelasDetail model.
 */
class KelasDetailController extends Controller
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
     * Lists all KelasDetail models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new KelasDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
	
	public function actionDetail($id)
    {
		$modelKelas = new Kelas();
		$modelGuru = new Guru();
		$tahunAjaran = new TahunAjaran();
		$kelas = $modelKelas->find($id)->one();
		$guru = $modelGuru->find('id','namaGuru')->all();
        $searchModel = new KelasDetailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('detail', [
			'kelas' => $kelas,
			'guru' => $guru,
			'tahunAjaran' => $tahunAjaran,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single KelasDetail model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id="")
    {
		Yii::$app->response->format = 'json';
		if(isset($_POST['idTahunAjaran']) && $_POST['idTahunAjaran']!=''){
			$model = KelasDetail::findOne([
						'idTahunAjaran' => addslashes($_POST['idTahunAjaran']),
						'idKelas' => addslashes($_POST['idKelas']),
					]);
			
			
			return[
				'idGuru' => $model->idGuru,
				'id'=>$model->id
			];
		}else{
			return[
				'idGuru' => '',
				'id'=>''
			];	
		}
		/*
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
		*/
    }

    /**
     * Creates a new KelasDetail model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new KelasDetail();
		/*
		$dataKelasDetail = array('KelasDetail'=>array(
			'idKelas'=>$_POST['idKelas'],
			'idGuru'=>$_POST['idGuru'],
			'idTahunAjaran'=>$_POST['idTahunPelajaran'],
		));
		*/
		$model->idKelas = addslashes($_POST['idKelas']);
		$model->idGuru = addslashes($_POST['idGuru']);
		$model->idTahunAjaran = addslashes($_POST['idTahunPelajaran']);
		
		Yii::$app->response->format = 'json';
		if($model->save()){
			return [
				'status'=>true,
				'id'=>$model->id
			];
		}else{
			return [
				'status'=>false,
				'id'=>0
			];
		}
		//print_r($_POST);
		/*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
		*/
    }

    /**
     * Updates an existing KelasDetail model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
		
		$model = $this->findModel($id);
		$model->idKelas = addslashes($_POST['idKelas']);
		$model->idGuru = addslashes($_POST['idGuru']);
		$model->idTahunAjaran = addslashes($_POST['idTahunPelajaran']);
		
		Yii::$app->response->format = 'json';
		if($model->save()){
			return [
				'status'=>true,
				'id'=>$model->id
			];
		}else{
			return [
				'status'=>false,
				'id'=>0
			];
		}
		
		/*
        $model = $this->findModel($id);
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
		*/
    }

    /**
     * Deletes an existing KelasDetail model.
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
     * Finds the KelasDetail model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return KelasDetail the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = KelasDetail::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
