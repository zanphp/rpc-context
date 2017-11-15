<?php

namespace Zan\Framework\Network\Tcp;

class RpcContext
{
    private $RpcContext;

    public function __construct()
    {
        $this->RpcContext = new \ZanPHP\RpcContext\RpcContext();
    }

    public function get($key = null, $default = null)
    {
        $this->RpcContext->get($key, $default);
    }

    public function set($key, $value)
    {
        $this->RpcContext->set($key, $value);
    }

    public function merge($ctx, $override = true)
    {
        $this->RpcContext->merge($ctx, $override);
    }

    public function unpackNovaAttach($novaAttach)
    {
        $this->RpcContext->unpackNovaAttach($novaAttach);
    }

    public function packNovaAttach()
    {
        $this->RpcContext->packNovaAttach();
    }
}