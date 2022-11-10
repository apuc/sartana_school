<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string|null $job_title
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $email
 */
class Teachers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_title', 'full_name', 'phone', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'job_title' => 'Должность',
            'full_name' => 'ФИО',
            'phone' => 'Контактный телефон',
            'email' => 'Почта   ',
        ];
    }
}
