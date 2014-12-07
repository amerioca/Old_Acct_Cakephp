<?php
/**
 * Created by JetBrains PhpStorm.
 * User: amerioca
 * Date: 12/7/14
 * Time: 11:14 AM
 * To change this template use File | Settings | File Templates.
 */

class SandboxesController extends AppController
{

    function newitem()
    {
        $this->layout = 'bevager';
    }


    function bevager()
    {
        $this->layout = 'bevager';
    }
}

?>