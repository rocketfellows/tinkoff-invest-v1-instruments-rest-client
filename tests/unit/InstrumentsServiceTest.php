<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use rocketfellows\TinkoffInvestV1InstrumentsRestClient\InstrumentsService;
use rocketfellows\TinkoffInvestV1RestClient\Client;

class InstrumentsServiceTest extends TestCase
{
    /**
     * @var InstrumentsService
     */
    private $instrumentsService;

    /**
     * @var Client|MockObject
     */
    private $client;

    protected function setUp(): void
    {
        parent::setUp();

        $this->client = $this->createMock(Client::class);

        $this->instrumentsService = new InstrumentsService($this->client);
    }
}
