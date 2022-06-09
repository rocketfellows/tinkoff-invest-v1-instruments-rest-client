<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient;

use rocketfellows\TinkoffInvestV1RestClient\Client;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException;

class InstrumentsService implements
    GetDividendsInterface,
    GetCountriesInterface,
    GetBondCouponsInterface,
    GetAssetsInterface,
    FindInstrumentInterface,
    BondByInterface
{
    private const SERVICE_NAME = 'InstrumentsService';

    private const SERVICE_METHOD_NAME_GET_DIVIDENDS = 'GetDividends';
    private const SERVICE_METHOD_NAME_GET_COUNTRIES = 'GetCountries';
    private const SERVICE_METHOD_NAME_GET_BOND_COUPONS = 'GetBondCoupons';
    private const SERVICE_METHOD_NAME_GET_ASSETS = 'GetAssets';
    private const SERVICE_METHOD_NAME_FIND_INSTRUMENT = 'FindInstrument';
    private const SERVICE_METHOD_NAME_BOND_BY = 'BondBy';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getDividends(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_DIVIDENDS, $params);
    }

    public function getCountries(): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_COUNTRIES);
    }

    public function getBondCoupons(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_BOND_COUPONS, $params);
    }

    public function getAssets(): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_GET_ASSETS);
    }

    public function findInstrument(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_FIND_INSTRUMENT, $params);
    }

    public function bondBy(array $params): array
    {
        return $this->requestMethod(self::SERVICE_METHOD_NAME_BOND_BY, $params);
    }

    private function requestMethod(string $methodName, ?array $params = null): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            $methodName,
            $params
        );
    }
}
