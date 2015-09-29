<?php
/**
 * @package Yaf
 * @author 李枨煊<lcx165@gmail.com> (DOC Only)
 */
class Yaf_Request_Abstract {

    const SCHEME_HTTP = null;

    const SCHEME_HTTPS = null;

    public $module;

    public $controller;

    public $action;

    public $method;

    protected $params;

    protected $language;

    protected $_exception;

    protected $_base_uri;

    protected $uri;

    protected $dispatched;

    protected $routed;

    /**
     * The setBaseUri purpose
     *
     * @param string $uir 
     *
     * @return void
     */
    public function setBaseUri($uir) {}

    /**
     * The setRouted purpose
     *
     * @param string $flag 
     *
     * @return void
     */
    public function setRouted($flag = null) {}

    /**
     * The isDispatched purpose
     *
     * @return void
     */
    public function isDispatched() {}

    /**
     * The getParam purpose
     *
     * @param string $name 
     * @param string $default 
     *
     * @return void
     */
    public function getParam($name, $default = null) {}

    /**
     * The isGet purpose
     *
     * @return void
     */
    public function isGet() {}

    /**
     * The isCli purpose
     *
     * @return void
     */
    public function isCli() {}

    /**
     * 返回SERVER变量的值
     *
     * @param string $name the variable name
     * @param string $default 如果提供这个参数，在没找到变量值时候此参数的值将被返回
     *
     * @return void
     */
    public function getServer($name, $default = null) {}

    /**
     * The setDispatched purpose
     *
     * @return void
     */
    public function setDispatched() {}

    /**
     * The getActionName purpose
     *
     * @return void
     */
    public function getActionName() {}

    /**
     * The getControllerName purpose
     *
     * @return void
     */
    public function getControllerName() {}

    /**
     * The getModuleName purpose
     *
     * @return void
     */
    public function getModuleName() {}

    /**
     * The isOptions purpose
     *
     * @return void
     */
    public function isOptions() {}

    /**
     * The getException purpose
     *
     * @return void
     */
    public function getException() {}

    /**
     * The setActionName purpose
     *
     * @param string $action 
     *
     * @return void
     */
    public function setActionName($action) {}

    /**
     * The setRequestUri purpose
     *
     * @param string $uir 
     *
     * @return void
     */
    public function setRequestUri($uir) {}

    /**
     * The getRequestUri purpose
     *
     * @return void
     */
    public function getRequestUri() {}

    /**
     * The isHead purpose
     *
     * @return void
     */
    public function isHead() {}

    /**
     * The isPut purpose
     *
     * @return void
     */
    public function isPut() {}

    /**
     * The setControllerName purpose
     *
     * @param string $controller 
     *
     * @return void
     */
    public function setControllerName($controller) {}

    /**
     * The setParam purpose
     *
     * @param string $name 
     * @param string $value 
     *
     * @return void
     */
    public function setParam($name, $value = null) {}

    /**
     * The getBaseUri purpose
     *
     * @return void
     */
    public function getBaseUri() {}

    /**
     * The getLanguage purpose
     *
     * @return void
     */
    public function getLanguage() {}

    /**
     * The getParams purpose
     *
     * @return void
     */
    public function getParams() {}

    /**
     * The isPost purpose
     *
     * @return void
     */
    public function isPost() {}

    /**
     * The getMethod purpose
     *
     * @return void
     */
    public function getMethod() {}

    /**
     * The isXmlHttpRequest purpose
     *
     * @return void
     */
    public function isXmlHttpRequest() {}

    /**
     * The isRouted purpose
     *
     * @return void
     */
    public function isRouted() {}

    /**
     * 取得ENV变量的值
     *
     * @param string $name the variable name
     * @param string $default 如果这个参数被提供了，当参数找不到的时候它将被返回
     *
     * @return void
     */
    public function getEnv($name, $default = null) {}

    /**
     * The setModuleName purpose
     *
     * @param string $module 
     *
     * @return void
     */
    public function setModuleName($module) {}


}