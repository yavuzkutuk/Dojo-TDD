<?php

namespace Tests\Services;

use App\Services\Slugify;
use PHPUnit\Framework\TestCase;

class SlugifyTest extends TestCase
{
    public function testSlugify()
    {
        $slugify = new Slugify();
        $this->assertSame('je-mange', $slugify->slugify("je mange"));
    }

}
