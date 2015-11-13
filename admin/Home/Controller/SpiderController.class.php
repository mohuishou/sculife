<?php
namespace Home\Controller;
use Think\Controller;
class SpiderController extends Controller {
    public function index(){        
        $spider=new ArticleController();
        $spider->spiderArticle();
    }
}
