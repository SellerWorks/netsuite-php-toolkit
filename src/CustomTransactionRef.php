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
 * CustomTransactionRef
 */
class CustomTransactionRef extends BaseRef {
	/**
	 * @access public
	 * @var string
	 */
	public $internalId;
	/**
	 * @access public
	 * @var string
	 */
	public $externalId;
	/**
	 * @access public
	 * @var string
	 */
	public $typeId;
	/**
	 * @access public
	 * @var string
	 */
	public $scriptId;

	static $paramtypesmap = array(
		"internalId" => "string",
		"externalId" => "string",
		"typeId" => "string",
		"scriptId" => "string",
	);
}
