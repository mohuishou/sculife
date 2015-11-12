<?php
/**
 * 川大公告牌后台管理模块之抓取文章模块
 * @author mohuishou <1@lailin.xyz>
 */
namespace Home\Controller;
use Think\Controller;
class ArticleController extends ArticleBaseController {


    /*-------------------青春川大公告&新闻的抓取-----------------------*/
    public function youthArticle(){
        /*-------------配置公告采集数据----------*/
        $noticeConfig=[
            'mainSite'=>'http://youth.scu.edu.cn',
            'url'=>"http://youth.scu.edu.cn/index.php/main/web/notice",
            'tag'=>'青春川大',
            'category'=>'公告',
            'pattern'=>'/<a href="(\/index.php\/main\/web\/notice\/detail\/i\/(.+?))">(.+?)<\/a>/',
            'pattern2'=>'/<div class="content-art">[\s\S]*<div class="share">/',
            'pattern3'=>'/\/uploads.+?>/'
        ];
        $this->grabAllArticle($noticeConfig);
        /*-------------配置新闻采集数据----------*/
        $newsConfig=[
            'mainSite'=>'http://youth.scu.edu.cn',
            'url'=>"http://youth.scu.edu.cn/index.php/main/web/news-group",
            'tag'=>'青春川大',
            'category'=>'团情快讯',
            'pattern'=>'/<a href="(\/index.php\/main\/web\/news-group\/detail\/i\/(.+?))">(.+?)<\/a>/',
            'pattern2'=>'/<div class="content-art">[\s\S]*<div class="share">/',
            'pattern3'=>'/\/uploads.+?>/'
        ];
        $this->grabAllArticle($newsConfig);
    }



    /*-------------------学工部公告&新闻的抓取-----------------------------*/
    public function xscArticle(){
        /*-------------配置公告采集数据----------*/
        $noticeConfig=[
            'mainSite'=>'http://xsc.scu.edu.cn',
            'url'=>"http://xsc.scu.edu.cn/",
            'tag'=>'学工部',
            'category'=>'公告',
            'pattern'=>"/<a href='(\/News_Detail\.aspx\?article_ID=(\d+)\&menu_id=43)' target=_blank>(.+?)<\/a>/",
            'pattern2'=>'/<div id="DivContent" align="left">[\s\S]*<\/div>[\s]+<\/td>/',
        ];
        $this->grabAllArticle($noticeConfig);
        /*-------------配置新闻采集数据----------*/
        $newsConfig=[
            'mainSite'=>'http://xsc.scu.edu.cn',
            'url'=>"http://xsc.scu.edu.cn/",
            'tag'=>'学工部',
            'category'=>'新闻',
            'pattern'=>"/<a href='(\/News_Detail\.aspx\?article_ID=(\d+)\&menu_id=42)' target=_blank>(.+?)<\/a>/",
            'pattern2'=>'/<div id="DivContent" align="left">[\s\S]*<\/div>[\s]+<\/td>/',
        ];
        $this->grabAllArticle($newsConfig);

    }


}