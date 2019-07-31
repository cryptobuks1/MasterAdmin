<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gcbucket\models\GolfCourseMaster */

$this->title = 'Update Golf Course Master: ' . $model->GID;
$this->params['breadcrumbs'][] = ['label' => 'Golf Course Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->GID, 'url' => ['view', 'id' => $model->GID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="golf-course-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
