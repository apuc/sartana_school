<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "supervisors".
 *
 * @property int $id
 * @property string|null $job_title
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $position
 */
class Supervisors extends \yii\db\ActiveRecord
{

    const DIRECTOR = 'Директор';
    const HEAD_TEACHER = 'Завуч';

    public static function getPosition()
    {
        return [
            self::DIRECTOR => 'Директор',
            self::HEAD_TEACHER => 'Завуч',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supervisors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_title', 'full_name', 'phone', 'email', 'position'], 'string', 'max' => 255],
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
            'full_name' => 'Полное имя',
            'phone' => 'Телефон',
            'email' => 'Почта',
            'position' => 'Позиция',
        ];
    }
}
