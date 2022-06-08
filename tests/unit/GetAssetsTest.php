<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetAssetsInterface;

class GetAssetsTest extends InstrumentsServiceTest
{
    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithoutParams('GetAssets', $expectedResponse);

        return $this->instrumentsService->getAssets();
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetAssetsInterface::class,
        ];
    }
}
