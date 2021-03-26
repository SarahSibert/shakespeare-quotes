<?php

namespace SarahSibert\ShakespeareQuotes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Handler\MockHandler;
use SarahSibert\ShakespeareQuotes\QuoteFactory;

class QuoteFactoryTest extends TestCase
{
    /** @test **/
    public function it_returns_a_random_quote()
    {
        $mock = new MockHandler([
            new Response(200, [], '{
                "success": true,
                "quote": {
                    "id": "2644a599-9d5d-11ea-bdab-ac2b6ef23411",
                    "rating": 0,
                    "theme": "love",
                    "quote": "And yet he loves himself. I \'t not strange? Achilles will not to the field tomorrow.",
                    "play": "(Troilus and Cressida, Act 2, Scene 66)"
                }
                }'),
        ]);

        $handler = HandlerStack::create($mock);

        $client = new Client(['handler' => $handler]);

        $quotes = new QuoteFactory($client);

        $quote = $quotes->getRandomQuote();

        $this->assertSame('And yet he loves himself. I \'t not strange? Achilles will not to the field tomorrow.', $quote->quote);
    }

}
