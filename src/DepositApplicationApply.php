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
 * DepositApplicationApply
 */
class DepositApplicationApply {
	/**
	 * @access public
	 * @var integer
	 */
	public $doc;
	/**
	 * @access public
	 * @var integer
	 */
	public $line;
	/**
	 * @access public
	 * @var boolean
	 */
	public $apply;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $applyDate;
	/**
	 * @access public
	 * @var string
	 */
	public $job;
	/**
	 * @access public
	 * @var string
	 */
	public $type;
	/**
	 * @access public
	 * @var string
	 */
	public $refNum;
	/**
	 * @access public
	 * @var float
	 */
	public $total;
	/**
	 * @access public
	 * @var float
	 */
	public $due;
	/**
	 * @access public
	 * @var string
	 */
	public $currency;
	/**
	 * @access public
	 * @var float
	 */
	public $amount;

	static $paramtypesmap = array(
		"doc" => "integer",
		"line" => "integer",
		"apply" => "boolean",
		"applyDate" => "dateTime",
		"job" => "string",
		"type" => "string",
		"refNum" => "string",
		"total" => "float",
		"due" => "float",
		"currency" => "string",
		"amount" => "float",
	);
}
