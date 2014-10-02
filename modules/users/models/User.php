<?php

namespace modules\users\models;

use Yii;
use \yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property integer $id
 * @property string $fname
 * @property string $lname
 * @property integer $create_time
 * @property integer $update_time
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fname', 'lname'], 'string', 'required'],
            [['create_time', 'update_time'], 'integer', 'safe'],
            [['fname'], 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fname' => 'Fname',
            'lname' => 'Lname',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }

    public function behaviors(){
        return [
            'timestamp' => [
                'class'         => \yii\behaviors\TimestampBehavior::className(),
                'attributes'    => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'creation_time',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'update_time',
                ]
            ]
        ];
    }
}
