<?php
/**
 * @package Yaf
 * @author 李枨煊<lcx165@gmail.com> (DOC Only)
 */
class Yaf_Request_Http extends Yaf_Request_Abstract {
    /**
     * fetch a query parameter
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getQuery($name, $default = null) {}

    /**
     * 返回POST变量
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getPost($name, $default = null) {}

    /**
     * The getFiles purpose
     *
     * @return void
     */
    public function getFiles() {}

    /**
     * 是否为Ajax请求
     *
     * @return bool
     */
    public function isXmlHttpRequest() {}

    /**
     * 返回Cookie变量
     *
     * @param string $name the cookie name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，提供的参数将被返回
     *
     * @return mixed
     */
    public function getCookie($name, $default = null) {}

    /**
     * The __clone purpose
     *
     * @return void
     */
    private function __clone() {}

    /**
     * The getRequest purpose
     *
     * @return void
     */
    public function getRequest() {}

    /**
     * The __construct purpose
     */
    function __construct() {}

    /**
     * 从客户端返回变量
     *
     * @param string $name the variable name
     * @param string $default 如果提供了此参数，当变量在未被找到的情况下，它将被返回
     *
     * @return mixed
     */
    public function get($name, $default = null) {}


}