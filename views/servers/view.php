<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Server */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Servers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="server-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'hostname',
            'address',
            'banner',
            'map',
            'current_player_count',
            'max_player_count',
            'passworded',
            'vac',
            'dedicated',
            'os',
            'version',
            'gameport',
            'realgameport',
            'serverid',
            'servertags:ntext',
            'votes',
            'rank',
            'upcount',
            'downcount',
            'dailypopulationcount',
            'last_wipe',
            'future_wipe',
            'wipe_frequency',
            'promo',
            'type',
            'vanity_url:url',
            'last_checked',
            'hide',
            'location_city',
            'location_state',
            'location_country',
            'location_country_code',
            'hide_comments',
            'claimed_by',
        ],
    ]) ?>

</div>
