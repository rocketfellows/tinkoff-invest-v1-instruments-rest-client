# Tinkoff Invest V1 instruments service rest client

![Code Coverage Badge](./badge.svg)

Simple implementation of tinkoff invest v1 instruments service.
So far provides methods:
- GetDividends - https://tinkoff.github.io/investAPI/swagger-ui/#/InstrumentsService/InstrumentsService_GetDividends
- GetCountries - https://tinkoff.github.io/investAPI/swagger-ui/#/InstrumentsService/InstrumentsService_GetCountries
- GetBondCoupons - https://tinkoff.github.io/investAPI/swagger-ui/#/InstrumentsService/InstrumentsService_GetBondCoupons
- GetAssets - https://tinkoff.github.io/investAPI/swagger-ui/#/InstrumentsService/InstrumentsService_GetAssets
- FindInstrument - https://tinkoff.github.io/investAPI/swagger-ui/#/InstrumentsService/InstrumentsService_FindInstrument
- BondBy - https://tinkoff.github.io/investAPI/swagger-ui/#/InstrumentsService/InstrumentsService_BondBy

Methods interfaces:
- \rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetDividendsInterface
- \rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetCountriesInterface
- \rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetBondCouponsInterface
- \rocketfellows\TinkoffInvestV1InstrumentsRestClient\GetAssetsInterface
- \rocketfellows\TinkoffInvestV1InstrumentsRestClient\FindInstrumentInterface
- \rocketfellows\TinkoffInvestV1InstrumentsRestClient\BondByInterface

Methods interfaces implementation aggregated in \rocketfellows\TinkoffInvestV1InstrumentsRestClient\InstrumentsService.

For the sake of the interface segregation principle you should inject a specific interface as dependencies, and define the implementation through the container (DI).

## Methods contract definition

Component methods take an array as parameters, and raw arrays also serve as output values.

Methods throw the following types of exceptions:
- \rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException
- \rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException
- \rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException

## Component dependencies

"rocketfellows/tinkoff-invest-v1-rest-client": "1.0.1" - as a common http client.

## Usage examples

Common http client configuration:

```php
$client = new Client(
    (
        new ClientConfig(
            'https://invest-public-api.tinkoff.ru/rest',
            <your_access_token>
        )
    ),
    new \GuzzleHttp\Client()
);
```

Instruments service configuration (or interface specific method configuration via DI):

```php
$instrumentsService = new InstrumentsService($client);
```

Get dividends method call example:

```php
$dividends = $instrumentsService->getDividends([
    "figi" => "BBG004730RP0",
    "from" => "2022-05-28T15:38:52.283Z",
    "to" => '2022-08-18T15:38:52.283Z',
])
```

returns:

```php
Array
(
    [dividends] => Array
        (
            [0] => Array
                (
                    [dividendNet] => Array
                        (
                            [currency] => rub
                            [units] => 52
                            [nano] => 530000000
                        )
                    [declaredDate] => 2022-06-30T00:00:00Z
                    [lastBuyDate] => 2022-07-18T00:00:00Z
                    [dividendType] => 
                    [recordDate] => 2022-07-20T00:00:00Z
                    [regularity] => 
                    [closePrice] => Array
                        (
                            [currency] => rub
                            [units] => 306
                            [nano] => 500000000
                        )
                    [yieldValue] => Array
                        (
                            [units] => 17
                            [nano] => 140000000
                        )
                    [createdAt] => 2022-06-10T02:05:32.707197Z
                )
        )
)
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.