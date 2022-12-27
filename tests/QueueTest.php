<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected $queue;

    protected function setUp(): void
    {
        $this->queue =new Queue;
    }

    //eseguito alla fine del test
    protected function tearDown(): void
    {
        unset($this->queue);
    }

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
}