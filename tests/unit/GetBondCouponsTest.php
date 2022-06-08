<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient\tests\unit;

use rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetBondCouponsInterface;

class GetBondCouponsTest extends InstrumentsServiceTest
{
    private const PARAMS = ['foo'];

    protected function prepareServiceMethodCallAssertions(array $expectedResponse): array
    {
        $this->assertClientRequestWithParams('GetBondCoupons', self::PARAMS, $expectedResponse);

        return $this->instrumentsService->getBondCoupons(self::PARAMS);
    }

    protected function getExpectedInterfacesImplementations(): array
    {
        return [
            GetBondCouponsInterface::class,
        ];
    }
}
