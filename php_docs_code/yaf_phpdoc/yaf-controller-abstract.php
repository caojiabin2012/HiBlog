<?php
/**
 * Yaf_Controller_Abstract 是Yaf的MVC体系的核心部分。
 * MVC是指Model-View-Controller, 是一个用于分离应用逻辑和表现逻辑的设计模式。
 * 每个用户自定义controller都应当继承Yaf_Controller_Abstract。
 * 你会发现在你自己的controller中无法定义__construct方法。因此，Yaf_Controller_Abstract
 * 提供了一个魔术方法Yaf_Controller_Abstract::init()。
 * 如果在你自己的controller里面已经定义了一个init()方法，当你的controller被实例化的时候，它将被调用。
 * Action可能需要参数，当一个请求来到的时候，在路由中如果请求的参数有相同名称的变量（例如：Yaf_Request_Abstract::getParam），
 * Yaf将把他们传递给action方法（see Yaf_Action_Abstract::execute）。
 * 
 * @package Yaf
 * @author 李枨煊<lcx165@gmail.com> (DOC Only)
 */
abstract class Yaf_Controller_Abstract {

    /**
     * Yaf_Controller_Abstract 是Yaf的MVC体系的核心部分。
     * MVC是指Model-View-Controller, 是一个用于分离应用逻辑和表现逻辑的设计模式。
     * 每个用户自定义controller都应当继承Yaf_Controller_Abstract。
     * 你会发现在你自己的controller中无法定义__construct方法。因此，Yaf_Controller_Abstract
     * 提供了一个魔术方法Yaf_Controller_Abstract::init()。
     * 如果在你自己的controller里面已经定义了一个init()方法，当你的controller被实例化的时候，它将被调用。
     * Action可能需要参数，当一个请求来到的时候，在路由中如果请求的参数有相同名称的变量（例如：Yaf_Request_Abstract::getParam），
     * Yaf将把他们传递给action方法（see Yaf_Action_Abstract::execute）。
     */
    public $actions;

    protected $_module;

    protected $_name;

    protected $_request;

    protected $_response;

    protected $_invoke_args;

    protected $_view;

    /**
     * The initView purpose
     *
     * @param array $options 
     *
     * @return void
     */
    public function initView($options = null) {}

    /**
     * 获取当前的视图引擎
     *
     * @return Yaf_View_Interface
     */
    public function getView() {}

    /**
     * 获取当前控制器所属的模块名
     *
     * @return string
     */
    public function getModuleName() {}

    /**
     * The setViewpath purpose
     *
     * @param string $view_directory 
     *
     * @return void
     */
    public function setViewpath($view_directory) {}

    /**
     * The getViewpath purpose
     *
     * @return void
     */
    public function getViewpath() {}

    /**
     * The getInvokeArgs purpose
     *
     * @return void
     */
    public function getInvokeArgs() {}

    /**
     * 控制器初始化
     *
     * @return void
     */
    public function init() {}

    /**
     * The getInvokeArg purpose
     *
     * @param string $name 
     *
     * @return void
     */
    public function getInvokeArg($name) {}

    /**
     * The forward purpose
     *
     * @param string $module 要跳转的目的Action的Module, 如果是NULL, 则默认Module会被采用.
     * @param string $controller 要跳转的目的Action的Controller, 如果是NULL, 则默认Controller会被采用.
     * @param string $action 要跳转的目的Action.
     * @param array $paramters 跳转参数, 可以在目的Action中通过Yaf_Request_Abstrace::getParam来获取.
     *
     * @return void
     */
    public function forward($module, $controller = null, $action = null, $paramters = null) {}

    /**
     * The display purpose
     *
     * @param string $tpl 
     * @param array $parameters 
     *
     * @return bool
     */
    protected function display($tpl, $parameters = null) {}

    /**
     * 渲染视图模板
     *
     * @param string $tpl 
     * @param array $parameters 
     *
     * @return string
     */
    protected function render($tpl, $parameters = null) {}

    /**
     * Yaf_Controller_Abstract 不能被克隆
     *
     * @return void
     */
    final private function __clone() {}

    /**
     * The getResponse purpose
     *
     * @return Yaf_Response_Abstract
     */
    public function getResponse() {}

    /**
     * The getRequest purpose
     *
     * @return Yaf_Request_Abstract
     */
    public function getRequest() {}

    /**
     * Yaf_Controller_Abstract constructor
     */
    final private function __construct() {}

    /**
     * The redirect purpose
     *
     * @param string $url 
     *
     * @return void
     */
    public function redirect($url) {}


}