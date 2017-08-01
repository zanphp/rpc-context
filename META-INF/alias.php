<?php


return [
    \ZanPHP\HttpClient\HttpClient::class => "\\Zan\\Framework\\Network\\Common\\HttpClient",
    \ZanPHP\HttpClient\Response::class => "\\Zan\\Framework\\Network\\Common\\Response",
    \ZanPHP\HttpClient\Exception\HostNotFoundException::class => "\\Zan\\Framework\\Network\\Common\\Exception\\HostNotFoundException",
    \ZanPHP\HttpClient\Exception\HttpClientTimeoutException::class => "\\Zan\\Framework\\Network\\Common\\Exception\\HttpClientTimeoutException",
];