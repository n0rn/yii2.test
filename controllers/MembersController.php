<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Members;
use app\models\RegForm;
use app\models\UploadForm;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

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
             $dataProviderr = new ActiveDataProvider([
                      'query' => Members::find(),
                      'pagination' => [
                      'pageSize' => 5,
                 ],
            ]);
            
            return $this->render('list', ['read'  => $dataProviderr]);
        }
        
        
        public function actionRead()
        {
            $dataProvider = new ActiveDataProvider([
            'query' => Members::find(),
            'pagination' => [
                'pageSize' => 5,
            ],
        ]);
            
             return $this->render('read', ['read' => $dataProvider]);
        }
        
        public function actionUpload() {
            $model = new UploadForm();

            if (Yii::$app->request->isPost) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
                if ($model->upload()) {
                    // file is uploaded successfully
                    return;
                }
            }

            return $this->render('upload', ['model' => $model]);
    }

}
