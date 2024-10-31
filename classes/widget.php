<?php

/**
 *  BookioPro Widget
 *
 * @description: BookioPro Widget
 * @since      : 1.0
 * @created    : 5/30/16
 */
class Bookiopro_Widget extends WP_Widget
{

    public function __construct()
    {
        parent::__construct(
            'bp_widget', // Base ID
            'BookioPro Widget', // Name
            array(
                'classname' => 'bookiopro-widget',
                'description' => __('Online reservation form.', 'bookiopro-widget')
            )
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args Widget arguments.
     * @param array $instance Saved values from database.
     */
    function widget($args, $instance)
    {
        extract($args);

        $widgetUrl = empty($instance['widget_url']) ? '' : $instance['widget_url'];
        $cssUrl = empty($instance['css_url']) ? '' : $instance['css_url'];
        $localSettings = localeconv();
        $locale = lang;
        ?>

        <div class="bp-widget">

            <?php include(BP_PLUGIN_PATH . '/inc/widget-frontend.php'); ?>

        </div>
        <?php

    }

    /**
     * @DESC: Saves the widget options
     * @SEE WP_Widget::update
     */
    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['widget_url'] = strip_tags($new_instance['widget_url']);
        $instance['css_url'] = strip_tags($new_instance['css_url']);

        return $instance;
    }

    /**
     * Back-end widget form.
     * @see WP_Widget::form()
     */
    function form($instance)
    {
        $widgetUrl = empty($instance['widget_url']) ? '' : esc_attr($instance['widget_url']);
        $cssUrl = empty($instance['css_url']) ? '' : esc_attr($instance['css_url']);

        $widgetPath = BP_PLUGIN_PATH . '/inc/widget-form.php';
        if (file_exists($widgetPath)) {
            include($widgetPath);
        }


    }
}