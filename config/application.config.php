<?php
return array(
    'modules' => array(
        'Album',
        'Auth',
    ),

    'module_listener_options' => array(
        'config_glob_paths'    => array(
           'C:/Apache24/htdocs/ZendSkeletonApplication-master/config' . '/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);