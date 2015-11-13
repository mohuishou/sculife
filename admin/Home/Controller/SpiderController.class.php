<?php
namespace Home\Controller;
use Think\Controller;
class SpiderController extends Controller {
    public function index(){

//       print_r((new HandleController())->getConfig());
//        echo count($data);
//        print_r($data);
        $spider=new ArticleController();
        $spider->spiderArticle();
//        $spider->xscArticle();
    }
}
