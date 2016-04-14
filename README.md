# BrauneDigitalRedirectBundle
This Bundle allows you to persist redirects in Doctrine ORM. Additional Status codes (e.g.: temporary or permanent) can be used.
## Installation

Download using composer:

```bash
composer require braune-digital/redirect-bundle "~1.1"
```
And enable the Bundle in your AppKernel:

```php
public function registerBundles()
    {
        $bundles = array(
          ...
          new BrauneDigital\RedirectBundle\BrauneDigitalRedirectBundle(),
          ...
        );
```

## Usage
```php
$manager = $container->get('braune_digital.redirect.manager'); # Get the RedirectManager
$manager->create($oldPath, $redirectPath, $statusCode, $flush = true); # Create a redirect
```
