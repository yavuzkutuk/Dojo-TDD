<?php

namespace App\Services;

use App\Services\Slugify;
use PHPUnit\Framework\TestCase;

class SlugifyTest extends TestCase
{
    public function testSlugify()
    {
        $slugify = new Slugify();
        $this->assertSame('je-manges', $slugify->slugify("je mange"));
    }

}
