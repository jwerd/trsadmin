<?php

namespace app\controllers;

use Yii;
use app\models\Server;
use app\models\Claim;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ServersController implements the CRUD actions for Server model.
 */
class ServersController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => [],
                'rules' => [
                    [
                        'actions' => ['index','view','update','release','delete'],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index','view','update','release','delete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Server models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Server::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Server model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        exit;
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Server model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        exit;
        $model = new Server();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Server model.
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

    public function actionRelease($id)
    {
        $model = $this->findModel($id);
        $claim = Claim::find()->where(['server_id' => $id])->one(); //ugly fucking code ftw
        /*echo "Server Id: ".$model->id."<br />";
        echo "With claim id having: ".$claim->id."<br />";
        echo "You serious want to fuck around with each another hay?";
        echo "<hr></hr>";
        exit;*/
        if(isset($model->id) && isset($claim->id)) { // we found something
            $model->claimed_by = 0;
            if($model->save()) {
                $claim->delete();
                Yii::$app->session->setFlash('serverReleaseSuccessful');
                return $this->redirect(['index']);
            } else {
                throw new NotFoundHttpException('You can better learn yourself.');
            }
        } else {
            throw new NotFoundHttpException('An error having occured:  Server may already serious released and waiting on guy new.');
        }
    }

    /**
     * Deletes an existing Server model.
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
     * Finds the Server model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Server the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Server::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
