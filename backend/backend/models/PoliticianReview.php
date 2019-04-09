<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "politician_review".
 *
 * @property int $id
 * @property int $politician_id
 * @property string $comment
 * @property string $image
 * @property int $comment_type
 * @property int $comment_by
 * @property int $created_at
 * @property int $updated_at
 */
class PoliticianReview extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'politician_review';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'politician_id', 'comment'], 'required'],
            [['id', 'politician_id', 'comment_type', 'comment_by', 'created_at', 'updated_at'], 'integer'],
            [['comment', 'image'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'politician_id' => 'Politician ID',
            'comment' => 'Comment',
            'image' => 'Image',
            'comment_type' => 'Comment Type',
            'comment_by' => 'Comment By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
