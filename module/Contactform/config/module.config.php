<?php
  return array(     
      'router' => array(
          'routes'      => array(
              'home' => array(
                  'type' => 'Zend\Mvc\Router\Http\Literal',
                  'options' => array(
                      'route'   => '/contactform',
                      'defaults' => array(
                          'controller' => 'Contactform\Controller\Index',
                          'action'     => 'index',
                      )
                  )
              )
          )
      ),
      
      'controllers' => array(
          'invokables' => array(
              'Contactform\Controller\Index'
              => 'Contactform\Controller\IndexController',
          )
      ),
      
      'translator' => array(
          'locale' => 'en_US',
          'translation_file_patterns' => array(
              array(
                  'type'     => 'gettext',
                  'base_dir' => __DIR__ . '/../language',
                  'pattern'  => '%s.mo',
              ),
          ),
      ),
      
      
     'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
      
  );