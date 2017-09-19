
<?php

namespace app\models;

use Yii;
use \yii\db\ActiveRecord

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $category
 * @property string $description
 */
class Product extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['name', 'category', 'description'], 'required'],
            [['name', 'category', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'category' => 'Category',
            'description' => 'Description',
        ];
    }

}
