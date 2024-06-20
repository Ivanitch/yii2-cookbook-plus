<?php

declare(strict_types=1);


namespace app\controllers\sakila;

use app\models\sakila\Actor;
use yii\web\Controller;

class ActorController extends Controller
{
    public function actionIndex()
    {
        $data = Actor::find()->all();

        dd($data);
    }
}