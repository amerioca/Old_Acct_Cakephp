<?php

App::uses('AppModel', 'Model','User');
class Barcode extends AppModel {
    public $name ='Barcode';
    public $useTable = array('users');
}

?>