<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\BinNumbers */

$this->title = 'Update Bin Numbers: ' . $model->bin_id;
$this->params['breadcrumbs'][] = ['label' => 'Bin Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bin_id, 'url' => ['view', 'id' => $model->bin_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bin-numbers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
