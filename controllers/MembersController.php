<?php

namespace app\controllers;


use yii\web\Controller;
<<<<<<< HEAD
use app\models\Members;
use app\models\RegForm;
=======
 use app\models\Members;
>>>>>>> master

/**
 * Description of MembersController
 *
 * @author norn
 */
class MembersController  extends Controller 
{
    
        public function actionIndex() {
            
<<<<<<< HEAD
            $model = $addMembers ? new RegForm(['scenario' => 'addMembers']) : new RegForm();
            
            return $this->render('index',  compact('model'));
=======
            $members =  new Members();
            
            return $this->render('index',  compact('members'));
>>>>>>> master
        }

}
