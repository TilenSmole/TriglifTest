<?php
//this function gets the data from API
function getData() {
    $url = 'https://3gl-hr-api.azurewebsites.net/v1/messenger';
    $response = file_get_contents($url);
    return $response;
}

echo getData();


