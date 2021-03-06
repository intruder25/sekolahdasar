<?php

namespace backend\controllers;

use Yii;
use common\models\Event;
use app\models\EventSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\db\Query;

/**
 * EventController implements the CRUD actions for Event model.
 */
class EventController extends Controller
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
     * Lists all Event models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EventSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Event model.
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
     * Creates a new Event model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Event();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
			Yii::$app->response->format = 'json';
            return [
                'message' => 'Success!!!',
            ];
            //return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Event model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
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
     * Deletes an existing Event model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

	public function actionCalendar($from,$to,$browser_timezone){
		$from = date('Y-m-d', ($from/1000));
		$to = date('Y-m-d', ($to/1000));
		$query = new Query();
		$query->select('id, url, eventName as title, eventColor as class, startTime as start, endTime as end')->from('event')->where(['between','startTime',$from,$to])->andWhere(['between','endTime',$from,$to]);
		
		//$command = $query->createCommand();
		//echo $command->sql;
		// $command->sql returns the actual SQL
		//$rows = $command->queryAll();
		//$eventData = Event::find()->where(['between','startTime',$from,$to])->andWhere(['between','endTime',$from,$to])->all();
		$_eventData = $query->all();
		$eventData = array();
		Yii::$app->response->format = 'json';
		foreach($_eventData as $d){
			$eventData[] = array(
				"id"	=> $d['id'],
				"title" => $d['title'],
				"url" 	=> $d['url'],
				"class"	=> $d['class'],
				"start"	=> strtotime($d['start']) . '000',
				"end"	=> strtotime($d['end']) . '000',
			);
		}
		return [
			"success"=> 1,
			"result"=> $eventData
		];
	}

    /**
     * Finds the Event model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Event the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Event::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
