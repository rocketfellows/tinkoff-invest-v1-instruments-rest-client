<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

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
}
