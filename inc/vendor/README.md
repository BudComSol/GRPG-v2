# Local Vendor Dependencies

This directory contains all external dependencies required by GRPG v2, hosted locally to eliminate the need for Composer.

## Included Libraries

### vlucas/phpdotenv (v5.0.0)
- **Purpose**: Loads environment variables from `.env` files
- **License**: BSD-3-Clause
- **Homepage**: https://github.com/vlucas/phpdotenv

### phpoption/phpoption (v1.7.5)
- **Purpose**: Option type for PHP (required by phpdotenv)
- **License**: Apache-2.0
- **Homepage**: https://github.com/schmittjoh/php-option

### graham-campbell/result-type (v1.0.2)
- **Purpose**: Result type for PHP (required by phpdotenv)
- **License**: MIT
- **Homepage**: https://github.com/GrahamCampbell/Result-Type

### fortawesome/font-awesome (v5.13.1)
- **Purpose**: Icon font library
- **License**: Font Awesome Free License
- **Homepage**: https://fontawesome.com/

## Autoloader

The `autoload.php` file in this directory provides a simple PSR-4 compatible autoloader that replaces Composer's autoloader functionality for these specific dependencies.

## Security

The `.htaccess` file in this directory:
- Allows access to static assets (CSS, fonts)
- Blocks direct access to PHP files for security

## Why Local Dependencies?

This approach was chosen to:
1. Make deployment easier on shared hosting environments
2. Eliminate the need for Composer knowledge
3. Simplify the installation process for end users
4. Reduce potential deployment issues

## Updating Dependencies

To update these dependencies in the future:
1. Download the new version from the official source
2. Replace the files in the appropriate directory
3. Test thoroughly to ensure compatibility
4. Update version numbers in this README
