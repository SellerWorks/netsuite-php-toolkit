<?php
/**
 * (c) NetSuite, Inc.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace SellerWorks\Netsuite\Model;

/**
 * TimeBill
 */
class TimeBill extends Record {
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customForm;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $employee;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $tranDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $approvalStatus;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $customer;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $caseTaskEvent;
	/**
	 * @access public
	 * @var boolean
	 */
	public $isBillable;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $payrollItem;
	/**
	 * @access public
	 * @var boolean
	 */
	public $paidExternally;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $workplace;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $item;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $department;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $class;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $location;
	/**
	 * @access public
	 * @var Duration
	 */
	public $hours;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $price;
	/**
	 * @access public
	 * @var TimeBillTimeType
	 */
	public $timeType;
	/**
	 * @access public
	 * @var float
	 */
	public $rate;
	/**
	 * @access public
	 * @var boolean
	 */
	public $overrideRate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $temporaryLocalJurisdiction;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $temporaryStateJurisdiction;
	/**
	 * @access public
	 * @var string
	 */
	public $memo;
	/**
	 * @access public
	 * @var string
	 */
	public $rejectionNote;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $subsidiary;
	/**
	 * @access public
	 * @var boolean
	 */
	public $supervisorApproval;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $createdDate;
	/**
	 * @access public
	 * @var dateTime
	 */
	public $lastModifiedDate;
	/**
	 * @access public
	 * @var RecordRef
	 */
	public $timeSheet;
	/**
	 * @access public
	 * @var string
	 */
	public $status;
	/**
	 * @access public
	 * @var boolean
	 */
	public $timeModified;
	/**
	 * @access public
	 * @var CustomFieldList
	 */
	public $customFieldList;
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

	static $paramtypesmap = array(
		"customForm" => "RecordRef",
		"employee" => "RecordRef",
		"tranDate" => "dateTime",
		"approvalStatus" => "RecordRef",
		"customer" => "RecordRef",
		"caseTaskEvent" => "RecordRef",
		"isBillable" => "boolean",
		"payrollItem" => "RecordRef",
		"paidExternally" => "boolean",
		"workplace" => "RecordRef",
		"item" => "RecordRef",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"hours" => "Duration",
		"price" => "RecordRef",
		"timeType" => "TimeBillTimeType",
		"rate" => "float",
		"overrideRate" => "boolean",
		"temporaryLocalJurisdiction" => "RecordRef",
		"temporaryStateJurisdiction" => "RecordRef",
		"memo" => "string",
		"rejectionNote" => "string",
		"subsidiary" => "RecordRef",
		"supervisorApproval" => "boolean",
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"timeSheet" => "RecordRef",
		"status" => "string",
		"timeModified" => "boolean",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}
