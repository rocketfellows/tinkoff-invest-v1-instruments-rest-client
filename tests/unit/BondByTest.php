<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1InstrumentsRestClient\BondByInterface;

class BondByTest extends InstrumentsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('BondBy', self::PARAMS, $expectedResponse);

        return $this->instrumentsService->bondBy(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            BondByInterface::class,
        ];
    }
}
