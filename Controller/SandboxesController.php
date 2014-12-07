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

    function home()
    {
        $this->layout = 'ajax';
    }

    function login()
    {
        $this->layout = 'ajax';
        $this->Session->setFlash(__('Incorrect username or password. Please try again'));
        $this->set('alert', 1);
    }

    function diff(){
        $this->layout = 'ajax';
    }


}

?>