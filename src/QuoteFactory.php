<?php

namespace SarahSibert\ShakespeareQuotes;

use GuzzleHttp\Client;

class QuoteFactory
{
    const API_ENDPOINT = 'https://shakespeare-quotes-gen.herokuapp.com/api/v1/quotes/single';

    protected $client;

    public function __construct(Client $client = null)
    {
        $this->client = $client ?: new Client();
    }

    public function getRandomQuote()
    {
        $response = $this->client->get(self::API_ENDPOINT);

        $quote = json_decode($response->getBody()->getContents());

        return $quote->quote->quote;
    }
}
