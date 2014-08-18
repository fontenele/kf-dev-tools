<?php

require_once(__DIR__ . '/../controller/DevTools.php');

return [
    'system' => [
        'view' => [
            'afterRenderLayout' => [
                new \Kf\View\Html\Renderer('\KfDevTools\Controller\DevTools::createToolbar')
            ]
        ]
    ]
];
