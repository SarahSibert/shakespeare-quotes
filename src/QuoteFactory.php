<?php

namespace SarahSibert\ShakespeareQuotes;

class QuoteFactory
{
    protected $quotes = [
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

    public function __construct(array $quotes = null)
    {
        if ($quotes) {
            $this->quotes = $quotes;
        }
    }

    public function getRandomQuote()
    {
        return $this->quotes[array_rand($this->quotes)];
    }
}