<?php

namespace Illuminate\Routing;

use Illuminate\Contracts\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class ViewController extends Controller
{
    /**
     * The response factory implementation.
     *
     * @var ResponseFactory
     */
    protected $response;

    /**
     * Create a new controller instance.
     *
     * @param ResponseFactory $response
     * @return void
     */
    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    /**
     * Invoke the controller method.
     *
     * @param  mixed  ...$args
     * @return \Illuminate\Http\Response
     */
    public function __invoke(...$args)
    {
        $routeParameters = array_filter($args, function ($key) {
            return ! in_array($key, ['view', 'data', 'status', 'headers']);
        }, ARRAY_FILTER_USE_KEY);

        $args['data'] = array_merge($args['data'], $routeParameters);

        return $this->response->view(
            $args['view'],
            $args['data'],
            $args['status'],
            $args['headers']
        );
    }

    /**
     * Execute an action on the controller.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return Response
     */
    public function callAction($method, $parameters)
    {
        return $this->{$method}(...$parameters);
    }
}
