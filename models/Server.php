<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_server".
 *
 * @property integer $id
 * @property string $name
 * @property string $hostname
 * @property string $address
 * @property string $banner
 * @property string $map
 * @property integer $current_player_count
 * @property integer $max_player_count
 * @property integer $passworded
 * @property integer $vac
 * @property string $dedicated
 * @property string $os
 * @property integer $version
 * @property integer $gameport
 * @property integer $realgameport
 * @property integer $serverid
 * @property string $servertags
 * @property integer $votes
 * @property integer $rank
 * @property integer $upcount
 * @property integer $downcount
 * @property integer $dailypopulationcount
 * @property string $last_wipe
 * @property string $future_wipe
 * @property integer $wipe_frequency
 * @property integer $promo
 * @property integer $type
 * @property string $vanity_url
 * @property integer $last_checked
 * @property integer $hide
 * @property string $location_city
 * @property string $location_state
 * @property string $location_country
 * @property string $location_country_code
 * @property integer $hide_comments
 * @property integer $claimed_by
 */
class Server extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_server';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['current_player_count', 'max_player_count', 'passworded', 'vac', 'version', 'gameport', 'realgameport', 'serverid', 'votes', 'rank', 'upcount', 'downcount', 'dailypopulationcount', 'wipe_frequency', 'promo', 'type', 'last_checked', 'hide', 'hide_comments', 'claimed_by'], 'integer'],
            [['servertags'], 'string'],
            [['last_wipe', 'future_wipe'], 'safe'],
            [['name', 'hostname', 'address', 'banner', 'location_city', 'location_state', 'location_country'], 'string', 'max' => 255],
            [['map'], 'string', 'max' => 55],
            [['dedicated', 'os'], 'string', 'max' => 1],
            [['vanity_url'], 'string', 'max' => 25],
            [['location_country_code'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hostname' => 'Hostname',
            'address' => 'Address',
            'banner' => 'Banner',
            'map' => 'Map',
            'current_player_count' => 'Current Player Count',
            'max_player_count' => 'Max Player Count',
            'passworded' => 'Passworded',
            'vac' => 'Vac',
            'dedicated' => 'Dedicated',
            'os' => 'Os',
            'version' => 'Version',
            'gameport' => 'Gameport',
            'realgameport' => 'Realgameport',
            'serverid' => 'Serverid',
            'servertags' => 'Servertags',
            'votes' => 'Votes',
            'rank' => 'Rank',
            'upcount' => 'Upcount',
            'downcount' => 'Downcount',
            'dailypopulationcount' => 'Dailypopulationcount',
            'last_wipe' => 'Last Wipe',
            'future_wipe' => 'Future Wipe',
            'wipe_frequency' => 'Wipe Frequency',
            'promo' => 'Promo',
            'type' => 'Type',
            'vanity_url' => 'Vanity Url',
            'last_checked' => 'Last Checked',
            'hide' => 'Hide',
            'location_city' => 'Location City',
            'location_state' => 'Location State',
            'location_country' => 'Location Country',
            'location_country_code' => 'Location Country Code',
            'hide_comments' => 'Hide Comments',
            'claimed_by' => 'Claimed By',
        ];
    }
}
