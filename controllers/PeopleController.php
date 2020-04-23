<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\People;
use yii\filters\AccessControl;


class PeopleController extends Controller
{
    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index'],
                        'roles' => ['@'],
                     ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {   
        $model = new People();
        $query = People::find()->all();
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $model->save();
            return $this->refresh();
        } else {
            return $this->render('index', [
                'people' => $query,
                'model' => $model,
            ]);
        }
    }
}