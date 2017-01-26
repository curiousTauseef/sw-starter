<?php

class SocialList {

    private static $social_list = ['instagram', 'facebook', 'twitter', 'youtube', 'tripadvisor'];
    private static $socials_to_prepend_url = ['twitter', 'instagram'];

    public static function create_social_data_array() {
        $data = [];

        foreach (self::$social_list as $key => $item) {
            if (get_field($item, 'option')) {
                $data[$item] = in_array($item, self::$socials_to_prepend_url)
                ? 'http://' . $item . '.com/' . get_field($item, 'option')
                : get_field($item, 'option');
            }
        }

        return $data;
    }
}
