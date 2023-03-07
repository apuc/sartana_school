<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property int|null $date
 * @property string|null $name
 * @property string|null $text
 * @property string|null $image
 * @property string|null $video
 * @property string|null $short_desc
 * @property string|null $preview
 */
class News extends \yii\db\ActiveRecord
{
    public $prettyDate;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

//    public function behaviors()
//    {
//        return [
//            'timestamp' => [
//                'class' => 'yii\behaviors\TimestampBehavior',
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => ['date'],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['date'],
//                ],
//            ],
//        ];
//    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'preview','text', 'image','short_desc','name'], 'required'],
            [['text' ,'image', 'video'], 'string'],
            [['name', 'short_desc'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'name' => 'Название',
            'text' => 'Текст',
            'image' => 'Основная картинка',
            'preview' => 'Превью',
            'short_desc' => 'Краткое описание',
            'video' => 'Видео'
        ];
    }
    public function afterFind()
    {
        parent::afterFind();
        $this->prettyDate = date("d-m-Y", $this->date);
    }
}


