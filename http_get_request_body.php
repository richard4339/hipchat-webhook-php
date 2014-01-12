<?php
/**
 * hipchat-php
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2014, Richard Lynskey
 * @license https://fedoraproject.org/wiki/Licensing/Beerware Beerware
 * @version 0.1
 *
 * Built 2013-12-31 12:09 CDT by richard
 *
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Richard Lynskey <richard@mozor.net> wrote this file. As long as you retain this
 * notice you can do whatever you want with this stuff. If we meet some day, and
 * you think this stuff is worth it, you can buy me a beer in return.
 * ----------------------------------------------------------------------------
 *
 */

if (!function_exists('http_get_request_body'))
{
    function http_get_request_body()
    {
        $handle = fopen('php://input', 'r');
        while (!feof($handle)) {
            $body .= fread($handle, 1024);
        }

        return $body;
    }
}

?>