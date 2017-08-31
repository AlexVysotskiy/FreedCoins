<?php

return [
    'router' => array(
        'class' => '\Core\Http\Router',
        'calls' => array(
            'setConfigType' => array('php'),
            'setDefaultRoute' => array('default'),
            'setRequest' => array('@request'),
        )
    ),
    'request' => array(
        'class' => '\Core\Http\Request',
        'calls' => array(
            'setSession' => array('@session'),
            'setCookie' => array('@cookie'),
        )
    ),
    'session' => array(
        'class' => '\Core\Http\Request\Session',
    ),
    'cookie' => array(
        'class' => '\Core\Http\Request\Cookie'
    ),
    'template_renderer' => array(
        'class' => '\Core\Http\Renderer'
    ),
];
