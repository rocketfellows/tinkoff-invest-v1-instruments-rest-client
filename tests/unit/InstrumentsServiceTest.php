<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use PHPUnit\Framework\MockObject\Builder\InvocationMocker;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use rocketfellows\TinkoffInvestV1InstrumentsRestClient\InstrumentsService;
use rocketfellows\TinkoffInvestV1RestClient\Client;

abstract class InstrumentsServiceTest extends TestCase
{
    private const ACTUAL_SERVICE_NAME = 'InstrumentsService';
    private const EXPECTED_RESPONSE = ['foo'];

    /**
     * @var InstrumentsService
     */
    protected $instrumentsService;

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

    public function testMethodRequest(): void
    {
        $actualResponse = $this->prepareServiceMethodCallAssertions(self::EXPECTED_RESPONSE);

        $this->assertEquals(self::EXPECTED_RESPONSE, $actualResponse);
    }

    abstract protected function prepareServiceMethodCallAssertions(array $expectedResponse): array;

    protected function assertClientRequestWithParams(string $serviceMethod, array $params, ?array $response = []): void
    {
        $this->assertClientRequest($response)->with(self::ACTUAL_SERVICE_NAME, $serviceMethod, $params);
    }

    protected function assertClientRequestWithoutParams(string $serviceMethod, ?array $response = []): void
    {
        $this->assertClientRequest($response)->with(self::ACTUAL_SERVICE_NAME, $serviceMethod);
    }

    private function assertClientRequest(?array $response = []): InvocationMocker
    {
        return $this->client
            ->expects($this->once())
            ->method('request')
            ->willReturn($response);
    }
}
