<?php
/**
 * @author Tim Weyand <https://www.weyand.biz>
 * @author Daniel 'muHum' T. <https://www.rustilldawn.net>
 * @copyright 2017 - Tim Weyand
 * @license https://opensource.org/licenses/MIT MIT License
 * @version 1.0
 */
namespace website\weyand\dyndns;

class config {
    const cacheFile = __DIR__.'/data/dyndns.data';
    const mysqlServer = 'localhost';
    const mysqlPort = '3306';
    const mysqlUsername = 'dyndns';
    const mysqlPassword = 'UseSafePasswordHere';
    const mysqlDatabase = 'psa';

    //you can restrict the usage of this module - but you do not have to.
    const allowedDynDNSDomains = array();

    const applicationHash = 'YouWantToChangeMe';

    // modified by muHum based on the version from checkip.net
    // possible values [false,'basic','db','rtdauth']
    const authentication = 'rtdauth';

    // rtdauth data
    const myDynDNSDomain = 'my.ddns.server.abc';
    const ddns_auth_username = 'UseSafeUsernameHere';
    const ddns_auth_password = 'UseSafePasswordHere';

    // basic authentication data
    const basic_auth_username = 'username';
    const basic_auth_password = 'password';
}