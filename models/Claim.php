<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_claim".
 *
 * @property integer $id
 * @property integer $server_id
 * @property integer $user_id
 * @property integer $claimed_on
 */
class Claim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_claim';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['server_id', 'user_id', 'claimed_on'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'server_id' => Yii::t('app', 'Server ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'claimed_on' => Yii::t('app', 'Claimed On'),
        ];
    }
}
