<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "dish".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $amount
 * @property int|null $is_diet
 * @property int|null $menu_id
 */
class Dish extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dish';
    }

    const DIET_DISH = 1;
    const NOT_DIET_DISH = 0;

    public static function getDietLabel()
    {
        return [
            self::DIET_DISH => 'Диетичное блюдо',
            self::NOT_DIET_DISH => 'Не диетичное блюдо',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_diet', 'menu_id'], 'integer'],
            [['name', 'amount'], 'string', 'max' => 255],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => HotMenu::class, 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }


    public function getHotMenu()
    {
        return $this->hasOne(HotMenu::class, ['id' => 'menu_id']);
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Блюдо',
            'amount' => 'Количество',
            'menu_id' => 'Меню',
            'is_diet' => 'Диетическое',
        ];
    }
}
