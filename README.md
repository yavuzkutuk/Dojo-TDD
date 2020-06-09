# DOJO TDD

Le but de ce dojo est de vous initier aux Tests Unitaires

Commençons par :
* Créer un projet PHP
* ```$ composer init ```
* ``$ composer require phpunit/phpunit``
* Créer les dossiers src/Services et tests/Services
* Tu crées ton code dans service et ton code dans tests
* Pour tester ```$ php vendor/bin/phpunit --colors=auto tests```

### N'oubliez pas de rajouter l'autoload dans composer.json
```
autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
```

* N'oubliez pas d'executer composer dumpautoload

### Exemple code dans service

````php
// src/Services/Calculate.php
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
// tests/Services/CalculateTest.php
namespace Tests\Services;

use App\Services\Calculate;
use PHPUnit\Framework\TestCase;

class CalculateTest extends TestCase
{

    public function testAddition()
    {
       // Instruction Exemple
        // InitialiseTonService
       // $this->assertEquals(ValeurAttendue, AppelTonService);
    }
}
````

### A toi de jouer

* Termine le service Addition de l'exemple
* Créer moi un service pour transformer un titre en url
* Pour le tester ```$ php vendor/bin/phpunit --colors=auto tests```
