<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\CompGolfCourseBook */

$this->title = 'Create Comp Golf Course Book';
$this->params['breadcrumbs'][] = ['label' => 'Comp Golf Course Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comp-golf-course-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
