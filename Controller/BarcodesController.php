<?php

App::uses('BarcodeHelper', 'Vendor');

class BarcodesController extends AppController
{
    public $name = 'Barcodes';
    public $uses = array('User');

    //var $layout = 'ajax';

    function barcode($userId = null)
    {
        $this->layout = ('ajax');
        // sample data to encode
        if (!empty($userId)) {
            $user = $this->User->find('first',
                array(
                    'conditions' => array('User.id' => $userId), //array of conditions
                    'recursive' => 1, //int
                    'fields' => array('User.username')));
            $phone = $user['User']['username'];

            $data_to_encode = strrev($user['User']['username']);
            $data_to_encode = ($data_to_encode + 21461034);
            $data_to_encode = dechex($data_to_encode);
            /*
    //        debug($data_to_encode);
            $zero = substr_count($phone, '0');
            switch($zero){
                case 3: $data_to_encode = str_replace(0, ')', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(0, 'a', $data_to_encode); break;
                case 5: $data_to_encode = str_replace(0, 'A', $data_to_encode); break;
            }$one = substr_count($phone, '1');
            switch($one){
                case 3: $data_to_encode = str_replace(1, '!', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(1, 'b', $data_to_encode); break;
                case 5: $data_to_encode = str_replace(1, 'B', $data_to_encode); break;
            }$two = substr_count($phone, '2');
            switch($two){
                case 3: $data_to_encode = str_replace(2, '@', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(2, 'c', $data_to_encode); break;
                case 5: $data_to_encode = str_replace(2, 'C', $data_to_encode); break;
            }$three = substr_count($phone, '3');
            switch($three){
                case 3: $data_to_encode = str_replace(3, '#', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(3, 'd', $data_to_encode); break;
                case 5: $data_to_encode = str_replace(3, 'D', $data_to_encode); break;
            }$four = substr_count($phone, '4');
            switch($four){
                case 2: $data_to_encode = str_replace(4, '$', $data_to_encode); break;
                case 3: $data_to_encode = str_replace(4, 'e', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(4, 'E', $data_to_encode); break;
            }$five = substr_count($phone, '5');
            switch($five){
                case 2: $data_to_encode = str_replace(5, '<', $data_to_encode); break;
                case 3: $data_to_encode = str_replace(5, 'f', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(5, 'F', $data_to_encode); break;
            }$six = substr_count($phone, '6');
            switch($six){
                case 2: $data_to_encode = str_replace(6, '>', $data_to_encode); break;
                case 3: $data_to_encode = str_replace(6, 'g', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(6, 'G', $data_to_encode); break;
            }$seven = substr_count($phone, '7');
            switch($seven){
                case 2: $data_to_encode = str_replace(7, '&', $data_to_encode); break;
                case 3: $data_to_encode = str_replace(7, 'h', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(7, 'H', $data_to_encode); break;
            }$eight = substr_count($phone, '8');
            switch($eight){
                case 2: $data_to_encode = str_replace(8, '*', $data_to_encode); break;
                case 3: $data_to_encode = str_replace(8, 'i', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(8, 'I', $data_to_encode); break;
            }$nine = substr_count($phone, '9');
            switch($nine){
                case 2: $data_to_encode = str_replace(9, '(', $data_to_encode); break;
                case 3: $data_to_encode = str_replace(9, 'j', $data_to_encode); break;
                case 4: $data_to_encode = str_replace(9, 'J', $data_to_encode); break;
            }*/


            $barcode = new BarcodeHelper();

            // Generate Barcode data
            $barcode->barcode();
            $barcode->setType('C128');
            //$barcode->setCode($data_to_encode);
            $barcode->setCode($phone);
            $barcode->setText($phone);
            //$barcode->setSize(70,240);
            $barcode->setSize(65, 173);

            // Generate filename
            $random = rand(0, 1000000);
            $file = 'img/barcode/' . $phone . '.png';
            $this->set(array('image' => $file));
            // Generates image file on server
            $barcode->writeBarcodeFile($file);
            // Brother_HL_2270DW_series-2
            // Brother_QL_700
            exec('open -a Preview 5521969775363.png', $lpr);
            //exec('lp -d Brother_QL_700 /Users/amerioca/Sites/acct.clublove.me/webroot/'.$file, $lpr);
            //debug($lpr);
//        debug($data_to_encode);
//        $data_to_encode = hexdec($data_to_encode);
//        $data_to_encode = $data_to_encode - 21461034;
//        $data_to_encode = strrev($data_to_encode);
//        debug($data_to_encode);
        } else {
            echo 'NO USER ID';
            die;
        }
    }

    function bottles()
    {
        // CM = 28.3 PIX
        $this->labelLength = 22;
        $this->labelCount = 22;
        $this->WIDTH = 76; //34
        $this->HEIGHT = 632;
        $product = 'JD';
        $file = 'img/bottles/' . $product . '.png';

        $spacing = ($this->labelLength * 28) / $this->labelCount;
        debug($spacing);
        /**
         * Create Image Code
         */

        //Initilize Image
        $txtPosX = $posX = intval(($this->WIDTH - $this->CODEWIDTH) / 2); // position X
        $posY = 0; // position Y
        $intL = 1; // largeur de la barre

        // detruire eventuellement l'image existante
        if ($this->IH) imagedestroy($this->IH);

        $this->IH = imagecreate($this->WIDTH, $this->HEIGHT);

        // colors
        $color[0] = ImageColorAllocate($this->IH, 255, 255, 255);
        $color[1] = ImageColorAllocate($this->IH, 0, 0, 0);
        $color[2] = ImageColorAllocate($this->IH, 160, 160, 160); // greyed

        imagefilledrectangle($this->IH, 0, 0, $this->WIDTH, $this->HEIGHT, $color[0]);

        for ($x = 0; $x <= $this->labelCount; $x++) {
            $position = $x * $spacing;
            imagestring($this->IH, 5, 0, $position, "_" . str_pad($x, 2, 0, STR_PAD_LEFT) . "__", $color[1]);
            imagestring($this->IH, 5, 27 * 1.5, $position, "_" . str_pad($x, 2, 0, STR_PAD_LEFT) . "__", $color[1]);
        }
        if ($this->FILETYPE == 'GIF') imagegif($this->IH, $file);
        elseif ($this->FILETYPE == 'JPG') imagejpeg($this->IH, $file); else                              imagepng($this->IH, $file);
        $this->set(array('image' => $file));

    }

    function check()
    {

    }
}


?>