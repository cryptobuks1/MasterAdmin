<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model backend\modules\amex\models\CardHolder */
/* @var $form ActiveForm */


?>
<div class="new-booking">
<?php Pjax::begin();
    $form = ActiveForm::begin(); 
    $usermodel=$model;
  //  echo "<pre>";print_r($model['DUMP'][0]);exit;
    ?>
    
<div class="row">
<div class="col-md-4">
<?= $form->field($usermodel, 'customerID')->textInput(['readonly'=>true]) ?>
<?= $form->field($usermodel, 'Name')->textInput(['readonly'=>true])->label('Customer Full Name') ?>
<?= $form->field($usermodel,'DUMP')->textInput(['readonly'=>true,'value' => (string)$model['DUMP'][0]['Handicap']])->label('Customer Handicap')?>
<?= $form->field($usermodel,'DUMP')->textInput(['readonly'=>true,'value' => (string)$model['DUMP'][0]['CardTypeName']])->label('Customer Card Type')?>
<?= $form->field($usermodel,'DUMP')->textInput(['readonly'=>true,'value' => (string)$model['DUMP'][0]['HolderTypeID']])->label('Customer Card Holder Type')?>
<?= $form->field($usermodel,'DUMP')->textInput(['readonly'=>true,'value' => (string)$model['DUMP'][0]['SupplementaryMobile']])->label('Supplementary Customer Mobile Number')?>
<?= $form->field($usermodel,'DUMP')->textInput(['readonly'=>true,'value' => (string)$model['DUMP'][0]['SupplementaryName']])->label('Supplementary Customer Full Name')?>
</div>

<div class="col-md-4">

</div>
</div>

</div>
<?php /*
<!-- <div class="row">
            <div class="col-lg-4 col-lg-offset-4 hidden" id="search-customer-block">
                <!-- Bootstrap Lock -->
                <div class="block block-themed">
                    <div class="block-header bg-primary">
                        <h3 class="block-title">Search Customer</h3>
                    </div>
                    <div class="block-content">
                        <form class="form-horizontal js-validation-customer-search" id="customer-search-form" enctype="multipart/form-data" onsubmit="return false;" autocomplete="off" novalidate="novalidate">
                            <div class="form-group">
                                <label class="col-xs-12" for="customer-mobile">Customer Mobile Number</label>
                                <div class="col-xs-12">
                                    <input class="form-control valid" autocomplete="off" type="text" id="customer-mobile" name="customer-mobile" placeholder="Enter Customer Mobile Number" aria-describedby="customer-mobile-error" aria-invalid="false">
                                </div>
                            </div>
                            <div class="form-group hidden" id="customer-name-block">
                                <label class="col-xs-12" for="customer-name">Customer Full Name</label>
                                <div class="col-xs-12">
                                    <input class="form-control" autocomplete="off" type="text" id="customer-name" name="customer-name" placeholder="Enter Customer Full Name">
                                </div>
                            </div>
                            <div class="form-group hidden" id="customer-card-type-block">
                                <label class="col-xs-12" for="customer-card-type">Customer Card Type</label>
                                <div class="col-xs-12">
                                    <select class="form-control" id="customer-card-type" name="customer-card-type" size="1">
                                        <option value="">Select Card Type</option>
                                         <option value="2">Centurion</option> <option value="3">Charge</option>                                                                             </select>
                                </div>
                            </div>
                            <div class="form-group hidden" id="customer-card-holder-type-block">
                                <label class="col-xs-12" for="customer-card-holder-type">Customer Card Holder Type</label>
                                <div class="col-xs-12">
                                    <select class="form-control" id="customer-card-holder-type" name="customer-card-holder-type" size="1">
                                        <option value="">Select Card Holder Type</option>
                                        <option value="1">Primary</option>
                                        <option value="2">Supplementary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <button class="btn btn-sm btn-primary" id="search-customer-btn">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Bootstrap Lock -->

                <div class="block block-themed hidden" id="error-msg-block">
                    <div class="block-header bg-danger">
                        <h3 class="block-title">Error</h3>
                    </div>
                    <div class="block-content block-content-narrow">
                        <div class="row">
                            <div class="col-lg-12"><h5 id="error-msg"></h5></div>
                        </div>
                        <br>
                    </div>
                </div>

            </div>

            <div class="col-lg-4 hidden" id="show-customer-booking-block">
                <div class="block block-themed">
                    <div class="block-header bg-danger">
                        <h3 class="block-title">Booking Details</h3>
                    </div>
                    <div class="block-content block-content-narrow">
                        <div class="row">
                            <div class="col-lg-12"><h5>Booking already exists for the customer</h5></div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12"><p id="booking-golf-course-name"></p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"><p id="booking-date-of-play"></p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"><p id="booking-time-of-play-1"></p></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"><p id="booking-time-of-play-2"></p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4" id="show-customer-block">
                <!-- Bootstrap Lock -->
                <div class="block block-themed">
                    <div class="block-header bg-primary">
                        <h3 class="block-title">Customer Details</h3>
                    </div>
                    <div class="block-content">
                        <form class="form-horizontal" id="show-customer-form" enctype="multipart/form-data" onsubmit="return false;" autocomplete="off">
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-mobile-num-1">Customer Mobile Number</label>
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="golfer-mobile-num-1" name="golfer-mobile-num-1" disabled="disabled" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-name-1">Customer Full Name</label>
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="golfer-name-1" name="golfer-name-1" disabled="disabled" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-handicap-1">Customer Handicap</label>
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="golfer-handicap-1" name="golfer-handicap-1" disabled="disabled" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-card-type-1">Customer Card Type</label>
                                <div class="col-xs-12">
                                    <select class="form-control" id="golfer-card-type-1" name="golfer-card-type-1" size="1" disabled="disabled">
                                        <option value="1">Platinum Reserve</option>
                                        <option value="2">Centurion</option>
                                        <option value="3">Charge</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-card-holder-type-1">Customer Card Holder Type</label>
                                <div class="col-xs-12">
                                    <select class="form-control" id="golfer-card-holder-type-1" name="golfer-card-holder-type-1" size="1" disabled="disabled">
                                        <option value="1">Primary</option>
                                        <option value="2">Supplementary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-mobile-num-1">Supplementary Customer Mobile Number</label>
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="supplementary-golfer-mobile-num-1" name="supplementary-golfer-mobile-num-1" disabled="disabled" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12" for="golfer-name-1">Supplementary Customer Full Name</label>
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" id="supplementary-golfer-name-1" name="supplementary-golfer-name-1" disabled="disabled" autocomplete="off">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Bootstrap Lock -->

            </div>


            <div class="col-lg-8">

                <!-- <div class="block block-themed hidden" id="show-no-booking-block">
                <div class="block-header bg-danger">
                <h3 class="block-title">Booking Details</h3>
            </div>
            <div class="block-content block-content-narrow">
            <div class="row">
            <div class="col-lg-8"><h5>No existing booking found for the customer</h5></div>
        </div>
        <br>
    </div>
</div> -->

<!-- Bootstrap Lock -->
<div class="block block-themed" id="create-booking-block">
    <div class="block-header bg-primary">
        <h3 class="block-title">Create Booking</h3>
    </div>
    <div class="block-content block-content-narrow">
        <form class="form-horizontal js-validation-booking-create" id="create-booking-form" enctype="multipart/form-data" onsubmit="return false;" autocomplete="off" novalidate="novalidate">
            <input class="form-control hidden" type="text" id="customer-id" name="customer-id" autocomplete="off">
            <input class="form-control hidden" type="text" id="customer-card-type" name="customer-card-type" autocomplete="off">
            <input class="form-control hidden" type="text" value="0" id="is-escalated" name="is-escalated" autocomplete="off">
            <input class="form-control hidden" type="text" value="0" id="is-amex-tieup" name="is-amex-tieup" autocomplete="off">
            <input class="form-control hidden" type="text" value="0" id="is-overflow" name="is-overflow" autocomplete="off">
            <input class="form-control hidden" type="text" value="" id="escalation-msg" name="escalation-msg" autocomplete="off">
            <input class="form-control hidden" type="text" value="" id="card_holder_type" name="card_holder_type" autocomplete="off">

            <div class="form-group">
                <div class="row">
                    <label class="col-xs-2" for="golf-course-gid">Golf Course</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golf-course-gid" name="golf-course-gid" size="1"><option value="">Select Golf Course</option><option value="94">Bombay Presidency Golf Club</option><option value="40">Boulder Hills Golf and Country Club</option><option value="111">CIAL Golf Course</option><option value="34">Classic Golf &amp; Country Club</option><option value="36">Clover Greens Golf Course</option><option value="8">Eagleton The Golf Village</option><option value="2240">East point golf Course </option><option value="696">Glade One</option><option value="39">Golden Greens Golf Course</option><option value="109">Gulmarg Golf Club</option><option value="209">Gulmohar Greens Golf &amp; Country Club</option><option value="2241">Jamshedpur Golf Club</option><option value="41">Jaypee Greens Golf Club</option><option value="37">Kalhaar Blues &amp; Greens</option><option value="14">Karma Lakelands</option><option value="2243">Kaziranga Golf Club</option><option value="15">Kensville Golf And Country Club</option><option value="2239">Kodaikanal Golf Club</option><option value="583">Kovai Hills</option><option value="17">Madras Gymkhana Club</option><option value="73">Manesar Golf Club</option><option value="38">Panchkula Golf club</option><option value="51">Poona Golf Club</option><option value="11">Prestige Golfshire</option><option value="42">Rambagh Golf Club</option><option value="694">Royal Jaipur Golf Club</option><option value="2242">The Gaekwad Baroda Golf Club</option><option value="31">The Lalit Golf &amp; Spa Resort</option><option value="2238">TNGF Golf Course</option><option value="381">Tollygunge Golf Camp</option><option value="90">Willingdon Golf Club</option><option value="35">Zion Hills Golf County</option></select>
                    </div>
                    <label class="col-xs-2" for="date-of-play">Date of Play</label>
                    <div class="col-xs-4">
                        <input class="js-datepicker form-control" type="text" id="date-of-play" name="date-of-play" data-date-format="mm/dd/yy" data-date-start-date="+0d" data-date-end-date="+14d" placeholder="Select Date of Play" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="form-group">
              <div class="row">
                  <label class="col-xs-2" for="preferred-time-of-play">Preferred Time</label>
                  <div class="col-xs-4">
                  <input class="form-control" type="text" value="" id="preferred-time-of-play" name="preferred-time-of-play" pattern="([01]?[0-9]|2[0-3])(:[0-5][0-9]){2}" required="required" placeholder="HH:MM:SS" autocomplete="off">
                  </div>
              </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-xs-2" for="time-of-play-1">Time of Play 1</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="time-of-play-1" name="time-of-play-1" size="1" autocomplete="off">
                            <option value="">Select Time of Play 1</option>
                        </select>
                    </div>
                    <label class="col-xs-2" for="time-of-play-2">Time of Play 2</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="time-of-play-2" name="time-of-play-2" size="1" autocomplete="off">
                            <option value="">Select Time of Play 2</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <label class="col-xs-2" for="time-of-play-1">Number of Golfers</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="num-of-golfers" name="num-of-golfers" size="1">
                            <option value="">Select Number of Golfers</option>
                            <option value="1" selected="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr class="hidden" id="golfer-1-part">

            <div class="form-group hidden" id="golfer-2-block">
                <div class="row">
                    <label class="col-xs-2" for="golfer-2">Golfer</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-2" name="golfer-2" size="1">
                            <option value="">Select Golfer Type</option>
                            <!-- <option value="1">Golf Course Club Member</option> -->
                            <option value="2">Amex Card Member</option>
                            <!-- <option value="3">Basic Guest</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-membership-num-block-2">
                <div class="row">
                    <label class="col-xs-2" for="golfer-membership-num-2">Golfer Membership Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-membership-num-2" name="golfer-membership-num-2" placeholder="Enter Golfer Membership Number" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-card-type-block-2">
                <div class="row">
                    <label class="col-xs-2" for="golfer-card-type-2">Golfer Card Type</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-card-type-2" name="golfer-card-type-2" size="1">
                            <option value="">Select Card Type</option>
                            <option value="1">Platinum Reserve</option>
                            <option value="2">Centurion</option>
                            <option value="3">Charge</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-card-holder-type-block-2">
                <div class="row">
                    <label class="col-xs-2" for="golfer-card-holder-type-2">Golfer Card Holder Type</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-card-holder-type-2" name="golfer-card-holder-type-2" size="1">
                            <option value="">Select Card Holder Type</option>
                            <option value="1">Primary</option>
                            <option value="2">Supplementary</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-mobile-num-block-2">
                <div class="row">
                    <label class="col-xs-2" for="golfer-mobile-num-2">Golfer Mobile Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-mobile-num-2" name="golfer-mobile-num-2" placeholder="Enter Golfer Mobile Number" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-name-block-2">
                <div class="row">
                    <label class="col-xs-2" for="golfer-name-2">Golfer Name</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-name-2" name="golfer-name-2" placeholder="Enter Golfer Name" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-handicap-block-2">
                <div class="row">
                    <label class="col-xs-2" for="golfer-handicap-2">Golfer Handicap</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-handicap-2" name="golfer-handicap-2" placeholder="Enter Golfer Handicap" autocomplete="off">
                    </div>
                </div>
            </div>

            <hr class="hidden" id="golfer-2-part">

            <div class="form-group hidden" id="golfer-3-block">
                <div class="row">
                    <label class="col-xs-2" for="golfer-3">Golfer</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-3" name="golfer-3" size="1">
                            <option value="">Select Golfer Type</option>
                            <!-- <option value="1">Golf Course Club Member</option> -->
                            <option value="2">Amex Card Member</option>
                            <!-- <option value="3">Basic Guest</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-membership-num-block-3">
                <div class="row">
                    <label class="col-xs-2" for="golfer-membership-num-3">Golfer Membership Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-membership-num-3" name="golfer-membership-num-3" placeholder="Enter Golfer Membership Number" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-card-type-block-3">
                <div class="row">
                    <label class="col-xs-2" for="golfer-card-type-3">Golfer Card Type</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-card-type-3" name="golfer-card-type-3" size="1">
                            <option value="">Select Card Type</option>
                            <option value="1">Platinum Reserve</option>
                            <option value="2">Centurion</option>
                            <option value="3">Charge</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-card-holder-type-block-3">
                <div class="row">
                    <label class="col-xs-2" for="golfer-card-holder-type-3">Golfer Card Type</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-card-holder-type-3" name="golfer-card-holder-type-3" size="1">
                            <option value="">Select Card Holder Type</option>
                            <option value="1">Primary</option>
                            <option value="2">Supplementary</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-mobile-num-block-3">
                <div class="row">
                    <label class="col-xs-2" for="golfer-mobile-num-3">Golfer Mobile Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-mobile-num-3" name="golfer-mobile-num-3" placeholder="Enter Golfer Mobile Number" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-name-block-3">
                <div class="row">
                    <label class="col-xs-2" for="golfer-name-3">Golfer Name</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-name-3" name="golfer-name-3" placeholder="Enter Golfer Name" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-handicap-block-3">
                <div class="row">
                    <label class="col-xs-2" for="golfer-handicap-3">Golfer Handicap</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-handicap-3" name="golfer-handicap-3" placeholder="Enter Golfer Handicap" autocomplete="off">
                    </div>
                </div>
            </div>

            <hr class="hidden" id="golfer-3-part">

            <div class="form-group hidden" id="golfer-4-block">
                <div class="row">
                    <label class="col-xs-2" for="golfer-4">Golfer</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-4" name="golfer-4" size="1">
                            <option value="">Select Golfer Type</option>
                            <!-- <option value="1">Golf Course Club Member</option> -->
                            <option value="2">Amex Card Member</option>
                            <!-- <option value="3">Basic Guest</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-membership-num-block-4">
                <div class="row">
                    <label class="col-xs-2" for="golfer-membership-num-4">Golfer Membership Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-membership-num-4" name="golfer-membership-num-4" placeholder="Enter Golfer Membership Number" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-card-type-block-4">
                <div class="row">
                    <label class="col-xs-2" for="golfer-card-type-4">Golfer Card Type</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-card-type-4" name="golfer-card-type-4" size="1">
                            <option value="">Select Card Type</option>
                            <option value="1">Platinum Reserve</option>
                            <option value="2">Centurion</option>
                            <option value="3">Charge</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-card-holder-type-block-4">
                <div class="row">
                    <label class="col-xs-2" for="golfer-card-holder-type-4">Golfer Card Type</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="golfer-card-holder-type-4" name="golfer-card-holder-type-4" size="1">
                            <option value="">Select Card Holder Type</option>
                            <option value="1">Primary</option>
                            <option value="2">Supplementary</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-mobile-num-block-4">
                <div class="row">
                    <label class="col-xs-2" for="golfer-mobile-num-4">Golfer Mobile Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-mobile-num-4" name="golfer-mobile-num-4" placeholder="Enter Golfer Mobile Number" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-name-block-4">
                <div class="row">
                    <label class="col-xs-2" for="golfer-name-4">Golfer Name</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-name-4" name="golfer-name-4" placeholder="Enter Golfer Name" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class="form-group hidden" id="golfer-handicap-block-4">
                <div class="row">
                    <label class="col-xs-2" for="golfer-handicap-4">Golfer Handicap</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="golfer-handicap-4" name="golfer-handicap-4" placeholder="Enter Golfer Handicap" autocomplete="off">
                    </div>
                </div>
            </div>

            <hr class="hidden" id="golfer-4-part">

            <div class="form-group">
                <div class="row">
                    <label class="col-xs-2" for="booking-comment">Booking Comment</label>
                    <div class="col-xs-4">
                        <textarea class="form-control" id="booking-comment" name="booking-comment" rows="6" placeholder="Enter Booking Comment"></textarea>
                    </div>
                    <label class="col-xs-2" for="reference-num">Booking Reference Number</label>
                    <div class="col-xs-4">
                        <input class="form-control" type="text" id="reference-num" name="reference-num" placeholder="Enter Booking Reference Number" autocomplete="off">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-xs-2">
                        <button class="btn btn-sm btn-primary" id="create-booking-btn">Create</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- END Bootstrap Lock -->

<div class="block block-themed hidden" id="notification-msg-block">
    <div class="block-header bg-warning">
        <h3 class="block-title">Notification</h3>
    </div>
    <div class="block-content block-content-narrow">
        <div class="row">
            <div class="col-lg-8"><h5 id="notification-msg"></h5></div>
        </div>
        <br>
    </div>
</div>

</div>
</div> */ ?>

<!-- <div class="new-booking">

    <?php 
    Pjax::begin();
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'customerID')->textInput() ?>
    
    <?php if($model->multipleCards){ echo $form->field($model, 'cardtype')->textInput();  } ?>
   
  
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); 
    Pjax::end(); ?>

</div>new-booking -->