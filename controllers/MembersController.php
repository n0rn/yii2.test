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
            
         $addMembers = Yii::$app->params['addMembers'];
        $model = $addMembers ? new RegForm(['scenario' => 'addMembers']) : new RegForm();
            
            return $this->render('index',  compact('model'));
           
        }

}
