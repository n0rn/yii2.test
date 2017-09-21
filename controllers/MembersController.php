<?php

namespace app\controllers;


use yii\web\Controller;
use app\models\Members;
use app\models\RegForm;

/**
 * Description of MembersController
 *
 * @author norn
 */
class MembersController  extends Controller 
{
    
        public function actionIndex() {
            
            $model = $addMembers ? new RegForm(['scenario' => 'addMembers']) : new RegForm();
            
            return $this->render('index',  compact('model'));
        }

}
