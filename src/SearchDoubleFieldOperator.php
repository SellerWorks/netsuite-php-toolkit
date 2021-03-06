<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\NetSuite\Model;

/**
 * SearchDoubleFieldOperator
 */
class SearchDoubleFieldOperator {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const between = "between";
	/**
	 * @var string
	 */
	const NSempty = "empty";
	/**
	 * @var string
	 */
	const equalTo = "equalTo";
	/**
	 * @var string
	 */
	const greaterThan = "greaterThan";
	/**
	 * @var string
	 */
	const greaterThanOrEqualTo = "greaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const lessThan = "lessThan";
	/**
	 * @var string
	 */
	const lessThanOrEqualTo = "lessThanOrEqualTo";
	/**
	 * @var string
	 */
	const notBetween = "notBetween";
	/**
	 * @var string
	 */
	const notEmpty = "notEmpty";
	/**
	 * @var string
	 */
	const notEqualTo = "notEqualTo";
	/**
	 * @var string
	 */
	const notGreaterThan = "notGreaterThan";
	/**
	 * @var string
	 */
	const notGreaterThanOrEqualTo = "notGreaterThanOrEqualTo";
	/**
	 * @var string
	 */
	const notLessThan = "notLessThan";
	/**
	 * @var string
	 */
	const notLessThanOrEqualTo = "notLessThanOrEqualTo";
}
