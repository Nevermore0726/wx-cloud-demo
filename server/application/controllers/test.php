<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {
    public function test() {
        echo _GET["fname"];
        echo _GET["fage"];
    }
}