<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\enbd\models\ConvertCurrency */

$this->title = 'Create Convert Currency';
$this->params['breadcrumbs'][] = ['label' => 'Convert Currencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="convert-currency-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
