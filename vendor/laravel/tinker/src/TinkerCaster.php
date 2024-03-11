<?php

namespace Laravel\Tinker;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Process\ProcessResult;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Stringable;
use Symfony\Component\VarDumper\Caster\Caster;

class TinkerCaster
{
    /**
     * Application methods to include in the presenter.
     *
     * @var array
     */
    private static $appProperties = [
        'configurationIsCached',
        'environment',
        'environmentFile',
        'isLocal',
        'routesAreCached',
        'runningUnitTests',
        'version',
        'path',
        'basePath',
        'configPath',
        'databasePath',
        'langPath',
        'publicPath',
        'storagePath',
        'bootstrapPath',
    ];

    /**
     * Get an array representing the properties of an application.
     *
     * @param  Application  $app
     * @return array
     */
    public static function castApplication($app)
    {
        $results = [];

        foreach (self::$appProperties as $property) {
            try {
                $val = $app->$property();

                if (! is_null($val)) {
                    $results[Caster::PREFIX_VIRTUAL.$property] = $val;
                }
            } catch (Exception $e) {
                //
            }
        }

        return $results;
    }

    /**
     * Get an array representing the properties of a collection.
     *
     * @param  Collection  $collection
     * @return array
     */
    public static function castCollection($collection)
    {
        return [
            Caster::PREFIX_VIRTUAL.'all' => $collection->all(),
        ];
    }

    /**
     * Get an array representing the properties of an html string.
     *
     * @param  HtmlString  $htmlString
     * @return array
     */
    public static function castHtmlString($htmlString)
    {
        return [
            Caster::PREFIX_VIRTUAL.'html' => $htmlString->toHtml(),
        ];
    }

    /**
     * Get an array representing the properties of a fluent string.
     *
     * @param  Stringable  $stringable
     * @return array
     */
    public static function castStringable($stringable)
    {
        return [
            Caster::PREFIX_VIRTUAL.'value' => (string) $stringable,
        ];
    }

    /**
     * Get an array representing the properties of a process result.
     *
     * @param  ProcessResult  $result
     * @return array
     */
    public static function castProcessResult($result)
    {
        return [
            Caster::PREFIX_VIRTUAL.'output' => $result->output(),
            Caster::PREFIX_VIRTUAL.'errorOutput' => $result->errorOutput(),
            Caster::PREFIX_VIRTUAL.'exitCode' => $result->exitCode(),
            Caster::PREFIX_VIRTUAL.'successful' => $result->successful(),
        ];
    }

    /**
     * Get an array representing the properties of a model.
     *
     * @param  Model  $model
     * @return array
     */
    public static function castModel($model)
    {
        $attributes = array_merge(
            $model->getAttributes(), $model->getRelations()
        );

        $visible = array_flip(
            $model->getVisible() ?: array_diff(array_keys($attributes), $model->getHidden())
        );

        $hidden = array_flip($model->getHidden());

        $appends = (function () {
            return array_combine($this->appends, $this->appends); // @phpstan-ignore-line
        })->bindTo($model, $model)();

        foreach ($appends as $appended) {
            $attributes[$appended] = $model->{$appended};
        }

        $results = [];

        foreach ($attributes as $key => $value) {
            $prefix = '';

            if (isset($visible[$key])) {
                $prefix = Caster::PREFIX_VIRTUAL;
            }

            if (isset($hidden[$key])) {
                $prefix = Caster::PREFIX_PROTECTED;
            }

            $results[$prefix.$key] = $value;
        }

        return $results;
    }
}
