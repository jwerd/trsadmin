<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;
/* @var $this yii\web\View */
/* @var $model app\models\Server */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Servers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="server-update">

    <h2><?= Html::encode($this->title) ?></h2>
    <p>
        <?php if($model->claimed_by > 0): ?>
        <?= Html::a('Release Server', ['release', 'id' => $model->id], [
            'class' => 'btn btn-primary',
            'data' => [
                'confirm' => 'Are you sure you want to release this server?',
                'method' => 'post',
            ],
        ]) ?>
        <?php endif; ?>
        <?= Html::a('Remove Server', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to remove this server?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?php /*
    <a href="<?php echo Url::toRoute(['servers/release', 'id' => $model->id]);?>" class="btn btn-primary">Release Server</a> <a href="<?php echo Url::toRoute(['servers/remove', 'id' => $model->id]);?>" class="btn btn-danger">Remove Server</a><br />
    <bn />
    <?= $this->render('_form', [
        'model' => $model,
    ]) */ ?>

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
