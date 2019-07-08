<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\GolfcourseMaxBook */

$this->title = 'Create Golfcourse Max Book';
$this->params['breadcrumbs'][] = ['label' => 'Golfcourse Max Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="golfcourse-max-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
