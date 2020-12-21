<?php

namespace Tests\Feature;

use Tests\TestCase;

class MigrationIssueTest extends TestCase
{
    public function testThrowingIntendedException()
    {
        $this->artisan('migrate:fresh')->assertExitCode(0);
    }
}