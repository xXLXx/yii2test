<?php

namespace app\modules\users\controllers;

class UsersController extends \yii\web\Controller
{
	public function actionIndex(){
		echo $this->render('/index');
	}
}