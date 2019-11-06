<?php

namespace RssTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class RssControllerTest extends AbstractHttpControllerTestCase
{
    protected $traceError = true;
    public function setUp()
    {
        $this->setApplicationConfig(
            include '/var/www/zendtwo/config/application.config.php'
        );
        //$this->inputFilter = new MyInputFilter();
        parent::setUp();
        
    }
    
    
    public function testIndexActionCanBeAccessed()
    {
        $rssTableMock = $this->getMockBuilder('Rss\Model\RssTable')
                                ->disableOriginalConstructor()
                                ->getMock();

        $rssTableMock->expects($this->once())
                        ->method('fetchAll')
                        ->will($this->returnValue(array()));

        $serviceManager = $this->getApplicationServiceLocator();
        $serviceManager->setAllowOverride(true);
        $serviceManager->setService('Rss\Model\RssTable', $rssTableMock);

        $this->dispatch('/rss');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Rss');
        $this->assertControllerName('Rss\Controller\Rss');
        $this->assertControllerClass('RssController');
        $this->assertMatchedRouteName('rss');
    }
    
    
    public function testAddActionRedirectsAfterValidPost()
    {
        $rssTableMock = $this->getMockBuilder('Rss\Model\RssTable')
                                ->disableOriginalConstructor()
                                ->getMock();

        $rssTableMock->expects($this->once())
                        ->method('saveRss')
                        ->will($this->returnValue(null));

        $serviceManager = $this->getApplicationServiceLocator();
        $serviceManager->setAllowOverride(true);
        $serviceManager->setService('Rss\Model\RssTable', $rssTableMock);

        $postData = array('title' => 'Led Zeppelin III', 'name' => 'Led Zeppelin', 'url' => 'www.google.co.uk');
        $this->dispatch('/rss/add', 'POST', $postData);
        $this->assertResponseStatusCode(302);

        $this->assertRedirectTo('/rss/');
    }
}