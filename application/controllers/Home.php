<?php

/**
 * ------------------------------------------------
 * ZMT - MVC GiftCard Widget
 * ------------------------------------------------
 * Default / Home Controller
 * ------------------------------------------------
 */

class Home extends CI_CONTROLLER{

    /**
     * __construct()
     * @desc - Home controller constructor
     */
    public function __construct(){
        parent::__construct();

        // Load helpers
        $this->load->helper('url_helper');

        // Load libraries
        $this->load->library('session');
        $this->load->library('generics');
    }

    /**
     * index()
     * @desc - Default home view
     */
    public function index(){
        // Direct to default zonal view -> Setup data array
        $data['title'] = "Zonal Marketing Technologies";
        $data['view'] = "home";

        // Load the view
        $this->load->view('zonal/index', $data);
    }

    /**
     * noPage()
     * @desc - Displays a 404 page
     */
    public function noPage(){
        // Direct to 404 page -> Setup data array
        $data['title'] = "404 - Page Not Found";
        $data['view'] = "error";
        $data['mainHeading'] = "Zonal Marketing Technologies";
        $data['subHeading'] = "404 - Page Not Found";

        // Load the view
        $this->load->view('zonal/index', $data);
    }

    /**
     * error()
     * @desc - Display an error page with text passed through
     */
    public function error(){
        // Initialise error variables
        $data['title'] = "Error";
        $data['view'] = "error";
        $data['mainHeading'] = "An error has occured:";
        $data['subHeading'] = "Unknown Error";
        
        // Load the view
        $this->load->view('zonal/index', $data);
    }


}

?>