<h1 align="center">
    SquadMaps-PHP
</h1>

<p align="center">

</p>

## SquadMaps-PHP

SquadMaps-PHP is a curated list of all available Squad maps as well formed strings, ready to be used in your MapRotation.cfg.

## Installation

You can install SquadMaps-PHP with composer by using the following command.
```
composer require skyraptor/squad-maps-php
```

Simply use it like in the following example:

```php
use SquadMaps\SquadMaps;

/** @var array */
$maps = SquadMaps::getMaps();
```