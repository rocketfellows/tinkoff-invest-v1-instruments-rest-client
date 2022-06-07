<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

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
}
