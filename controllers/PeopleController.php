<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\People;

class PeopleController extends Controller
{
    public function actionIndex()
    {
        $query = People::find()->all();
        return $this->render('index', [
            'people' => $query,
        ]);
    }
}