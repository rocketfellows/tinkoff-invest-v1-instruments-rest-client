<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetCountriesInterface;

/**
 * @group methods
 */
class GetCountriesTest extends InstrumentsServiceTest
{
    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithoutParams('GetCountries', $expectedResponse);

        return $this->instrumentsService->getCountries();
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetCountriesInterface::class,
        ];
    }
}
