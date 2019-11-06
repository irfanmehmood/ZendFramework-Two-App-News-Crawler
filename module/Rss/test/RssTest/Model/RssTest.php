<?php
namespace RssTest\Model;

use Rss\Model\Rss;
use PHPUnit_Framework_TestCase;

class RssTest extends PHPUnit_Framework_TestCase
{
    public function testRssInitialState()
    {
        $rss = new Rss();

        $this->assertNull($rss->name, '"name" should initially be null');
        $this->assertNull($rss->id, '"id" should initially be null');
        $this->assertNull($rss->title, '"title" should initially be null');
    }

    public function testExchangeArraySetsPropertiesCorrectly()
    {
        $rss = new Rss();
        $data  = array('name' => 'some name',
                       'id'     => 123,
                       'title'  => 'some title');

        $rss->exchangeArray($data);

        $this->assertSame($data['name'], $rss->name, '"name" was not set correctly');
        $this->assertSame($data['id'], $rss->id, '"id" was not set correctly');
        $this->assertSame($data['title'], $rss->title, '"title" was not set correctly');
    }

    public function testExchangeArraySetsPropertiesToNullIfKeysAreNotPresent()
    {
        $rss = new Rss();

        $rss->exchangeArray(array('name' => 'some name',
                                    'id'     => 123,
                                    'title'  => 'some title'));
        $rss->exchangeArray(array());

        $this->assertNull($rss->name, '"name" should have defaulted to null');
        $this->assertNull($rss->id, '"id" should have defaulted to null');
        $this->assertNull($rss->title, '"title" should have defaulted to null');
    }

    public function testGetArrayCopyReturnsAnArrayWithPropertyValues()
    {
        $rss = new Rss();
        $data  = array('name' => 'some name',
                       'id'     => 123,
                       'title'  => 'some title');

        $rss->exchangeArray($data);
        $copyArray = $rss->getArrayCopy();

        $this->assertSame($data['name'], $copyArray['name'], '"name" was not set correctly');
        $this->assertSame($data['id'], $copyArray['id'], '"id" was not set correctly');
        $this->assertSame($data['title'], $copyArray['title'], '"title" was not set correctly');
    }

    public function testInputFiltersAreSetCorrectly()
    {
        $rss = new Rss();

        $inputFilter = $rss->getInputFilter();

        $this->assertSame(4, $inputFilter->count());
        $this->assertTrue($inputFilter->has('name'));
        $this->assertTrue($inputFilter->has('id'));
        $this->assertTrue($inputFilter->has('title'));
	$this->assertTrue($inputFilter->has('url'));
    }
}
