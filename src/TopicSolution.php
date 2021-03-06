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
 * TopicSolution
 */
class TopicSolution {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $solution;
	/**
	 * @access public
	 * @var string
	 */
	public $message;

	static $paramtypesmap = array(
		"solution" => "RecordRef",
		"message" => "string",
	);
}
