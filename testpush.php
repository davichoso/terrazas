<?php

$notification = [
    "title" => "Las Terrazas",
    "body" => "Esta es una prueba",
    "sound" => "default",
    "click_action" => "FCM_PLUGIN_ACTIVITY",
    "icon" => "fcm_push_icon"
];

$data = array
(
    'title' => 'Las Terrazas',
    'body' => 'Pruebas',
);

//$data = array_merge($data,$datos);

$fields = [
    'notification' => $notification,
    'data' => $data,
    'to' => '/topics/all',
];

define('API_ACCESS_KEY', 'AAAALEuOSYA:APA91bGEEN5uOPZD5bN9sS-kFqIXPveDltde70Vk7Jc61GZ6IPG5uxO9hTHjWNOh56xYydpyHrczeOuMCnnKbYGTZeQwNJ5r-bJl8kuOtsLGmUVs--9QBPr16V1Hkb1NbdhTAeV8UeYT');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Authorization: key=' . API_ACCESS_KEY]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
$result = curl_exec($ch);
curl_close($ch);
return $result;