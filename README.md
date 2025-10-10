# Quality Pack

A Symfony pack for initializing quality tools in your project.

## Installation

```bash
composer require fastfony/quality-pack --dev
```

## What's included?

This pack includes the following tools and configurations:

- **PHPStan** - PHP Static Analysis Tool
- **PHP CS Fixer** - PHP Coding Standards Fixer
- **Twig CS Fixer** - Twig Coding Standards Fixer
- **PHP Insights** - Instant PHP quality checks

## Configuration Files

The following configuration files are provided as examples:

- `phpstan.neon` - PHPStan configuration
- `.php-cs-fixer.dist.php` - PHP CS Fixer configuration
- `.twig-cs-fixer.php` - Twig CS Fixer configuration
- `phpinsights.php` - PHP Insights configuration

## GitHub Actions Workflow

A GitHub Actions workflow example is provided in `.github/workflows/quality.yml` that runs:

- Security checks (using Symfony Security Checker)
- PHPStan analysis
- PHP Insights quality checks

The workflow runs on all pushes and pull requests to `main` and `develop` branches.

## Usage

### PHPStan

Run static analysis:
```bash
vendor/bin/phpstan analyse
```

### PHP CS Fixer

Check code style:
```bash
vendor/bin/php-cs-fixer fix --dry-run --diff
```

Fix code style:
```bash
vendor/bin/php-cs-fixer fix
```

### Twig CS Fixer

Check Twig templates:
```bash
vendor/bin/twig-cs-fixer lint templates/
```

Fix Twig templates:
```bash
vendor/bin/twig-cs-fixer lint --fix templates/
```

### PHP Insights

Run quality checks:
```bash
vendor/bin/phpinsights
```

## Customization

You can customize the configuration files according to your project's needs. Each configuration file is well-documented and follows best practices.

## License

MIT
