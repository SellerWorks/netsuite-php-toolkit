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
 * BillingScheduleType
 */
class BillingScheduleType {

	static $paramtypesmap = array(
	);
	/**
	 * @var string
	 */
	const _chargeBased = "_chargeBased";
	/**
	 * @var string
	 */
	const _fixedBidInterval = "_fixedBidInterval";
	/**
	 * @var string
	 */
	const _fixedBidMilestone = "_fixedBidMilestone";
	/**
	 * @var string
	 */
	const _standard = "_standard";
	/**
	 * @var string
	 */
	const _timeAndMaterials = "_timeAndMaterials";
}
