<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "districts".
 *
 * @property int $id
 * @property int $state_id
 * @property string $name
 */
class Districts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'districts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'state_id'], 'integer'],
            [['name'], 'string', 'max' => 100],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'state_id' => 'State ID',
            'name' => 'Name',
        ];
    }
}
