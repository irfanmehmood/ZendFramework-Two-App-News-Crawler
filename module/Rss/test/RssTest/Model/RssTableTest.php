<?php
namespace RssTest\Model;

use Rss\Model\RssTable;
use Rss\Model\Rss;
use Zend\Db\ResultSet\ResultSet;
use PHPUnit_Framework_TestCase;

class RssTableTest extends PHPUnit_Framework_TestCase
{
    public function testFetchAllReturnsAllRsss()
    {
        $resultSet = new ResultSet();
        $mockTableGateway = $this->getMock('Zend\Db\TableGateway\TableGateway',
                                           array('select'), array(), '', false);
        $mockTableGateway->expects($this->once())
                         ->method('select')
                         ->with()
                         ->will($this->returnValue($resultSet));

        $rssTable = new RssTable($mockTableGateway);

        $this->assertSame($resultSet, $rssTable->fetchAll());
    }

public function testCanRetrieveAnRssByItsId()
{
    $rss = new Rss();
    $rss->exchangeArray(array('id'     => 123,
                                'name' => 'The Military Wives',
                                'title'  => 'In My Dreams',
				'url'  => 'www.google.co.uk'));

    $resultSet = new ResultSet();
    $resultSet->setArrayObjectPrototype(new Rss());
    $resultSet->initialize(array($rss));

    $mockTableGateway = $this->getMock('Zend\Db\TableGateway\TableGateway', array('select'), array(), '', false);
    $mockTableGateway->expects($this->once())
                     ->method('select')
                     ->with(array('id' => 123))
                     ->will($this->returnValue($resultSet));

    $rssTable = new RssTable($mockTableGateway);

    $this->assertSame($rss, $rssTable->getRss(123));
}

public function testCanDeleteAnRssByItsId()
{
    $mockTableGateway = $this->getMock('Zend\Db\TableGateway\TableGateway', array('delete'), array(), '', false);
    $mockTableGateway->expects($this->once())
                     ->method('delete')
                     ->with(array('id' => 123));

    $rssTable = new RssTable($mockTableGateway);
    $rssTable->deleteRss(123);
}

public function testSaveRssWillInsertNewRsssIfTheyDontAlreadyHaveAnId()
{
    $rssData = array('name' => 'The Military Wives', 'title' => 'In My Dreams', 'url'  => 'www.google.co.uk');
    $rss     = new Rss();
    $rss->exchangeArray($rssData);

    $mockTableGateway = $this->getMock('Zend\Db\TableGateway\TableGateway', array('insert'), array(), '', false);
    $mockTableGateway->expects($this->once())
                     ->method('insert')
                     ->with($rssData);

    $rssTable = new RssTable($mockTableGateway);
    $rssTable->saveRss($rss);
}

public function testSaveRssWillUpdateExistingRsssIfTheyAlreadyHaveAnId()
{
    $rssData = array('id' => 123, 'name' => 'The Military Wives', 'title' => 'In My Dreams', 'url'  => 'www.google.co.uk');
    $rss     = new Rss();
    $rss->exchangeArray($rssData);

    $resultSet = new ResultSet();
    $resultSet->setArrayObjectPrototype(new Rss());
    $resultSet->initialize(array($rss));

    $mockTableGateway = $this->getMock('Zend\Db\TableGateway\TableGateway',
                                       array('select', 'update'), array(), '', false);
    $mockTableGateway->expects($this->once())
                     ->method('select')
                     ->with(array('id' => 123))
                     ->will($this->returnValue($resultSet));
    $mockTableGateway->expects($this->once())
                     ->method('update')
                     ->with(array('name' => 'The Military Wives', 'title' => 'In My Dreams', 'url'  => 'www.google.co.uk'),
                            array('id' => 123));

    $rssTable = new RssTable($mockTableGateway);
    $rssTable->saveRss($rss);
}

public function testExceptionIsThrownWhenGettingNonExistentRss()
{
    $resultSet = new ResultSet();
    $resultSet->setArrayObjectPrototype(new Rss());
    $resultSet->initialize(array());

    $mockTableGateway = $this->getMock('Zend\Db\TableGateway\TableGateway', array('select'), array(), '', false);
    $mockTableGateway->expects($this->once())
                     ->method('select')
                     ->with(array('id' => 123))
                     ->will($this->returnValue($resultSet));

    $rssTable = new RssTable($mockTableGateway);

    try {
        $rssTable->getRss(123);
    }
    catch (\Exception $e) {
        $this->assertSame('Could not find row 123', $e->getMessage());
        return;
    }

    $this->fail('Expected exception was not thrown');
}
}
