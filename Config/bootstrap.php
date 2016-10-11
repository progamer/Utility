<?php

CroogoNav::add('settings.children.clear_cache', [
        'title' => 'Celar Cache',
        'url'   => [
                'admin'      => true,
                'plugin'     => 'utility',
                'controller' => 'utilities',
                'action'     => 'clear_cache',
        ],
]);
