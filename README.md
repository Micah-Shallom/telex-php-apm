## Telex PHP APM
```markdown
# Telex APM

**Telex APM** is a simple, installable Laravel package designed to monitor and collect application performance metrics. The package collects data on each backend request and sends these metrics to a specified webhook URL. The package is intended to be easily integrated into any Laravel application.

## Features

- Middleware to collect backend metrics for each request.
- Send collected metrics to a configurable webhook URL.
- Easy installation via Composer.
- Configurable via Laravel's standard configuration file system.

## Requirements

- PHP 7.4 or higher
- Laravel 8.x or higher
- `pdo_sqlite` (if using SQLite for testing purposes)

## Installation

To install the package in your Laravel project, follow these steps:

### 1. Install via Composer

Run the following command in your Laravel project root directory:

```bash
composer require telexorg/telex-apm
```

### 2. Publish the Configuration

After installing the package, you need to publish the configuration file:

```bash
php artisan vendor:publish --tag=config
```

This will create a `config/apm.php` file where you can configure the webhook URL.

### 3. Configure the Webhook URL

Open the `config/apm.php` file and set your webhook URL:

```php
return [
    'webhook_url' => 'https://example.com/your-webhook-endpoint', // Replace with your actual URL
];
```

### 4. Middleware Integration

The package automatically registers the APM middleware, which will track metrics for all requests in the `web` middleware group. Ensure your Laravel application routes are using the `web` middleware group for monitoring.

## Usage

Once installed and configured, the package will automatically collect metrics for each incoming request to your Laravel application. These metrics will be sent to the configured webhook URL via a POST request.

### Collected Metrics

The following metrics are collected for each request:

- HTTP Method (GET, POST, etc.)
- Request URL
- Response Status Code
- Request Duration
- Request Headers
- Timestamp

## Testing

To ensure the package is working correctly, you can run your Laravel project in development mode and make a few requests. The metrics collected should be sent to the configured webhook URL.

If you're encountering any errors, you can check Laravel's log files located in `storage/logs/laravel.log`.

## Development

If you want to contribute to the package or modify it:

### 1. Clone the Repository

Clone the package repository locally:

```bash
git clone https://github.com/yourusername/telex-apm.git
cd telex-apm
```

### 2. Install Dependencies

Install dependencies using Composer:

```bash
composer install
```

### 3. Run Tests

You can run tests to ensure everything is working:

```bash
vendor/bin/phpunit
```

## Deployment

To make the package public on Packagist, follow these steps:

1. Ensure you have a Packagist account.
2. Log in to [Packagist](https://packagist.org/) and submit your package's repository URL.
3. Use `composer.json` to maintain the package metadata.

## Contributing

If you'd like to contribute, please fork the repository and use a feature branch. Pull requests are warmly welcome.

## Issues

If you encounter any issues, please feel free to [open an issue](https://github.com/yourusername/telex-apm/issues) on GitHub.

## License

This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

For more information or support, please reach out to:

- **Email:** [micahshallom@gmail.com](mailto:youremail@example.com)
- **GitHub:** [Micah Shallom](https://github.com/Micah-Shallom)
```

### Replace Placeholders
- Replace `"https://github.com/yourusername/telex-apm.git"` with the actual URL of your GitHub repository.
- Update `youremail@example.com` and other placeholder URLs with actual contact information.
- Update the Packagist URL once your package is published.

This `README.md` provides a clear guide for users to install, configure, and use your package, along with instructions for contributing and development. Let me know if you need any additional details or sections!
