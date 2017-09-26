<?php

use yii\grid\GridView;

echo GridView::widget([
    'dataProvider' => $read,
    'columns' => [
                    'name', 
                   'email',
                   'text' ,
                   'time' ,
    ]
]);

