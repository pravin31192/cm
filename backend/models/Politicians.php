<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "politicians".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $street
 * @property int $constituency
 * @property int $district
 * @property int $state
 * @property int $current_party
 * @property string $party_name
 * @property int $previous_party
 * @property string $previous_party_name
 * @property int $active_from
 * @property string $mobile_no
 * @property string $personal_email_id
 * @property string $official_email_id
 * @property string $fb_profile
 * @property string $twitter_profile
 * @property string $profile_photo
 * @property int $created_at
 * @property int $updated_at
 */
class Politicians extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'politicians';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'first_name', 'state', 'profile_photo'], 'required'],
            [['id', 'constituency', 'district', 'state', 'current_party', 'previous_party', 'active_from', 'created_at', 'updated_at'], 'integer'],
            [['fb_profile', 'twitter_profile', 'profile_photo'], 'string'],
            [['first_name', 'last_name', 'street', 'mobile_no'], 'string', 'max' => 128],
            [['party_name', 'previous_party_name'], 'string', 'max' => 512],
            [['personal_email_id', 'official_email_id'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'street' => 'Street',
            'constituency' => 'Constituency',
            'district' => 'District',
            'state' => 'State',
            'current_party' => 'Current Party',
            'party_name' => 'Party Name',
            'previous_party' => 'Previous Party',
            'previous_party_name' => 'Previous Party Name',
            'active_from' => 'Active From',
            'mobile_no' => 'Mobile No',
            'personal_email_id' => 'Personal Email ID',
            'official_email_id' => 'Official Email ID',
            'fb_profile' => 'Fb Profile',
            'twitter_profile' => 'Twitter Profile',
            'profile_photo' => 'Profile Photo',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
