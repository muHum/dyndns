<?php
/**
 * @author Tim Weyand <https://www.weyand.biz>
 * @author Daniel 'muHum' T. <https://www.rustilldawn.net>
 * @copyright 2020 - Tim Weyand & muHum
 * @license https://opensource.org/licenses/MIT MIT License
 * @version 1.1
 */
namespace website\weyand\dyndns\authentication;
use website\weyand\dyndns;

/**
 * Description of rtdauth
 * modified by muHum for rustilldawn.net based on the version from checkip.net
 */
class rtdauth {
    public static function authenticate() {
        if (!isset($_GET['username']) && !isset($_GET['password'])) {
            dyndns\status::sendErrorMessage('Error: No user data submitted', true, 400);
    	}

        if (dyndns\config::ddns_auth_username == $_GET['username'] && dyndns\config::ddns_auth_password == $_GET['password']) {
                return true;
        }

        dyndns\status::sendErrorMessage('Error: Wrong username or password', true, 401);
    }
}