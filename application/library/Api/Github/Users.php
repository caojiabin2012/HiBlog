<?php

/**
 * Github 用户API
 *
 * @package Api
 * @author  chengxuan <i@chengxuan.li>
 */
namespace Api\Github;
class Users extends Abs {
    
    
    /**
     * 获取当前用户用户信息
     * 
     * @return \mixed
     */
    public function user() {
        return $this->_get('user');
    }
    
    
    
} 