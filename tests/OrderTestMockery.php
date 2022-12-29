<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class OrderTestMockery extends MockeryTestCase
{
    public function testOrderIsProcessed()
    {
        $gateway = Mockery::mock('PaymentGateway');

        $gateway->shouldReceive('charge')
                ->once()
                ->with(200)
                ->andReturn(true);

        $order = new Order($gateway);

        $order->amount = 200;

        $this->assertTrue($order->process());
    }
}