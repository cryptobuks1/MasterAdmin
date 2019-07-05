<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\scbuae\models\AccountType */

$this->title = 'Update Account Type: ' . $model->accountTypeID;
$this->params['breadcrumbs'][] = ['label' => 'Account Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->accountTypeID, 'url' => ['view', 'id' => $model->accountTypeID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="account-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
