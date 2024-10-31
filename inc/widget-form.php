<?php
/*
 *  @description: Widget form options in WP-Admin
 *  @since 1.0
 *  @created: 08/08/13
 */

?>

<p>
	<label for="<?php echo $this->get_field_id( 'widget_url' ); ?>"><?php _e( 'Widget url', 'bookiopro-widget' ); ?>*:</label>
  <textarea class="widefat" id="<?php echo $this->get_field_id( 'widget_url' ); ?>" name="<?php echo $this->get_field_name( 'widget_url' ); ?>" ><?php echo $widgetUrl; ?></textarea>
  <span style="font-style:italic; font-size:12px">
    You have to register for free trial of online reservation system BookioPro. You get widget url in the last step of registration.
  </span>
  <a href="https://www.bookiopro.com/auth/register?&lang=<?php echo substr(get_locale(), 0, 2)?>&targetUri=/create-restaurant?wordpress=true" target="_blank" style="text-decoration:none; font-size:12px">Click here</a>
</p>
<p>
	<label for="<?php echo $this->get_field_id( 'css_url' ); ?>"><?php _e( 'CSS url', 'bookiopro-widget' ); ?>:</label>
	<textarea class="widefat" id="<?php echo $this->get_field_id( 'css_url' ); ?>" name="<?php echo $this->get_field_name( 'css_url' ); ?>"><?php echo $cssUrl; ?></textarea>
  <span style="font-style:italic; font-size:12px">
    CSS template, which you can use for your own design of the widget
  </span>
  <a href="https://s3.eu-central-1.amazonaws.com/bookiopro/assets/np-widget.template.css" target="_blank" style="text-decoration:none; font-size:12px">click here</a>
</p>
