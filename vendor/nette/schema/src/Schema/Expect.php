<?php

/**
 * This file is part of the Nette Framework (https://nette.org)
 * Copyright (c) 2004 David Grudl (https://davidgrudl.com)
 */

declare(strict_types=1);

namespace Nette\Schema;

use Nette;
use Nette\Schema\Elements\AnyOf;
use Nette\Schema\Elements\Structure;
use Nette\Schema\Elements\Type;
use ReflectionObject;
use ReflectionProperty;


/**
 * Schema generator.
 *
 * @method static Type scalar($default = null)
 * @method static Type string($default = null)
 * @method static Type int($default = null)
 * @method static Type float($default = null)
 * @method static Type bool($default = null)
 * @method static Type null()
 * @method static Type array($default = [])
 * @method static Type list($default = [])
 * @method static Type mixed($default = null)
 * @method static Type email($default = null)
 * @method static Type unicode($default = null)
 */
final class Expect
{
	use Nette\SmartObject;

	public static function __callStatic(string $name, array $args): Type
	{
		$type = new Type($name);
		if ($args) {
			$type->default($args[0]);
		}

		return $type;
	}


	public static function type(string $type): Type
	{
		return new Type($type);
	}


	/**
	 * @param  mixed|Schema  ...$set
	 */
	public static function anyOf(...$set): AnyOf
	{
		return new AnyOf(...$set);
	}


	/**
	 * @param  Schema[]  $items
	 */
	public static function structure(array $items): Structure
	{
		return new Structure($items);
	}


	/**
	 * @param  object  $object
	 */
	public static function from($object, array $items = []): Structure
	{
<<<<<<< HEAD
		$ro = new ReflectionObject($object);
		$props = $ro->hasMethod('__construct')
			? $ro->getMethod('__construct')->getParameters()
			: $ro->getProperties();

		foreach ($props as $prop) {
=======
		$ro = new \ReflectionObject($object);
		foreach ($ro->getProperties() as $prop) {
			$type = Helpers::getPropertyType($prop) ?? 'mixed';
>>>>>>> parent of c8b1139b (update Ui)
			$item = &$items[$prop->getName()];
			if (!$item) {
				$item = new Type($type);
<<<<<<< HEAD
				if ($prop instanceof ReflectionProperty ? $prop->isInitialized($object) : $prop->isOptional()) {
					$def = ($prop instanceof ReflectionProperty ? $prop->getValue($object) : $prop->getDefaultValue());
=======
				if (PHP_VERSION_ID >= 70400 && !$prop->isInitialized($object)) {
					$item->required();
				} else {
					$def = $prop->getValue($object);
>>>>>>> parent of c8b1139b (update Ui)
					if (is_object($def)) {
						$item = static::from($def);
					} elseif ($def === null && !Nette\Utils\Validators::is(null, $type)) {
						$item->required();
					} else {
						$item->default($def);
					}
				}
			}
		}

		return (new Structure($items))->castTo($ro->getName());
	}


	/**
	 * @param  string|Schema  $valueType
	 * @param  string|Schema|null  $keyType
	 */
	public static function arrayOf($valueType, $keyType = null): Type
	{
		return (new Type('array'))->items($valueType, $keyType);
	}


	/**
	 * @param  string|Schema  $type
	 */
	public static function listOf($type): Type
	{
		return (new Type('list'))->items($type);
	}
}
