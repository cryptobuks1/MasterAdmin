<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\TeeTime */

$this->title = 'Create Tee Time';
$this->params['breadcrumbs'][] = ['label' => 'Tee Times', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tee-time-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
