<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use PHPUnit\Framework\MockObject\Builder\InvocationMocker;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use rocketfellows\TinkoffInvestV1InstrumentsRestClient\InstrumentsService;
use rocketfellows\TinkoffInvestV1RestClient\Client;

abstract class InstrumentsServiceTest extends TestCase
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

    abstract public function testMethodRequest(): void;

    protected function assertClientRequestWithParams(
        string $serviceName,
        string $serviceMethod,
        array $params,
        ?array $response = []
    ): void {
        $this->assertClientRequest($response)->with($serviceName, $serviceMethod, $params);
    }

    protected function assertClientRequestWithoutParams(
        string $serviceName,
        string $serviceMethod,
        ?array $response = []
    ): void {
        $this->assertClientRequest($response)->with($serviceName, $serviceMethod);
    }

    private function assertClientRequest(?array $response = []): InvocationMocker
    {
        return $this->client
            ->expects($this->once())
            ->method('request')
            ->willReturn($response);
    }
}
