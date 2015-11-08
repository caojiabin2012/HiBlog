<?php

/**
 * Github相关数据模型
 *
 * @package Model
 * @author  chengxuan <chengxuan@staff.weibo.com>
 */
namespace Model;
class Github extends Abs {
    
    /**
     * 获取登录页URL
     * 
     * @return string
     */
    static public function showLoginUrl() {
        $url = 'https://github.com/login/oauth/authorize?client_id=%s&scope=public_repo';
        $client_id = \Model\Config::show('github_client_id');
        $result = sprintf($url, $client_id);
        return $result;
    }
    
    /**
     * 获到用户GitHub默认的博客Repo
     * 
     * @return \stdClass
     */
    static public function showDefaultBlogRepo() {
        $github_user = new \Api\Github\Users();
        
        $user = $github_user->user();
        if(!empty($user->login)) {
            $github_respositories = new \Api\Github\Respositories();
            $repo = $github_respositories->getRepos($user->login, self::showDefaultBlogRepoName($user->login));
        }
        return $repo;
    }
    
    /**
     * 获取默认博客的名称 
     * 
     * @param string $user_login
     * 
     * @return \string
     */
    static public function showDefaultBlogRepoName($user_login) {
        return "{$user_login}.github.io";
    }
    
    
    
    
} 
