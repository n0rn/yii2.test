<?php

namespace app\controllers;


use yii\web\Controller;
 use app\models\Members;

/**
 * Description of MembersController
 *
 * @author norn
 */
class MembersController  extends Controller 
{
    
        public function actionIndex() {
            
            $members =  new Members();
            
            return $this->render('index',  compact('members'));
        }

}
