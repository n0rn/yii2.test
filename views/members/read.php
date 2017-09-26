<?php

use yii\widgets\ListView;

echo ListView::widget([
    'dataProvider' => $read,
    'itemView' => '_members',
]);

