<?php
namespace Hamcrest;

/*
 Copyright (c) 2009 hamcrest.org
 */

use;
use Iterator;
use IteratorAggregate;

/**
 * A description of a Matcher. A Matcher will describe itself to a description
 * which can later be used for reporting.
 *
 * @see Hamcrest\Matcher::describeTo()
 */
interface Description
{

    /**
     * Appends some plain text to the description.
     *
     * @param string $text
     *
     * @return Description
     */
    public function appendText($text);

    /**
     * Appends the description of a {@link Hamcrest\SelfDescribing} value to
     * this description.
     *
     * @param SelfDescribing $value
     *
     * @return Description
     */
    public function appendDescriptionOf(SelfDescribing $value);

    /**
     * Appends an arbitary value to the description.
     *
     * @param mixed $value
     *
     * @return Description
     */
    public function appendValue($value);

    /**
     * Appends a list of values to the description.
     *
     * @param string $start
     * @param string $separator
     * @param string $end
     * @param array|IteratorAggregate|Iterator $values
     *
     * @return Description
     */
    public function appendValueList($start, $separator, $end, $values);

    /**
     * Appends a list of {@link Hamcrest\SelfDescribing} objects to the
     * description.
     *
     * @param string $start
     * @param string $separator
     * @param string $end
     * @param array|\IteratorAggregate|\\Iterator $values
     *   must be instances of {@link Hamcrest\SelfDescribing}
     *
     * @return Description
     */
    public function appendList($start, $separator, $end, $values);
}
