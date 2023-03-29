<?php defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends MY_Controller
{
    public function index()
    {
        echo '<pre>';
        var_dump(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
        Modules::run('auth/Authorization/index');
        exit(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
        
    } 
    
    public function test()
    {
        // echo '<pre>';
        // var_dump(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
        // $this->load->constant('auth');
        // $this->load->model('auth/AuthModel');
        // var_dump(MAX_EXPIRED);
        // var_dump((new AuthModel));
        // exit(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
        
    } 
    public function testloadfile()
    {
        // Modules::load_file($file, $path, $type = 'other', $result = TRUE)	
    }

}