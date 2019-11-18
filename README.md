# DOJO TDD

Le but de ce dojo est de vous initier aux Tests Unitaires

Commençons par :
* Créer un projet PHP
* ```$ composer init ```
* ``$ composer require phpunit/phpunit``
* Créer les dossiers src/Services et tests/Services
* Tu crées ton code dans service et ton code dans tests
* Pour tester ```$ php vendor/bin/phpunit --colors=auto tests```

### Exemple code dans service

````php
namespace App\Services;

class Calculate
{
    public function addition($nombre1, $nombre2)
    {
        // Instruction
    }

}
````

### Exemple code dans Tests

````php
namespace Test;

use App\Services\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    public function testAddition()
    {
       // Instruction
    }
}
````

### A toi de jouer

* Créer moi un service pour transformer un titre en url
* Pour le tester ```$ php vendor/bin/phpunit --colors=auto tests```
