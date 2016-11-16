<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<style>
.two-columns {
    width: 50%;
    float: left;
}
.four-columns {
    width: 25%;
    float: left;
}
.clear-both {
    clear: both;
}
.input-group-px {
    width: 130px;
}
</style>

<!-- Twitter Handle -->
<div class="form-group">
    <?php echo $form->label('twitterHandle', t('Twitter Handle'));?>
    <div class="input-group">
        <span class="input-group-addon"><?php echo t('@'); ?></span>
        <?php echo $form->text('twitterHandle', $twitterHandle, array('placeholder' => t('your_name')))?>
    </div>
</div>

<!-- Tweets Displayed -->
<div class="form-group two-columns">
    <?php echo $form->label('tweetsDisplayed', t('Tweets Displayed'));?>
    <i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?php echo t("'Tweets Displayed' set to default will show a scrollable list of all tweets. When 'Tweets Displayed' is limited to a certain number, the list of tweets is not scrollable."); ?>"></i>
    <?php echo $form->select('tweetsDisplayed', array(
        '0' => 'default', '1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6',
        '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12', '13' => '13',
        '14' => '14', '15' => '15', '16' => '16', '17' => '17', '18' => '18', '19' => '19', '20' => '20'
        ), $tweetsDisplayed, array('style' => 'width: 125px;')); ?>
</div>

<!-- Widget Theme -->
<div class="form-group two-columns">
    <?php echo $form->label('widgetTheme', t('Widget Theme'));?>
    <?php echo $form->select('widgetTheme', array('light' => t('light'), 'dark' => t('dark')), $widgetTheme, array('style' => 'width: 125px;')); ?>
</div>

<!-- Transparent Background -->
<div class="form-group two-columns">
    <?php echo $form->label('transparentBackground', t('Transparent Background'));?>
    <?php echo $form->select('transparentBackground', array('transparent' => t('on'), 'off' => t('off')), $transparentBackground, array('style' => 'width: 125px;')); ?>
</div>

<!-- Widget Header -->
<div class="form-group two-columns">
    <?php echo $form->label('widgetHeader', t('Widget Header'));?>
    <?php echo $form->select('widgetHeader', array('on' => t('on'), 'noheader' => t('off')), $widgetHeader, array('style' => 'width: 125px;')); ?>
</div>

<!-- Widget Border -->
<div class="form-group two-columns">
    <?php echo $form->label('widgetBorder', t('Widget Border'));?>
    <?php echo $form->select('widgetBorder', array('on' => t('on'), 'noborders' => t('off')), $widgetBorder, array('style' => 'width: 125px;')); ?>
</div>

<!-- Widget Footer -->
<div class="form-group two-columns">
    <?php echo $form->label('widgetFooter', t('Widget Footer'));?>
    <?php echo $form->select('widgetFooter', array('on' => t('on'), 'nofooter' => t('off')), $widgetFooter, array('style' => 'width: 125px;')); ?>
</div>

<!-- Widget Scrollbar -->
<div class="form-group two-columns">
    <?php echo $form->label('widgetScrollbar', t('Widget Scrollbar'));?>
    <i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?php echo t("The scrollbar can only be enabled or disabled when 'Tweets Displayed' is set to default. The widget is still scrollable even without the scrollbar, if 'Tweets Displayed' is set to default."); ?>"></i>
    <?php echo $form->select('widgetScrollbar', array('on' => t('on'), 'noscrollbar' => t('off')), $widgetScrollbar, array('style' => 'width: 125px;')); ?>
</div>

<!-- Link Color -->
<div class="form-group four-columns clear-both">
    <?php  echo '<label class="control-label">Link Color</label>'; ?>
    <br>
    <?php
    $color = Core::make('helper/form/color');
    $color->output('linkColor', $linkColor ? $linkColor : "#000000", array('preferredFormat'=>'hex'));
    ?>
</div>

<!-- Border Color -->
<div class="form-group four-columns">
    <?php  echo '<label class="control-label">Border Color</label>'; ?>
    <br>
    <?php
    $color = Core::make('helper/form/color');
    $color->output('borderColor', $borderColor ? $borderColor : "#000000", array('preferredFormat'=>'hex'));
    ?>
</div>

<!-- Height -->
<div class="form-group two-columns clear-both">
    <?php echo $form->label('height', t('Height'));?>
    <i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?php echo t("The minimum height is 200px. When a height is not set, or set to 0, the height will be unrestricted. Height can only be set when 'Tweets Displayed' is set to default."); ?>"></i>
    <div class="input-group input-group-px">
        <?php echo $form->number('height', $height, array('min' => 0))?>
        <span class="input-group-addon"><?php echo t('px'); ?></span>
    </div>
</div>

<!-- Width -->
<div class="form-group two-columns">
    <?php echo $form->label('width', t('Width'));?>
    <i class="fa fa-question-circle launch-tooltip" title="" data-original-title="<?php echo t('The minimum width is 180px. The maximum width is 1200px. When a width is not set, or set to 0, the width will be 100%.'); ?>"></i>
    <div class="input-group input-group-px">
        <?php echo $form->number('width', $width, array('min' => 0))?>
        <span class="input-group-addon"><?php echo t('px'); ?>
    </div>
</div>

