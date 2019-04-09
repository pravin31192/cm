<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "constituencies".
 *
 * @property int $id
 * @property int $district_id
 * @property string $name
 * @property int $current_member
 * @property string $current_member_name
 * @property int $previous_member
 * @property string $previous_member_name
 * @property int $current_party
 * @property string $slug
 * @property int $created_at
 * @property int $updated_at
 */
class Constituencies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'constituencies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['district_id', 'name'], 'required'],
            [['district_id', 'current_member', 'previous_member', 'current_party', 'created_at', 'updated_at'], 'integer'],
            [['name', 'current_member_name', 'previous_member_name'], 'string', 'max' => 128],
            [['slug'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'district_id' => 'District ID',
            'name' => 'Name',
            'current_member' => 'Current Member',
            'current_member_name' => 'Current Member Name',
            'previous_member' => 'Previous Member',
            'previous_member_name' => 'Previous Member Name',
            'current_party' => 'Current Party',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
