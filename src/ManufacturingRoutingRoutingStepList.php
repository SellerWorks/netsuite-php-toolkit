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
 * ManufacturingRoutingRoutingStepList
 */
class ManufacturingRoutingRoutingStepList {
	/**
	 * @access public
	 * @var ManufacturingRoutingRoutingStep[]
	 */
	public $manufacturingRoutingRoutingStep;
	/**
	 * @access public
	 * @var boolean
	 */
	public $replaceAll;

	static $paramtypesmap = array(
		"manufacturingRoutingRoutingStep" => "ManufacturingRoutingRoutingStep[]",
		"replaceAll" => "boolean",
	);
}
