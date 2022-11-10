<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property int $feedback_id
 * @property string|null $answer
 *
 * @property Feedback $feedback
 */
class Answers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'answers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['feedback_id'], 'required'],
            [['feedback_id'], 'integer'],
            [['answer'], 'string'],
            [['feedback_id'], 'exist', 'skipOnError' => true, 'targetClass' => Feedback::class, 'targetAttribute' => ['feedback_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'feedback_id' => 'Автор вопроса',
            'answer' => 'Ответ',
        ];
    }

    /**
     * Gets query for [[Feedback]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeedback()
    {
        return $this->hasOne(Feedback::class, ['id' => 'feedback_id']);
    }
}
