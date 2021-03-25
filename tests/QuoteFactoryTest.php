<?php

namespace SarahSibert\ShakespeareQuotes\Tests;

use PHPUnit\Framework\TestCase;
use SarahSibert\ShakespeareQuotes\QuoteFactory;

class QuoteFactoryTest extends TestCase
{
    /** @test **/
    public function it_returns_a_random_quote()
    {
        $quotes = new QuoteFactory([
            'This is a quote',
        ]);

        $quote = $quotes->getRandomQuote();

        $this->assertSame('This is a quote', $quote);
    }

    /** @test **/
    public function it_returns_a_predefined_quote()
    {
        $shakespeareQuotes = [
            'All the world\'s a stage, and all the men and women merely players.',
            'Romeo, Romeo! Wherefore art thou Romeo?',
            'Now is the winter of our discontent',
            'The lady doth protest too much, methinks',
            'Beware the Ides of March.',
            'If music be the food of love play on.',
            'What’s in a name? A rose by any other name would smell as sweet.',
            'The better part of valor is discretion',
            'Uneasy lies the head that wears the crown.',
            'Brevity is the soul of wit.',
            'Some are born great, some achieve greatness, and some have greatness thrust upon them.',
        ];

        $quotes = new QuoteFactory();

        $quote = $quotes->getRandomQuote();

        $this->assertContains($quote, $shakespeareQuotes);
    }
}
