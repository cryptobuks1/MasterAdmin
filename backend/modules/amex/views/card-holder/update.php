<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolder */

$this->title = 'Update Card Holder: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Card Holders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->CardHolderID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="card-holder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
