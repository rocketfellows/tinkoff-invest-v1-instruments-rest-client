<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetDividendsInterface;

/**
 * @group methods
 */
class GetDividendsTest extends InstrumentsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('GetDividends', self::PARAMS, $expectedResponse);

        return $this->instrumentsService->getDividends(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetDividendsInterface::class,
        ];
    }
}
