# FZW Signage

FZW Signage is a WordPress digital-signage plugin based on Foyer.

## PHP requirements

This project targets PHP 8.1 or newer. Continuous integration checks PHP 8.1, 8.2, and 8.3 compatibility.

## Development

Install development dependencies:

```bash
composer install
```

Run PHP compatibility checks:

```bash
composer lint
```

Run WordPress coding-standards checks:

```bash
composer lint:wordpress
```

## Continuous integration

GitHub Actions runs the following checks on pull requests:

- PHP syntax validation for PHP 8.1, 8.2, and 8.3
- PHPCompatibilityWP compatibility checks
