<?php
// CHANGED MVW 02/25/14: This coincides with .htaccess located in CONTrack root folder. See http://aaronfrancis.com/blog/2014/1/9/hosting-an-advanced-yii2-application-on-heroku
namespace common\components;


class Request extends \yii\web\Request {
    public $web;
    public $adminUrl;

    public function getBaseUrl(){
        return str_replace($this->web, "", parent::getBaseUrl()) . $this->adminUrl;
    }


    /*
        If you don't have this function, the admin site will 404 if you leave off
        the trailing slash.

        E.g.:

        Wouldn't work:
        site.com/admin

        Would work:
        site.com/admin/

        Using this function, both will work.
    */
    public function resolvePathInfo(){
        if($this->getUrl() === $this->adminUrl){
            return "";
        }else{
            return parent::resolvePathInfo();
        }
    }
}