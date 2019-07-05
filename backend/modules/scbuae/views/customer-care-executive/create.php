<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\CustomerCareExecutive */

$this->title = 'Create Customer Care Executive';
$this->params['breadcrumbs'][] = ['label' => 'Customer Care Executives', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-care-executive-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
