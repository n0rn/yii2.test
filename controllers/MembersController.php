<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Members;
use app\models\RegForm;


/**

 *
 * @author norn
 */
class MembersController  extends Controller 
{
    
        public function actionIndex() {
            
         $model = new RegForm();
          
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($user = $model->reg());
        }

        return $this->render('index',  compact('model'));
           
        }

}
