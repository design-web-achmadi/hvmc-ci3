<?php

class MY_Loader extends MX_Loader {

    public function constant($module = null)
    {
        $module = $module??$this->_module;
        list($path, $file) = Modules::find('constants', $module , 'config/');

        /* module constants file */
        if ($path != FALSE)
        {
            include_once $path.$file.EXT;
        }
    }
}