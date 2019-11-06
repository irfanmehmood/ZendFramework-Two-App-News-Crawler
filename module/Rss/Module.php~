<?php
namespace Rss;

use Rss\Model\Rss;
use Rss\Model\RssTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }


    // Add this method:
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Rss\Model\RssTable' =>  function($sm) {
                    $tableGateway = $sm->get('RssTableGateway');
                    $table = new RssTable($tableGateway);
                    return $table;
                },
                'RssTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Rss());
                    return new TableGateway('rss', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
}
