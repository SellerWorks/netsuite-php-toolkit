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
 * GeneralTokenSupportedOperationsListList
 */
class GeneralTokenSupportedOperationsListList {
	/**
	 * @access public
	 * @var PaymentInstrumentSupportedOperation[]
	 */
	public $GeneralTokenSupportedOperationsList;

	static $paramtypesmap = array(
		"GeneralTokenSupportedOperationsList" => "PaymentInstrumentSupportedOperation[]",
	);
}
