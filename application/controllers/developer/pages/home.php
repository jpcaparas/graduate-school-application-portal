<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends Developer_Pages_Controller {

    public function index() {
        redirect('developer/pages/landing');
    }

}