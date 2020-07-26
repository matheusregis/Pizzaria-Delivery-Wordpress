<?php
/**
* This class contains some utilities needed for the plugin.
*
* @since     1.1.0

*/
class Glf_Mor_Utils{
    static public function glf_mor_get_shortcode($ruid, $type, $useCustomCss=false, $class="") {
        $code = '[';

        $code .= $type == 'reservations' ? 'restaurant-reservations' : 'restaurant-menu-and-ordering';
        $code .= ' ruid="' . $ruid . '"';

        if($useCustomCss) {
            $code .= ' class="' . $class . '"';
        }

        $code .= ']';
        return $code;
    }

    static public function  glf_mor_get_restaurants() {
        $restaurant_data_obj = get_option('glf_mor_restaurant_data');
        return isset($restaurant_data_obj->restaurants) ? $restaurant_data_obj->restaurants : null;
    }
}

?>