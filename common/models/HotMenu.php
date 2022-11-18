<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hot_menu".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $dishes
 * @property string|null $image
 *
 */
class HotMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hot_menu';
    }



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['dishes'], 'safe'],
//            ['image', 'image', 'minWidth' => 500, 'maxWidth' => 500,'minHeight' => 500, 'maxHeight' => 500, 'extensions' => 'jpg, png, jpeg'],
            [['name'], 'string', 'max' => 255],
            [['name'], 'required'],
            [['image'], 'required'],
        ];
    }




    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название меню',
            'dishes' => 'Блюда',
            'image' => 'Фото',

        ];
    }

    public function findDish($id): array
    {
        $dishModel = new Dish();
        return $dishModel::find()->where(['menu_id'=>$id])->all();
    }

    public function afterFind() {
        parent::afterFind();
        $this->dishes = \yii\helpers\Json::decode($this->dishes);
    }
}
