<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class BungaController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionProduct()
    {
        return $this->render('product');
    }
    public function actionProductk()
    {
        return $this->render('productk');
    }
    public function actionContact()
    {
        return $this->render('contact');
    }
    public function actionCheckout()
    {
        return $this->render('checkout');
    }
}