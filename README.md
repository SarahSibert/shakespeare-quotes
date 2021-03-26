# Shakespeare Quotes

Random quotes from the works of William Shakespeare

## Installation

Require the package using composer:

```bash
composer require sarahsibert/shakespeare-quotes
```

## Usage

```bash
use SarahSibert\ShakespeareQuotes\QuoteFactory;

$quotes = new QuoteFactory();

$quote = $quotes->getRandomQuote();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
