<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected static $queue;

    protected function setUp(): void
    {
        $this->queue =new Queue;
    }

    //eseguito alla fine del test
    protected function tearDown(): void
    {
        unset($this->queue);
    }

    // mentre i primi due vengono eseguiti prima e dopo l'esecuzione di ogni test
    // questi altri due metodi vengono eseguiti prima e dopo l'esecuzione dell'intera classe
//    public static function setUpBeforeClass(): void
//    {
//        static::$queue = new Queue;
//    }
//
//    public static function tearDownAfterClass(): void
//    {
//        static::$queue = null;
//    }

    public function testNewQueueIsEmpty()
    {
//        $queue = new Queue;

        $this->assertEquals(0, $this->queue->getCount());
//        $this->assertEquals(0, $queue->getCount());

//        return $queue;
    }

    /**
     * aggiungo dipendenza per passare la queue già creata
//     * @depends testNewQueueIsEmpty
     */
    public function testAnItemIsAddedToTheQueue()
//    public function testAnItemIsAddedToTheQueue(Queue $queue)
    {
//        $queue = new Queue;

        $this->queue->push('green');
//        $queue->push('green');

        $this->assertEquals(1, $this->queue->getCount());
//        $this->assertEquals(1, $queue->getCount());

//        return $queue;
    }

    /**
     * aggiungo dipendenza per passare la queue già creata
//     * @depends testAnItemIsAddedToTheQueue
     */
    public function testAnItemIsRemovedFromTheQueue()
//    public function testAnItemIsRemovedFromTheQueue(Queue $queue)
    {
//        $queue = new Queue;
//        $queue->push('green');
        $this->queue->push('green');
        $item = $this->queue->pop();
//        $item = $queue->pop();

        $this->assertEquals(0, $this->queue->getCount());
//        $this->assertEquals(0, $queue->getCount());

        $this->assertEquals('green', $item);
    }

    public function testAnItemIsRemovedFromTheFrontOfTheQueue()
    {
        $this->queue->push('first');
        $this->queue->push('second');

        $this->assertEquals('first', $this->queue->pop());
    }
}