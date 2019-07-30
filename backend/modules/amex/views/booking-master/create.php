<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\BookingMaster */

$this->title = 'Create Booking Master';
$this->params['breadcrumbs'][] = ['label' => 'Booking Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="booking-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<script>
$(document).ready(function(){
$('.datepicker').datepicker({
    minDate:'0d'
});



$('#bookingmaster-preferredtimeofplay').timepicker({
    timeFormat: 'h:mm p',
    interval: 60,
    minTime: '6:00am',
    maxTime: '6:00pm',
    startTime: '6:00am',
    dynamic: true,
    dropdown: true,
    scrollbar: true
});

});

</script>