<?php

function test_helper() {
    return 'OK';
}

// curl POST
function curl_post( $url_method, $data )
{
    // $url_server = env('CT_URL');

    // $url = $url_server . $url_method;
    $url = $url_method;

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => ['X-Requested-With:XMLHttpRequest'],
    ));

    $response = curl_exec($curl);

    if ($response === FALSE) {
        return ("cURL Error: " . curl_error($curl));
    }
    curl_close($curl);


    return json_decode($response, true);
}

// curl GET
function curl_get( $url_method, $data )
{
    $url = $url_method;

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => ['X-Requested-With:XMLHttpRequest'],
    ));

    $response = curl_exec($curl);

    if ($response === FALSE) {
        return ("cURL Error: " . curl_error($curl));
    }
    curl_close($curl);

    return json_decode($response, true);
}

// curl PUT
function curl_put( $url_method, $data )
{
    $url = $url_method;

    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_HTTPHEADER => ['X-Requested-With:XMLHttpRequest'],
    ));

    $response = curl_exec($curl);

    if ($response === FALSE) {
        return ("cURL Error: " . curl_error($curl));
    }
    curl_close($curl);

    return json_decode($response, true);
}

function SockPost( $URL, $Query )
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $URL);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $Query);
    $SSL = (substr($URL, 0, 8) == "https://" ? true : false);
    if ($SSL) {
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    }
    $strReturn = curl_exec($ch);

    curl_close ($ch);

    return $strReturn;
}

// 显示日期到毫秒
function udate($format = 'u', $utimestamp = null)
{
    if (is_null($utimestamp)){
        $utimestamp = microtime(true);
    }
    $timestamp = floor($utimestamp);
    $milliseconds = round(($utimestamp - $timestamp) * 1000000);//改這裡的數值控制毫秒位數

    return date(preg_replace('`(?<!\\\\)u`', $milliseconds, $format), $timestamp);
}


