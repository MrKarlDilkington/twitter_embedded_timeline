<?php defined('C5_EXECUTE') or die('Access Denied.'); ?>

<a
class="twitter-timeline"
data-width="<?php if ($width) { echo $width; } ?>"
data-height="<?php if ($height) { echo $height; } ?>"
data-dnt="true"

data-chrome="<?php
if ($transparentBackground == 'transparent') {
    echo $transparentBackground . ' ';
}
if ($widgetHeader == 'noheader') {
    echo $widgetHeader . ' ';
}
if ($widgetBorder == 'noborders') {
    echo $widgetBorder . ' ';
}
if ($widgetScrollbar == 'noscrollbar') {
    echo $widgetScrollbar . ' ';
}
if ($widgetFooter == 'nofooter') {
    echo $widgetFooter;
}
?>"

data-tweet-limit="<?php if ($tweetsDisplayed) { echo $tweetsDisplayed; } ?>"
data-theme="<?php if ($widgetTheme) { echo $widgetTheme; } ?>"
data-link-color="<?php if ($linkColor) { echo $linkColor; } ?>"
data-border-color="<?php if ($borderColor) { echo $borderColor; } ?>"
href="https://twitter.com/<?php if ($twitterHandle) { echo $twitterHandle; } ?>"
>
Tweets by @<?php if ($twitterHandle) { echo $twitterHandle; } ?>
</a>

<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
