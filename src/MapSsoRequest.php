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
 * MapSsoRequest
 */
class MapSsoRequest {
	/**
	 * @access public
	 * @var SsoCredentials
	 */
	public $ssoCredentials;

	static $paramtypesmap = array(
		"ssoCredentials" => "SsoCredentials",
	);
}
