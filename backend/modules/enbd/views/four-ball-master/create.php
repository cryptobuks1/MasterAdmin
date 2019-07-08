<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\FourBallMaster */

$this->title = 'Create Four Ball Master';
$this->params['breadcrumbs'][] = ['label' => 'Four Ball Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="four-ball-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
