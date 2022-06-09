<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient;

use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\HttpClientException;
use rocketfellows\TinkoffInvestV1RestClient\exceptions\request\ServerException;

interface FindInstrumentInterface
{
    /**
     * @throws ClientException
     * @throws ServerException
     * @throws HttpClientException
     */
    public function findInstrument(array $params): array;
}
