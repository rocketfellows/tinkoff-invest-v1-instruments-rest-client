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
    FindInstrumentInterface
{
    private const SERVICE_NAME = 'InstrumentsService';

    private const SERVICE_METHOD_NAME_GET_DIVIDENDS = 'GetDividends';
    private const SERVICE_METHOD_NAME_GET_COUNTRIES = 'GetCountries';
    private const SERVICE_METHOD_NAME_GET_BOND_COUPONS = 'GetBondCoupons';
    private const SERVICE_METHOD_NAME_GET_ASSETS = 'GetAssets';
    private const SERVICE_METHOD_NAME_FIND_INSTRUMENT = 'FindInstrument';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    public function getDividends(array $params): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            self::SERVICE_METHOD_NAME_GET_DIVIDENDS,
            $params
        );
    }

    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    public function getCountries(): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            self::SERVICE_METHOD_NAME_GET_COUNTRIES,
            []
        );
    }

    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    public function getBondCoupons(array $params): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            self::SERVICE_METHOD_NAME_GET_BOND_COUPONS,
            $params
        );
    }

    /**
     * @throws ClientException
     * @throws HttpClientException
     * @throws ServerException
     */
    public function getAssets(): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            self::SERVICE_METHOD_NAME_GET_ASSETS
        );
    }

    /**
     * @throws ClientException
     * @throws ServerException
     * @throws HttpClientException
     */
    public function findInstrument(array $params): array
    {
        return $this->client->request(
            self::SERVICE_NAME,
            self::SERVICE_METHOD_NAME_FIND_INSTRUMENT,
            $params
        );
    }
}
