<?php

namespace FM\ElfinderBundle\Tests\Event;

use Symfony\Component\HttpFoundation\Request;
use FM\ElfinderBundle\Event\ElFinderPostExecutionEvent;

class ElFinderPostExecutionEventTest extends \PHPUnit\Framework\TestCase
{
    public function testHasErrors()
    {
        $request    = new Request();
        $httpKernel = $this->createMock('Symfony\Component\HttpKernel\HttpKernelInterface');
        $event      = new ElFinderPostExecutionEvent($request, $httpKernel, 'testInstance', 'testHomeFolder', []);
        $this->assertEquals(false, $event->hasErrors());

        $event = new ElFinderPostExecutionEvent($request, $httpKernel, 'testInstance', 'testHomeFolder', ['error' => true]);
        $this->assertEquals(true, $event->hasErrors());
    }
}
