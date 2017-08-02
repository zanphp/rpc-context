<?php

use ZanPHP\Coroutine\Signal;
use ZanPHP\Coroutine\SysCall;
use ZanPHP\Coroutine\Task;
use ZanPHP\RpcContext\RpcContext;


function getRpcContext($key = null, $default = null)
{
    return new SysCall(function (Task $task) use($key, $default) {
        $context = $task->getContext();
        $rpcCtx = $context->get("rpc-context", null);
        if ($rpcCtx instanceof RpcContext) {
            $task->send($rpcCtx->get($key, $default));
        } else {
            $task->send($default);
        }

        return Signal::TASK_CONTINUE;
    });
}

function setRpcContext($key, $value)
{
    return new SysCall(function (Task $task) use ($key, $value) {
        $context = $task->getContext();
        $rpcCtx = $context->get("rpc-context", null);
        if ($rpcCtx instanceof RpcContext) {
            $rpcCtx = new RpcContext;
            $context->set("rpc-context", $rpcCtx);
        }
        $task->send($rpcCtx->set($key, $value));
        return Signal::TASK_CONTINUE;
    });
}