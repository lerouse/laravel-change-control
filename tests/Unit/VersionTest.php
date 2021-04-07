<?php

namespace Lerouse\LaravelChangeControl\Tests\Unit;

use Lerouse\LaravelChangeControl\Tests\LaravelTestCase;
use Lerouse\LaravelChangeControl\Version;

class VersionTest extends LaravelTestCase
{
    /** {@inheritdoc} **/
    protected function setUp(): void
    {
        parent::setUp();
    }

    /** @test **/
    public function can_create_version_instance(): void
    {
        self::assertInstanceOf(Version::class, new Version);
    }

    /** @test */
    public function can_get_changelog_location(): void
    {
        self::assertEquals('tests/Fixtures/test-changelog.md', Version::getChangelogLocation());
    }

    /** @test **/
    public function can_load_changelog(): void
    {
        $testFixture = file_get_contents(Version::getChangelogLocation());

        self::assertEquals($testFixture, Version::changelog());
    }

    /** @test **/
    public function can_get_application_version(): void
    {
        self::assertEquals('v2.1.3', Version::get());
    }

}