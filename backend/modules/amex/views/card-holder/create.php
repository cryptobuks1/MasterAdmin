<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolder */

$this->title = 'Create Card Holder';
$this->params['breadcrumbs'][] = ['label' => 'Card Holders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="card-holder-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
