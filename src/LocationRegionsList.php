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
 * LocationRegionsList
 */
class LocationRegionsList {
	/**
	 * @access public
	 * @var LocationRegions[]
	 */
	public $locationRegions;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"locationRegions" => "LocationRegions[]",
		"replaceAll" => "boolean",
	);
}
