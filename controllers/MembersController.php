<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Members;
use app\models\RegForm;
use app\controllers\ActiveDataProvider;

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
        
        public function actionList()
        {
            $provider = new ActiveDataProvider([
                      'query' => Members::find(),
                      'pagination' => [
                      'pageSize' => 5,
                 ],
            ]);
            
            return $this->render('list', compact(provider));
        }

}
