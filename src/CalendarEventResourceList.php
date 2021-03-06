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
 * CalendarEventResourceList
 */
class CalendarEventResourceList {
	/**
	 * @access public
	 * @var CalendarEventResource[]
	 */
	public $resource;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"resource" => "CalendarEventResource[]",
		"replaceAll" => "boolean",
	);
}
