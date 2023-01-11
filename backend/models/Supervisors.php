<?php

namespace app\models;

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
            'job_title' => 'Job Title',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'position' => 'Position',
        ];
    }
}
