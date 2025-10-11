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

## Configuration Files

When using Symfony Flex, the recipe provides the following configuration files:

- `.twig-cs-fixer.dist.php` - Twig CS Fixer configuration (automatically added by recipe)
- `.github/workflows/quality.yml` - GitHub Actions workflow (automatically added by recipe)
- `Makefile` - Quality command shortcut (automatically added by recipe)

Configuration files for PHPStan and PHP CS Fixer are provided by their respective Symfony Flex recipes.

If you're not using Symfony Flex, you can manually add these files to your project.

## GitHub Actions Workflow

A GitHub Actions workflow example is provided in `.github/workflows/quality.yml` that runs:

- Security checks (using Composer Security Audit)
- PHPStan analysis

The workflow runs on all pushes and pull requests to all branches.

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

## Customization

You can customize the configuration files according to your project's needs. Each configuration file is well-documented and follows best practices.

## License

MIT
