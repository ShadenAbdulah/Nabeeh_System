<?php

namespace Illuminate\Support\Facades;

use Closure;
use Illuminate\Contracts\Container\Container;
use Illuminate\Notifications\AnonymousNotifiable;
use Illuminate\Notifications\ChannelManager;
use Illuminate\Support\Collection;
use Illuminate\Support\Testing\Fakes\NotificationFake;

/**
 * @method static void send(Collection|array|mixed $notifiables, mixed $notification)
 * @method static void sendNow(Collection|array|mixed $notifiables, mixed $notification, array|null $channels = null)
 * @method static mixed channel(string|null $name = null)
 * @method static string getDefaultDriver()
 * @method static string deliversVia()
 * @method static void deliverVia(string $channel)
 * @method static ChannelManager locale(string $locale)
 * @method static mixed driver(string|null $driver = null)
 * @method static ChannelManager extend(string $driver, Closure $callback)
 * @method static array getDrivers()
 * @method static Container getContainer()
 * @method static ChannelManager setContainer(Container $container)
 * @method static ChannelManager forgetDrivers()
 * @method static void assertSentOnDemand(string|Closure $notification, callable|null $callback = null)
 * @method static void assertSentTo(mixed $notifiable, string|Closure $notification, callable|null $callback = null)
 * @method static void assertSentOnDemandTimes(string $notification, int $times = 1)
 * @method static void assertSentToTimes(mixed $notifiable, string $notification, int $times = 1)
 * @method static void assertNotSentTo(mixed $notifiable, string|Closure $notification, callable|null $callback = null)
 * @method static void assertNothingSent()
 * @method static void assertNothingSentTo(mixed $notifiable)
 * @method static void assertSentTimes(string $notification, int $expectedCount)
 * @method static void assertCount(int $expectedCount)
 * @method static Collection sent(mixed $notifiable, string $notification, callable|null $callback = null)
 * @method static bool hasSent(mixed $notifiable, string $notification)
 * @method static array sentNotifications()
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 *
 * @see ChannelManager
 * @see NotificationFake
 */
class Notification extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return NotificationFake
     */
    public static function fake()
    {
        return tap(new NotificationFake, function ($fake) {
            static::swap($fake);
        });
    }

    /**
     * Begin sending a notification to an anonymous notifiable on the given channels.
     *
     * @param  array  $channels
     * @return AnonymousNotifiable
     */
    public static function routes(array $channels)
    {
        $notifiable = new AnonymousNotifiable;

        foreach ($channels as $channel => $route) {
            $notifiable->route($channel, $route);
        }

        return $notifiable;
    }

    /**
     * Begin sending a notification to an anonymous notifiable.
     *
     * @param  string  $channel
     * @param  mixed  $route
     * @return AnonymousNotifiable
     */
    public static function route($channel, $route)
    {
        return (new AnonymousNotifiable)->route($channel, $route);
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ChannelManager::class;
    }
}
