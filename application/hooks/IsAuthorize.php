<?php 

class IsAuthorize extends MY_Controller
{
    public function __construct()
    {
        echo '<pre>';
    exit(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
    
        $module = $this->router->fetch_module() ?? '';
        $class = $this->router->fetch_class();
        $method = $this->router->fetch_method();
    }
    public function authorize()
    {
        echo '<pre>';
        exit(__FILE__.'@@'.__CLASS__.'@'.__METHOD__.'@'.__LINE__);
        
    }

}
