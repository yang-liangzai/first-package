<?php
namespace yangbg\FirstPackage;

/**
 * 
 */
class FirstPackage
{
    
    public function get_time(){
        return date('Y-m-d H:i:s');
    }

    public function hello(){
        return 'hello world';
    }
}

?>