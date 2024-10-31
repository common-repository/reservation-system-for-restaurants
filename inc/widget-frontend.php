<?php
/**
 *  OTW Widget Frontend Display
 *
 * @description: Responsible for the frontend display of the Open Table Widget
 * @since      : 1.0
 * @created    : 9/10/13
 */
?>
<?php
if($widgetUrl) {
?>
<script type="text/javascript" src="https://s3.eu-central-1.amazonaws.com/bookiopro/assets/bookio.widget.js"></script>
<iframe id="bookio-iframe" src="<?php echo preg_replace('/&?lang=../', "", $widgetUrl); echo (strpos($widgetUrl, '?') ? "&" : "?"); ?>lang=<?php echo substr(get_locale(), 0, 2) ?><?php if($cssUrl){ echo "&css=",$cssUrl; } ?>"  width="100%" onload="initBookioWidget()" scrolling="no"></iframe>
<?php
  } else {
?>
<h3>BookioPro Reservation Widget - ERROR</h3>
<span>== Please set widget url ==</span>
<?php
  }
?>