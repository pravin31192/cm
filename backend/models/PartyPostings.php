<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "party_postings".
 *
 * @property int $id
 * @property string $role_name
 * @property int $created_at
 * @property int $updated_at
 */
class PartyPostings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'party_postings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role_name'], 'required'],
            [['id', 'created_at', 'updated_at'], 'integer'],
            [['role_name'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role_name' => 'Role Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
