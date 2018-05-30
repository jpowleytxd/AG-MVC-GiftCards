<?php

/**
 * ------------------------------------------------
 * ZMT - MVC GiftCard Widget
 * ------------------------------------------------
 * Widget Controller
 * ------------------------------------------------
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Widget extends CI_CONTROLLER{

    /**
     * Class Variables
     */
    public $config;
    public $clientConfig;
    public $widgetData = array();

    /**
     * __construct()
     * @desc - Home controller constructor
     */
    public function __construct(){
        parent::__construct();

        // Load helpers
        $this->load->helper('url');

        // Load libraries
        $this->load->library('session');
        $this->load->library('generics');

        // Load the needed models
        // $this->load->model('validation_model');

        // Initialize the class variables
        $this->config = $this->generics->loadSystemConfig();
    }

    /**
     * index()
     * @desc - Initial widget page
     * @param {String} $company         - Company the widget needs to retrieve config from
     */
    public function index($company = null){
        // Check that the company has been passed into the widget
        if(!isset($company) || empty($company)){
            // Company is not set -> Can't get config file -> 404
            header('location: /404');
        }

        
    }

}