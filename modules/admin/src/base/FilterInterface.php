<?php

/**
 * Filter Interface
 * 
 * @author Basil Suter <basil@nadar.io>
 */
interface FilterInterface
{
	/**
	 * Unique identifier name for the effect, no special chars allowed.
	 *
	 * @return string The identifier must match [a-zA-Z0-9\-]
	 */
	abstract public static function identifier();
}