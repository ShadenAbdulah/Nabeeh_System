<?php

namespace Illuminate\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

abstract class TrustHosts
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * Create a new middleware instance.
     *
     * @param Application $app
     * @return void
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    /**
     * Get the host patterns that should be trusted.
     *
     * @return array
     */
    abstract public function hosts();

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param  Closure  $next
     * @return Response
     */
    public function handle(Request $request, $next)
    {
        if ($this->shouldSpecifyTrustedHosts()) {
            Request::setTrustedHosts(array_filter($this->hosts()));
        }

        return $next($request);
    }

    /**
     * Determine if the application should specify trusted hosts.
     *
     * @return bool
     */
    protected function shouldSpecifyTrustedHosts()
    {
        return ! $this->app->environment('local') &&
               ! $this->app->runningUnitTests();
    }

    /**
     * Get a regular expression matching the application URL and all of its subdomains.
     *
     * @return string|null
     */
    protected function allSubdomainsOfApplicationUrl()
    {
        if ($host = parse_url($this->app['config']->get('app.url'), PHP_URL_HOST)) {
            return '^(.+\.)?'.preg_quote($host).'$';
        }
    }
}
