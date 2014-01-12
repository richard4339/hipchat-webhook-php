<?php
/**
 * hipchat-webhook-php
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2014, Richard Lynskey
 * @license https://fedoraproject.org/wiki/Licensing/Beerware Beerware
 * @version 0.1
 *
 * Built 2014-01-12 13:40 CDT by richard
 *
 * ----------------------------------------------------------------------------
 * "THE BEER-WARE LICENSE" (Revision 42):
 * Richard Lynskey <richard@mozor.net> wrote this file. As long as you retain this
 * notice you can do whatever you want with this stuff. If we meet some day, and
 * you think this stuff is worth it, you can buy me a beer in return.
 * ----------------------------------------------------------------------------
 *
 */

require "http_get_request_body.php";

class webhook
{

    private $body;
    private $json;

    function __construct()
    {
        $this->body = http_get_request_body();
        $this->json = json_decode($this->body);
    }

    function __get($name)
    {
        switch ($name) {
            case 'event':
                return $this->json->event;
                break;
            case 'from':
                return $this->json->item->message->from->name;
                break;
            case 'message':
                return $this->json->item->message->message;
                break;
            case 'room_id':
                return $this->json->item->room->id;
                break;
            case 'room_name':
                return $this->json->item->room->name;
                break;
            case 'mentions':
                foreach ($this->json->item->message->mentions as $i) {
                    $output[] = $i->name;
                }
                return $output;
                break;
        }
    }
}

?>