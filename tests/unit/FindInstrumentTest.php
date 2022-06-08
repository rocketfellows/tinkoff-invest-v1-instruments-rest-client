<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1InstrumentsRestClient\FindInstrumentInterface;

class FindInstrumentTest extends InstrumentsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('FindInstrument', self::PARAMS, $expectedResponse);

        return $this->instrumentsService->findInstrument(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            FindInstrumentInterface::class,
        ];
    }
}
