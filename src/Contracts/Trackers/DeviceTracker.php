<?php namespace Arcanedev\LaravelTracker\Contracts\Trackers;

/**
 * Interface  DeviceTracker
 *
 * @package   Arcanedev\LaravelTracker\Contracts\Trackers
 * @author    ARCANEDEV <arcanedev.maroc@gmail.com>
 */
interface DeviceTracker
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    /**
     * Track the device.
     *
     * @return int
     */
    public function track();
}
