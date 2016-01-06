<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Servers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="server-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php if (Yii::$app->session->hasFlash('serverReleaseSuccessful')): ?>

        <div class="alert alert-success">
            Server can anotherwise consider dead.  Can continue.
        </div>

    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
        //    ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'address',
            'gameport',
            'claimed_by',
            // 'map',
            // 'current_player_count',
            // 'max_player_count',
            // 'passworded',
            // 'vac',
            // 'dedicated',
            // 'os',
            // 'version',
            // 'gameport',
            // 'realgameport',
            // 'serverid',
            // 'servertags:ntext',
            // 'votes',
            // 'rank',
            // 'upcount',
            // 'downcount',
            // 'dailypopulationcount',
            // 'last_wipe',
            // 'future_wipe',
            // 'wipe_frequency',
            // 'promo',
            // 'type',
            // 'vanity_url:url',
            // 'last_checked',
            // 'hide',
            // 'location_city',
            // 'location_state',
            // 'location_country',
            // 'location_country_code',
            // 'hide_comments',
            // 'claimed_by',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
