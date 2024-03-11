<?php

/*
 Copyright (c) 2009-2010 hamcrest.org
 */

// This file is generated from the static method @factory doctags.

namespace Hamcrest;

use Hamcrest\Arrays\IsArrayContaining;
use Hamcrest\Arrays\IsArrayContainingKey;
use Hamcrest\Arrays\IsArrayContainingKeyValuePair;
use Hamcrest\Arrays\IsArrayWithSize;
use Hamcrest\Collection\IsEmptyTraversable;
use Hamcrest\Collection\IsTraversableWithSize;
use Hamcrest\Core\CombinableMatcher;
use Hamcrest\Core\Every;
use Hamcrest\Core\HasToString;
use Hamcrest\Core\Is;
use Hamcrest\Core\IsAnything;
use Hamcrest\Core\IsEqual;
use Hamcrest\Core\IsIdentical;
use Hamcrest\Core\IsInstanceOf;
use Hamcrest\Core\IsNot;
use Hamcrest\Core\IsNull;
use Hamcrest\Core\IsSame;
use Hamcrest\Core\IsTypeOf;
use Hamcrest\Core\Set;
use Hamcrest\Number\IsCloseTo;
use Hamcrest\Number\OrderingComparison;
use Hamcrest\Text\IsEmptyString;
use Hamcrest\Text\IsEqualIgnoringCase;
use Hamcrest\Text\IsEqualIgnoringWhiteSpace;
use Hamcrest\Text\MatchesPattern;
use Hamcrest\Text\StringContains;
use Hamcrest\Text\StringContainsIgnoringCase;
use Hamcrest\Text\StringEndsWith;
use Hamcrest\Text\StringStartsWith;
use Hamcrest\Type\IsArray;
use Hamcrest\Type\IsBoolean;
use Hamcrest\Type\IsCallable;
use Hamcrest\Type\IsDouble;
use Hamcrest\Type\IsInteger;
use Hamcrest\Type\IsNumeric;
use Hamcrest\Type\IsObject;
use Hamcrest\Type\IsResource;
use Hamcrest\Type\IsScalar;
use Hamcrest\Type\IsString;
use Hamcrest\Xml\HasXPath;

/**
 * A series of static factories for all hamcrest matchers.
 */
class Matchers
{

    /**
     * Evaluates to true only if each $matcher[$i] is satisfied by $array[$i].
     */
    public static function anArray(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Arrays\IsArray', 'anArray'), $args);
    }

    /**
     * Evaluates to true if any item in an array satisfies the given matcher.
     *
     * @param mixed $item as a {@link Hamcrest\Matcher} or a value.
     *
     * @return IsArrayContaining
     */
    public static function hasItemInArray($item)
    {
        return IsArrayContaining::hasItemInArray($item);
    }

    /**
     * Evaluates to true if any item in an array satisfies the given matcher.
     *
     * @param mixed $item as a {@link Hamcrest\Matcher} or a value.
     *
     * @return IsArrayContaining
     */
    public static function hasValue($item)
    {
        return IsArrayContaining::hasItemInArray($item);
    }

    /**
     * An array with elements that match the given matchers.
     */
    public static function arrayContainingInAnyOrder(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInAnyOrder', 'arrayContainingInAnyOrder'), $args);
    }

    /**
     * An array with elements that match the given matchers.
     */
    public static function containsInAnyOrder(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInAnyOrder', 'arrayContainingInAnyOrder'), $args);
    }

    /**
     * An array with elements that match the given matchers in the same order.
     */
    public static function arrayContaining(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInOrder', 'arrayContaining'), $args);
    }

    /**
     * An array with elements that match the given matchers in the same order.
     */
    public static function contains(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Arrays\IsArrayContainingInOrder', 'arrayContaining'), $args);
    }

    /**
     * Evaluates to true if any key in an array matches the given matcher.
     *
     * @param mixed $key as a {@link Hamcrest\Matcher} or a value.
     *
     * @return IsArrayContainingKey
     */
    public static function hasKeyInArray($key)
    {
        return IsArrayContainingKey::hasKeyInArray($key);
    }

    /**
     * Evaluates to true if any key in an array matches the given matcher.
     *
     * @param mixed $key as a {@link Hamcrest\Matcher} or a value.
     *
     * @return IsArrayContainingKey
     */
    public static function hasKey($key)
    {
        return IsArrayContainingKey::hasKeyInArray($key);
    }

    /**
     * Test if an array has both an key and value in parity with each other.
     */
    public static function hasKeyValuePair($key, $value)
    {
        return IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
    }

    /**
     * Test if an array has both an key and value in parity with each other.
     */
    public static function hasEntry($key, $value)
    {
        return IsArrayContainingKeyValuePair::hasKeyValuePair($key, $value);
    }

    /**
     * Does array size satisfy a given matcher?
     *
     * @param Matcher|int $size as a {@link Hamcrest\Matcher} or a value.
     *
     * @return IsArrayWithSize
     */
    public static function arrayWithSize($size)
    {
        return IsArrayWithSize::arrayWithSize($size);
    }

    /**
     * Matches an empty array.
     */
    public static function emptyArray()
    {
        return IsArrayWithSize::emptyArray();
    }

    /**
     * Matches an empty array.
     */
    public static function nonEmptyArray()
    {
        return IsArrayWithSize::nonEmptyArray();
    }

    /**
     * Returns true if traversable is empty.
     */
    public static function emptyTraversable()
    {
        return IsEmptyTraversable::emptyTraversable();
    }

    /**
     * Returns true if traversable is not empty.
     */
    public static function nonEmptyTraversable()
    {
        return IsEmptyTraversable::nonEmptyTraversable();
    }

    /**
     * Does traversable size satisfy a given matcher?
     */
    public static function traversableWithSize($size)
    {
        return IsTraversableWithSize::traversableWithSize($size);
    }

    /**
     * Evaluates to true only if ALL of the passed in matchers evaluate to true.
     */
    public static function allOf(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Core\AllOf', 'allOf'), $args);
    }

    /**
     * Evaluates to true if ANY of the passed in matchers evaluate to true.
     */
    public static function anyOf(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Core\AnyOf', 'anyOf'), $args);
    }

    /**
     * Evaluates to false if ANY of the passed in matchers evaluate to true.
     */
    public static function noneOf(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Core\AnyOf', 'noneOf'), $args);
    }

    /**
     * This is useful for fluently combining matchers that must both pass.
     * For example:
     * <pre>
     *   assertThat($string, both(containsString("a"))->andAlso(containsString("b")));
     * </pre>
     */
    public static function both(Matcher $matcher)
    {
        return CombinableMatcher::both($matcher);
    }

    /**
     * This is useful for fluently combining matchers where either may pass,
     * for example:
     * <pre>
     *   assertThat($string, either(containsString("a"))->orElse(containsString("b")));
     * </pre>
     */
    public static function either(Matcher $matcher)
    {
        return CombinableMatcher::either($matcher);
    }

    /**
     * Wraps an existing matcher and overrides the description when it fails.
     */
    public static function describedAs(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Core\DescribedAs', 'describedAs'), $args);
    }

    /**
     * @param Matcher $itemMatcher
     *   A matcher to apply to every element in an array.
     *
     * @return Every
     *   Evaluates to TRUE for a collection in which every item matches $itemMatcher
     */
    public static function everyItem(Matcher $itemMatcher)
    {
        return Every::everyItem($itemMatcher);
    }

    /**
     * Does array size satisfy a given matcher?
     */
    public static function hasToString($matcher)
    {
        return HasToString::hasToString($matcher);
    }

    /**
     * Decorates another Matcher, retaining the behavior but allowing tests
     * to be slightly more expressive.
     *
     * For example:  assertThat($cheese, equalTo($smelly))
     *          vs.  assertThat($cheese, is(equalTo($smelly)))
     */
    public static function is($value)
    {
        return Is::is($value);
    }

    /**
     * This matcher always evaluates to true.
     *
     * @param string $description A meaningful string used when describing itself.
     *
     * @return IsAnything
     */
    public static function anything($description = 'ANYTHING')
    {
        return IsAnything::anything($description);
    }

    /**
     * Test if the value is an array containing this matcher.
     *
     * Example:
     * <pre>
     * assertThat(array('a', 'b'), hasItem(equalTo('b')));
     * //Convenience defaults to equalTo()
     * assertThat(array('a', 'b'), hasItem('b'));
     * </pre>
     */
    public static function hasItem(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Core\IsCollectionContaining', 'hasItem'), $args);
    }

    /**
     * Test if the value is an array containing elements that match all of these
     * matchers.
     *
     * Example:
     * <pre>
     * assertThat(array('a', 'b', 'c'), hasItems(equalTo('a'), equalTo('b')));
     * </pre>
     */
    public static function hasItems(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Core\IsCollectionContaining', 'hasItems'), $args);
    }

    /**
     * Is the value equal to another value, as tested by the use of the "=="
     * comparison operator?
     */
    public static function equalTo($item)
    {
        return IsEqual::equalTo($item);
    }

    /**
     * Tests of the value is identical to $value as tested by the "===" operator.
     */
    public static function identicalTo($value)
    {
        return IsIdentical::identicalTo($value);
    }

    /**
     * Is the value an instance of a particular type?
     * This version assumes no relationship between the required type and
     * the signature of the method that sets it up, for example in
     * <code>assertThat($anObject, anInstanceOf('Thing'));</code>
     */
    public static function anInstanceOf($theClass)
    {
        return IsInstanceOf::anInstanceOf($theClass);
    }

    /**
     * Is the value an instance of a particular type?
     * This version assumes no relationship between the required type and
     * the signature of the method that sets it up, for example in
     * <code>assertThat($anObject, anInstanceOf('Thing'));</code>
     */
    public static function any($theClass)
    {
        return IsInstanceOf::anInstanceOf($theClass);
    }

    /**
     * Matches if value does not match $value.
     */
    public static function not($value)
    {
        return IsNot::not($value);
    }

    /**
     * Matches if value is null.
     */
    public static function nullValue()
    {
        return IsNull::nullValue();
    }

    /**
     * Matches if value is not null.
     */
    public static function notNullValue()
    {
        return IsNull::notNullValue();
    }

    /**
     * Creates a new instance of IsSame.
     *
     * @param mixed $object
     *   The predicate evaluates to true only when the argument is
     *   this object.
     *
     * @return IsSame
     */
    public static function sameInstance($object)
    {
        return IsSame::sameInstance($object);
    }

    /**
     * Is the value a particular built-in type?
     */
    public static function typeOf($theType)
    {
        return IsTypeOf::typeOf($theType);
    }

    /**
     * Matches if value (class, object, or array) has named $property.
     */
    public static function set($property)
    {
        return Set::set($property);
    }

    /**
     * Matches if value (class, object, or array) does not have named $property.
     */
    public static function notSet($property)
    {
        return Set::notSet($property);
    }

    /**
     * Matches if value is a number equal to $value within some range of
     * acceptable error $delta.
     */
    public static function closeTo($value, $delta)
    {
        return IsCloseTo::closeTo($value, $delta);
    }

    /**
     * The value is not > $value, nor < $value.
     */
    public static function comparesEqualTo($value)
    {
        return OrderingComparison::comparesEqualTo($value);
    }

    /**
     * The value is > $value.
     */
    public static function greaterThan($value)
    {
        return OrderingComparison::greaterThan($value);
    }

    /**
     * The value is >= $value.
     */
    public static function greaterThanOrEqualTo($value)
    {
        return OrderingComparison::greaterThanOrEqualTo($value);
    }

    /**
     * The value is >= $value.
     */
    public static function atLeast($value)
    {
        return OrderingComparison::greaterThanOrEqualTo($value);
    }

    /**
     * The value is < $value.
     */
    public static function lessThan($value)
    {
        return OrderingComparison::lessThan($value);
    }

    /**
     * The value is <= $value.
     */
    public static function lessThanOrEqualTo($value)
    {
        return OrderingComparison::lessThanOrEqualTo($value);
    }

    /**
     * The value is <= $value.
     */
    public static function atMost($value)
    {
        return OrderingComparison::lessThanOrEqualTo($value);
    }

    /**
     * Matches if value is a zero-length string.
     */
    public static function isEmptyString()
    {
        return IsEmptyString::isEmptyString();
    }

    /**
     * Matches if value is a zero-length string.
     */
    public static function emptyString()
    {
        return IsEmptyString::isEmptyString();
    }

    /**
     * Matches if value is null or a zero-length string.
     */
    public static function isEmptyOrNullString()
    {
        return IsEmptyString::isEmptyOrNullString();
    }

    /**
     * Matches if value is null or a zero-length string.
     */
    public static function nullOrEmptyString()
    {
        return IsEmptyString::isEmptyOrNullString();
    }

    /**
     * Matches if value is a non-zero-length string.
     */
    public static function isNonEmptyString()
    {
        return IsEmptyString::isNonEmptyString();
    }

    /**
     * Matches if value is a non-zero-length string.
     */
    public static function nonEmptyString()
    {
        return IsEmptyString::isNonEmptyString();
    }

    /**
     * Matches if value is a string equal to $string, regardless of the case.
     */
    public static function equalToIgnoringCase($string)
    {
        return IsEqualIgnoringCase::equalToIgnoringCase($string);
    }

    /**
     * Matches if value is a string equal to $string, regardless of whitespace.
     */
    public static function equalToIgnoringWhiteSpace($string)
    {
        return IsEqualIgnoringWhiteSpace::equalToIgnoringWhiteSpace($string);
    }

    /**
     * Matches if value is a string that matches regular expression $pattern.
     */
    public static function matchesPattern($pattern)
    {
        return MatchesPattern::matchesPattern($pattern);
    }

    /**
     * Matches if value is a string that contains $substring.
     */
    public static function containsString($substring)
    {
        return StringContains::containsString($substring);
    }

    /**
     * Matches if value is a string that contains $substring regardless of the case.
     */
    public static function containsStringIgnoringCase($substring)
    {
        return StringContainsIgnoringCase::containsStringIgnoringCase($substring);
    }

    /**
     * Matches if value contains $substrings in a constrained order.
     */
    public static function stringContainsInOrder(/* args... */)
    {
        $args = func_get_args();
        return call_user_func_array(array('\Hamcrest\Text\StringContainsInOrder', 'stringContainsInOrder'), $args);
    }

    /**
     * Matches if value is a string that ends with $substring.
     */
    public static function endsWith($substring)
    {
        return StringEndsWith::endsWith($substring);
    }

    /**
     * Matches if value is a string that starts with $substring.
     */
    public static function startsWith($substring)
    {
        return StringStartsWith::startsWith($substring);
    }

    /**
     * Is the value an array?
     */
    public static function arrayValue()
    {
        return IsArray::arrayValue();
    }

    /**
     * Is the value a boolean?
     */
    public static function booleanValue()
    {
        return IsBoolean::booleanValue();
    }

    /**
     * Is the value a boolean?
     */
    public static function boolValue()
    {
        return IsBoolean::booleanValue();
    }

    /**
     * Is the value callable?
     */
    public static function callableValue()
    {
        return IsCallable::callableValue();
    }

    /**
     * Is the value a float/double?
     */
    public static function doubleValue()
    {
        return IsDouble::doubleValue();
    }

    /**
     * Is the value a float/double?
     */
    public static function floatValue()
    {
        return IsDouble::doubleValue();
    }

    /**
     * Is the value an integer?
     */
    public static function integerValue()
    {
        return IsInteger::integerValue();
    }

    /**
     * Is the value an integer?
     */
    public static function intValue()
    {
        return IsInteger::integerValue();
    }

    /**
     * Is the value a numeric?
     */
    public static function numericValue()
    {
        return IsNumeric::numericValue();
    }

    /**
     * Is the value an object?
     */
    public static function objectValue()
    {
        return IsObject::objectValue();
    }

    /**
     * Is the value an object?
     */
    public static function anObject()
    {
        return IsObject::objectValue();
    }

    /**
     * Is the value a resource?
     */
    public static function resourceValue()
    {
        return IsResource::resourceValue();
    }

    /**
     * Is the value a scalar (boolean, integer, double, or string)?
     */
    public static function scalarValue()
    {
        return IsScalar::scalarValue();
    }

    /**
     * Is the value a string?
     */
    public static function stringValue()
    {
        return IsString::stringValue();
    }

    /**
     * Wraps <code>$matcher</code> with {@link Hamcrest\Core\IsEqual)
     * if it's not a matcher and the XPath in <code>count()</code>
     * if it's an integer.
     */
    public static function hasXPath($xpath, $matcher = null)
    {
        return HasXPath::hasXPath($xpath, $matcher);
    }
}
