<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\Golfer */

$this->title = 'Update Golfer: ' . $model->GolferId;
$this->params['breadcrumbs'][] = ['label' => 'Golfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GolferId, 'url' => ['view', 'id' => $model->GolferId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golfer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
