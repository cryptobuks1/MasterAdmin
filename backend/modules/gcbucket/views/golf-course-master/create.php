<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gcbucket\models\GolfCourseMaster */

$this->title = 'Create Golf Course Master';
$this->params['breadcrumbs'][] = ['label' => 'Golf Course Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golf-course-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
