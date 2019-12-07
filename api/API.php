<?php
/**
 * Created by PhpStorm.
 * User: maulidan
 * Date: 07/12/19
 * Time: 9:58
 */

namespace api;

require_once $_SERVER['DOCUMENT_ROOT'] . 'config/api.php';

class API
{
    public static function post($url, $data){
        $curl = \curl_init();

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: basic ' . base64_encode(API_SECRET_KEY . ':'),
            'Content-Type: application/x-www-form-urlencoded',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($curl);

        if(!$result){die("Connection Failure");}

        curl_close($curl);

        return json_decode($result, true);
    }

    public static function get($url){
        $curl = \curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: basic ' . base64_encode(API_SECRET_KEY . ':'),
            'Content-Type: application/x-www-form-urlencoded',
        ));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $result = curl_exec($curl);

        if(!$result){die("Connection Failure");}

        curl_close($curl);

        return json_decode($result, true);
    }
}