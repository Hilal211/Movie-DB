<?php
/**
 * Created by PhpStorm.
 * User: gabykaram
 * Date: 2019-07-01
 * Time: 10:00
 * File: helpers.php
 *
 * @param $data
 * @param bool $status
 * @param array $messages
 *
 * @return array
 */

function apiResponse( $data, $status = true, $messages = array() ) {
    return array(
        'success'  => $status,
        'data'     => $data,
        'messages' => $messages
    );
}
require_once __DIR__ . '/field_types.php';
