<?php

namespace modules\users\controllers;

use modules\users\models\User;

class UsersController extends \yii\web\Controller
{
	public function actionIndex(){
		$dataProvider = new \yii\data\ActiveDataProvider([
				'query'			=> User::find(),
				'pagination'	=> [
					'pageSize'		=> 2,
				],
			]);

		echo $this->render('/index', compact('dataProvider'));
	}
}