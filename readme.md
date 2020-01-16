![HEADER](https://camo.githubusercontent.com/839ca2875645f1719f4974e36c24859b2c08cdd3/68747470733a2f2f692e6962622e636f2f474637796e62502f6469676974616c6f6365616e2d76322e706e67)
This is a wrapper for the [Digitalocean API](https://developers.digitalocean.com/v2/) ([Issues](https://github.com/digitalocean/api-v2/issues) / [Changelog](https://github.com/digitalocean/api-v2/issues))

### Installation
```php
<?php
require 'vendor/autoload.php';
use NickNickIO\Digitalocean\Digitalocean;

$digitalocean = new Digitalocean('your_access_token');
```

### Resources

##### Account
```php
// Return an account object
$account = $digitalocean->account->get();
```

#### Balance *(NEW)*
```php
// Return the customer balance
$balance = $digitalocean->balance->customer();
```

##### Action
```php
// Return a collection of Action objects
$actions = $digitalocean->action->all();

// Return an Action object.
$action = $digitalocean->action->get(123);
```

##### Domain
```php
// Return a collection of Domain objects
$domains = $digitalocean->domain->all();

// Return a Domain object
$domain = $digitalocean->domain->get('foo.dk');

// Return the created domain called bar.dk
$domain = $digitalocean->domain->create('bar.dk');

// Delete the domain called baz.dk
$digitalocean->domain->delete('baz.dk');
```

##### Domain Record
```php
// Return a collection DomainRecord objects
$records = $digitalocean->domainRecord->all();

// Return a DomainRecord object
$record = $digitalocean->domainRecord->get('baz.dk', 123);
```
##### Droplet
```php
// Return a collection of Droplet objects
$droplets = $digitalocean->droplet->all();

// Return a Droplet object
$droplet = $digitalocean->droplet->get(123);

// Return the created droplet
$droplet = $digitalocean->droplet->create([
    'name' => 'test-droplet',
    'image' => 31650475,
    'region' => 'fra1',
    'size' => 's-1vcpu-1gb'
]);

// Delete a droplet
$digitalocean->droplet->delete(123);
```

##### Firewall
```php
// List all firewalls
$firewalls = $digitalocean->firewall->all();
```
