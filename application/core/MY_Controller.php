<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 * Description of MY_Controller
 *
 * reference : https://packagist.org/packages/codinghamster/codeigniter-modular-extensions-hmvc
 * 
 * @author Majoo Dev Team
 * @author Bayu Anggara Saputra
 * @version 0.0.1
 */

use GuzzleHttp\Client;

class MY_Controller extends MX_Controller {
   public function __construct()
   {
        // echo '<pre>';
        // exit(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
        
        $module = $this->router->fetch_module() ?? '';
        $class = $this->router->fetch_class();
        $method = $this->router->fetch_method();
   }
}
