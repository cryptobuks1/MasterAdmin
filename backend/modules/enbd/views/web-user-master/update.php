<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\WebUserMaster */

$this->title = 'Update Web User Master: ' . $model->User_ID;
$this->params['breadcrumbs'][] = ['label' => 'Web User Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->User_ID, 'url' => ['view', 'id' => $model->User_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="web-user-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
