<?php namespace Arcanedev\LaravelTracker\EventListeners;

use Arcanedev\LaravelTracker\Contracts\Tracker;
use Illuminate\Routing\Events\RouteMatched;
use Illuminate\Routing\Route;

/**
 * Class     RouteEventSubscriber
 *
 * @package  Arcanedev\LaravelTracker\EventListeners
 * @author   ARCANEDEV <arcanedev.maroc@gmail.com>
 */
class RouteEventSubscriber
{
    /* -----------------------------------------------------------------
     |  Properties
     | -----------------------------------------------------------------
     */

    /** @var \Arcanedev\LaravelTracker\Contracts\Tracker */
    private $tracker;

    /* -----------------------------------------------------------------
     |  Constructor
     | -----------------------------------------------------------------
     */

    /**
     * RouteEventSubscriber constructor.
     *
     * @param  \Arcanedev\LaravelTracker\Contracts\Tracker  $manager
     */
    public function __construct(Tracker $manager)
    {
        $this->tracker = $manager;
    }

    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $class = self::class;

        $events->listen(RouteMatched::class, "$class@handle");
    }

    /**
     * Track the matched route.
     *
     * @param  \Illuminate\Routing\Events\RouteMatched  $event
     */
    public function handle(RouteMatched $event)
    {
        $this->tracker->trackMatchedRoute($event->route, $event->request);
    }
}
