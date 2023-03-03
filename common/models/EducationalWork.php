<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "educational_work".
 *
 * @property int $id
 * @property string $title
 * @property string $text
 * @property string|null $link
 * @property string|null $image
 * @property string|null $video
 */
class EducationalWork extends \yii\db\ActiveRecord
{
    public $imageFile;
    public $videoFile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'educational_work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'title'], 'required'],
            [['link', 'image', 'video', 'title'], 'string', 'max' => 255],
            [['videoFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'MOV, avi, mp4, mov, MP4, AVI'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'text' => 'Текст',
            'link' => 'Ссылка',
            'image' => 'Фото',
            'video' => 'Видео',
        ];
    }

    public function upload()
    {
//        $this->validate();
//
//        print_r($this->errors);die();
        if ($this->validate()) {
            if ($this->videoFile) {
                $this->videoFile->saveAs("@frontend/web/uploads/videos/" . $this->videoFile->baseName . "." . $this->videoFile->extension);
                $this->video = "/uploads/videos/" . $this->videoFile->baseName . "." . $this->videoFile->extension;
            }
            if ($this->imageFile) {
                $this->imageFile->saveAs("@frontend/web/uploads/images/" . $this->imageFile->baseName . "." . $this->imageFile->extension);
                $this->image = "/uploads/images/" . $this->imageFile->baseName . "." . $this->imageFile->extension;
            }
            return true;
        } else {
            return false;
        }
    }
}
