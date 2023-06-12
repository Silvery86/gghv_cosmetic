<?php
/**
 * @project p-shop
 * @author  Im A Feature
 * @email   im.not.a.bug.173@gmail.com
 * @date    17/1/2023
 * @time    10:25 AM
 **/

namespace app\common\traits;
/**
 * Class OneSignalTrait.
 * This trait handle any function that affected OneSignal.
 */
trait OneSignalTrait {

	/**
	 * Trigger signal on/off.
	 */
	public function triggerSignal() {
		if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['signal'])) {
			echo "<script>window.close();</script>";
		}
	}
}
