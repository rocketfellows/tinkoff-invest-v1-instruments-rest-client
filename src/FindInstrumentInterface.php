<?php

namespace rocketfellows\TinkoffInvestV1InstrumentsRestClient;

interface FindInstrumentInterface
{
    public function findInstrument(array $params): array;
}
