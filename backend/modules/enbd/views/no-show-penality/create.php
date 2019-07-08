<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\NoShowPenality */

$this->title = 'Create No Show Penality';
$this->params['breadcrumbs'][] = ['label' => 'No Show Penalities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="no-show-penality-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
