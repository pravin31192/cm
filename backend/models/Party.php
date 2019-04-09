<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "party".
 *
 * @property int $id
 * @property int $state_id
 * @property int $party_name
 * @property int $party_abbrevation
 * @property int $found_by
 * @property string $found_by_name
 * @property string $slug
 * @property int $created_at
 * @property int $updated_at
 */
class Party extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'party';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'state_id', 'party_name'], 'required'],
            [['id', 'state_id', 'party_name', 'party_abbrevation', 'found_by', 'created_at', 'updated_at'], 'integer'],
            [['found_by_name', 'slug'], 'string', 'max' => 256],
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
            'party_name' => 'Party Name',
            'party_abbrevation' => 'Party Abbrevation',
            'found_by' => 'Found By',
            'found_by_name' => 'Found By Name',
            'slug' => 'Slug',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
