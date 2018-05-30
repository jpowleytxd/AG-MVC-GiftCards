<?php

/**
 * ------------------------------------------------
 * ZMT - MVC GiftCard Widget
 * ------------------------------------------------
 * Generic Library
 * -----------------------------------------------
 * @desc    - Contains generic functions to be 
 *            used in multiple locations
 * -----------------------------------------------
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Generics{

    /**
     * loadSystemConfig()
     * @desc - Loads in the system config from root
     * @return {Object}
     */
    public function loadSystemConfig(){
        // Load in the config from root
        $configurationJSON = file_get_contents('../config.json');
        $configurationJSON = json_decode($configurationJSON);

        // Return the configuration
        return $configurationJSON;
    }
}

?>