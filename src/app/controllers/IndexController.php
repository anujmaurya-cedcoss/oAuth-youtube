<?php

namespace App\Controllers;

use Phalcon\Mvc\Controller;

session_start();

class IndexController extends Controller
{
    public function indexAction()
    {
        // redirected to view
    }

    public function getVideoIdAction()
    {
        $curl = curl_init();
        $id = $_POST['name'];
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$id",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'key: Authorization',
                'Value: Bearer ya29.a0AWY7CkmPAwv47XVMIsCZOUMSjUbQk1pD5joDsdLw3rXbBjq7gzQZjfmouZr_A8G8u5-CAf2BvC_v2YVp1j0OFVusyDPNtghBv6iLlgtEs2pPo9uO0y1TKK27QkdniPwe1aQTshWFxnZ93A5CyD7E9MoiDhocd-QaCgYKAckSARMSFQG1tDrp5zP97faJo8zv7SqtXE0kzA0166',
                'Authorization: Bearer ya29.a0AWY7CkmPAwv47XVMIsCZOUMSjUbQk1pD5joDsdLw3rXbBjq7gzQZjfmouZr_A8G8u5-CAf2BvC_v2YVp1j0OFVusyDPNtghBv6iLlgtEs2pPo9uO0y1TKK27QkdniPwe1aQTshWFxnZ93A5CyD7E9MoiDhocd-QaCgYKAckSARMSFQG1tDrp5zP97faJo8zv7SqtXE0kzA0166'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo "<pre>";
        print_r($response);
        die;
    }
}
