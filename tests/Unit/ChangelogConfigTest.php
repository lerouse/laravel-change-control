<?php

namespace Lerouse\LaravelChangeControl\Tests\Unit;

use Lerouse\LaravelChangeControl\Tests\LaravelTestCase;

class ChangelogConfigTest extends LaravelTestCase
{

    /** @test **/
    public function can_get_the_changelog_name(): void
    {
        self::assertEquals('test-changelog.md', config('change-control.filename'));
    }

    /** @test **/
    public function can_get_the_changelog_path(): void
    {
        self::assertEquals('tests/Fixtures', config('change-control.path'));
    }



}