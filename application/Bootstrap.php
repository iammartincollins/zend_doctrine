<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    /**
     * Initialises the ORM and DBAL.
     *
     * @return Doctrine\ORM\EntityManager
     */
    protected function _initDoctrine()
    {        
        array_map(function($loader) {            
            $loader->register();
        }, array(
            new Doctrine\Common\ClassLoader('Doctrine\DBAL'),
            new Doctrine\Common\ClassLoader('Doctrine\Common'),
            new Doctrine\Common\ClassLoader('Doctrine\ORM'),
            new Doctrine\Common\ClassLoader('Symfony', 'Doctrine'),
            new Doctrine\Common\ClassLoader('App', 'Application\Models'),
        ));

        $options = $this->getOptions();
        $options = $options['doctrine'];

        //$cache  = new $options['cache']['class'];
        $config = new Doctrine\ORM\Configuration();
        //$config->setMetadataCacheImpl($cache);
        //$config->setResultCacheImpl($cache);
        $config->setAutoGenerateProxyClasses($options['proxy']['autoGenerate']);
        $config->setProxyDir(APPLICATION_PATH . '/application/models/Proxy'); // /Proxy here?
        $config->setProxyNamespace('Proxy');
        $config->setMetadataDriverImpl(
            new Doctrine\ORM\Mapping\Driver\YamlDriver(
                APPLICATION_PATH . '/configs/entities',
                '.yml'
            )
        );

        $em = Doctrine\ORM\EntityManager::create($options['db'], $config, new Doctrine\Common\EventManager());
        Zend_Registry::set('em', $em);

        return $em;
    }

    public function _initRoute()
    {    
        $route = new Zend_Controller_Router_Route(
            'category/:id', array(
                'controller' => 'category',
                'action'     => 'get'
            )
        );
        
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $router->addRoute('cat', $route); 

        $route = new Zend_Controller_Router_Route(
            'product/:id', array(
                'controller' => 'product',
                'action'     => 'get'
            )
        );
        
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $router->addRoute('prod', $route);
    }

}

