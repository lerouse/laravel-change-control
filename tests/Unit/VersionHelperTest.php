<?php

namespace Lerouse\LaravelChangeControl\Tests\Unit;

use Lerouse\LaravelChangeControl\Tests\LaravelTestCase;
use Lerouse\LaravelChangeControl\Version;

class VersionHelperTest extends LaravelTestCase
{

    /** @test **/
    public function can_get_version(): void
    {
        self::assertInstanceOf(Version::class, version());
    }

    /** @test **/
    public function can_get_version_number(): void
    {
        self::assertEquals('v2.1.3', version()->get());
    }
    
}