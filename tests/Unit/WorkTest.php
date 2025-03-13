<?php

namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Work;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class WorkTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_belongs_to_employer(): void
    {
        // Arrange
        $employer = Employer::factory()->create();
        $job = Work::factory()->create([
            'employer_id' => $employer->id
        ]);

        // Act and Assert
        $this->assertTrue($job->employer->is($employer));
    }

    public function test_can_have_tags(): void
    {
        $work = Work::factory()->create();

        $work->tag('frontend');

        $this->assertCount(1, $work->tags);
    }
}
