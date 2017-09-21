<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;


use yii\base\Model;
use Yii;

/**
 * Description of RegForm
 *
 * @author norn
 */
class RegForm  extends  Model
{
        public $name;
        public $email;
        public $text;
        
    public function rules()
    {
        return [
        [['name', 'email'], 'filter', 'filter' => 'trim'],
        [['name', 'email', 'text'], 'required'],
        ['name', 'string', 'min' => 4, 'max' => 255],
        ['email', 'email'],
        ['email', 'unique',
                'targetClass' => Members::className(),
                'message' => 'Эта почта уже занята.'],
        ];
    }
    
    public function attributeLabels() 
     {
        return [
            'name' => 'Name',
            'email' => 'email',
            'text' => 'text'
        ];
    }
    
    public function reg() 
    {
        
        $members = new Members();
        $members->name = $this->name;
         $members->email = $this->email;
         $members->text = $this->text; 
        return  $members->save() ?    $members : null;
    }
    
    public function sendActivationEmail($members) 
      {
        return Yii::$app->mailer->compose('activationEmail', ['member' =>  $members])
                        ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' (отправлено роботом).'])
                        ->setTo($this->email)
                        ->setSubject('Активация для ' . Yii::$app->name)
                        ->send();
    }

}
