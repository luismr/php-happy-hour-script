# PHP Happy Hour Script

[![PHP 7.4](https://img.shields.io/badge/PHP-7.4-blue.svg)](https://www.php.net/)
[![Docker](https://img.shields.io/badge/Docker-Enabled-blue.svg)](https://www.docker.com/)

A PHP script that solves the "Happy Hours" puzzle by counting how many times the word "happy" can be formed from a given string of lowercase English letters.

## Project Structure

```
happy-hours/
├── LICENSE.md
├── README.md
└── src/
    └── solve.php
```

## Prerequisites

- PHP 7.4 or higher
- Docker (optional, for containerized execution)

## Installation

Clone the repository:
```bash
git clone git@github.com:luismr/php-happy-hour-script.git
cd php-happy-hour-script
```

## Running Instructions

### macOS/Linux

```bash
php src/solve.php
```

### Windows

```bash
php src\solve.php
```

### Docker

Using the official PHP CLI image:

```bash
docker run --rm -v $(pwd):/app -w /app php:7.4-cli php src/solve.php
```

## Input Parameters

The script accepts a single parameter:
- `$Coupon_Code`: A string containing lowercase English letters

Example:
```php
solve("happyishappy"); // Returns 2
```

## Functionality

The script counts how many times the word "happy" can be formed from the input string, where:
- Each letter can be used only once per word
- The input contains only lowercase English letters
- The function returns 0 if the word cannot be formed

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details. 