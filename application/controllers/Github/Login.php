<?php

/**
 * Github登录
 *
 * @package Controller
 * @author  chengxuan <chengxuan@staff.weibo.com>
 */
class Github_LoginController extends AbsController {

    /**
     * 允许未登录访问
     * 
     * @var boolean
     */
    protected $_need_login = false;
    
    public function indexAction() {
        $url = \Model\Github::showLoginUrl();
        return $this->redirect($url);
    }
    
}
