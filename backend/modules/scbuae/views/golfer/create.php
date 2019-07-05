<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\Golfer */

$this->title = 'Create Golfer';
$this->params['breadcrumbs'][] = ['label' => 'Golfers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golfer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
