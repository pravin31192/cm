<?php

namespace app\backend\models;

use Yii;

/**
 * This is the model class for table "lookup_party_roles".
 *
 * @property int $id
 * @property string $party_role_name
 * @property int $created_at
 * @property int $updated_at
 */
class LookupPartyRoles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lookup_party_roles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['party_role_name'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['party_role_name'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'party_role_name' => 'Party Role Name',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
