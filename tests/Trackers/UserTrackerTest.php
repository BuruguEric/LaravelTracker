<?php namespace Arcanedev\LaravelTracker\Tests\Trackers;

/**
 * Class     UserTrackerTest
 *
 * @package  Arcanedev\LaravelTracker\Tests\Trackers
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class UserTrackerTest extends TestCase
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /** @var \Arcanedev\LaravelTracker\Contracts\Trackers\UserTracker */
    private $tracker;

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    public function setUp()
    {
        parent::setUp();

        $this->tracker = $this->app->make(\Arcanedev\LaravelTracker\Contracts\Trackers\UserTracker::class);
    }

    public function tearDown()
    {
        unset($this->tracker);

        parent::tearDown();
    }

    /* -----------------------------------------------------------------
     |  Test Methods
     | -----------------------------------------------------------------
     */

    /** @test */
    public function it_can_be_instantiated()
    {
        $expectations = [
            \Arcanedev\LaravelTracker\Contracts\Trackers\UserTracker::class,
            \Arcanedev\LaravelTracker\Trackers\UserTracker::class,
        ];

        foreach ($expectations as $expected) {
            static::assertInstanceOf($expected, $this->tracker);
        }
    }

    /** @test */
    public function it_can_track()
    {
        // No authenticated user
        static::assertSame(null, $this->tracker->track());

        // TODO: Add an authenticated user
        // TODO: Add database assertions
    }
}
