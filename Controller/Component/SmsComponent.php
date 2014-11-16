<?php
/**
 * --- SMS Component ---
 * Github: https://github.com/steven/Cakephp-2.0.Component-SMS
 * Sends a SMS message to a phone number
 *
 * @author Steven Thompson <steven@fantasmagorical.co.uk>
 */

class SmsComponent extends Component {

    //var $apiUrl = 'http://www.txtlocal.com/sendsmspost.php';
    var $apiUrl = 'http://api.clickatell.com/http/sendmsg?';
    var $username = 'neorio2000'; // Your txtlocal.com account username/email address
    var $password = 'CSVCRNDLLKLOfY'; // Your txtlocal.com account password
    var $from = 'Club Trap!'; // e.g. your company name
    var $id = '3501667';


    // If the test flag is set then no message will be sent but will display your in you txtlocal control panel
    function send($number, $message = 'This is a test message', $test = 0){

        $message = urlencode($message);

        // Prepare data for POST request
        //$data = "uname=".$this->username."&pword=".$this->password."&message=".$message."&from=".$this->from."&selectednums=".$number."&info=1&test=".$test;
        $data = "uname=".$this->username."&password=".$this->password."&id=".$this->id."&to=".$number."&text=".$message;
        // Send the POST request with cURL
        $ch = curl_init($this->apiUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //This is the result from Txtlocal
        var_dump($data); die;
         if(curl_exec($ch)){ return true; } else { return false; }


        /*

http://api.clickatell.com/http/sendmsg?user=neorio2000&password=[PASSWORD]&api_id=3501667&to=5521969775363&text=Message

10.00
test credits in your account
All Countries and Networks we cover
Credits
& Payments Buy Clickatell Credits
*/
    }
}
