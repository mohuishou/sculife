<?php
/**
 * sculife数据操作模块
 * @author mohuishou <1@lailin.xyz>
 */

namespace Home\Controller;
use Think\Controller;
class HandleBaseController extends Controller {

    /**
     * 获取所有文章以及文章的分页显示
     * @param $db 数据库链接句柄
     * @param $config 配置信息：
     *                   'map' => array; 查询条件
     *                   'limit' => int; 分页条数
     *                   'getField'= > ; 需要查询的字段
     * @return array ：
     *              'list' => array ;返回查询结果
     *              'page' => html; 返回分页结果
     */
    public function getAll($db,$config){

        $count      = $db->where($config['map'])->count();// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,$config['limit']);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $list = $db->where($config['map'])->order('id DESC')->limit($Page->firstRow.','.$Page->listRows)->getField($config['getField']);
        return $data=[
            'list'=>$list,
            'page'=>$show
        ];
    }

    /**
     * 查询文章目录
     * @param $map 查询的条件
     * @param $limit 返回数目
     * @return array 返回一个文章的目录
     */
    public function getArticle($map,$limit){
        $article=M('article');
        return $article->where($map)->limit($limit)->order('number DESC')->getField('id,title,category,tag,ctime');
    }

    /**
     * 查询系统日志
     * @param $map 查询的条件
     * @param $limit 返回数目
     * @return array 返回系统日志
     */
    public function getLog($map,$limit){
        $log=M('log');
        return $log->where($map)->order('id DESC')->limit($limit)->select();
    }

    /**
     * 查询配置文件
     * @param $map 查询的条件
     * @param $limit 返回的数目
     * @return mixed 返回的系统日志
     */
    public function getConfig($map,$limit){
        $config=M('config');
        $data=$config->where($map)->order('id DESC')->limit($limit)->select();
        foreach($data as $k => $v){
            $pattern=explode('#',trim($v['pattern']));
//            print_r($pattern);
            $data[$k]['pattern']=$pattern;
        }
//        print_r($data);
        return $data;
    }

    public function getCategory($map,$limit){
        $category=M('category');
        $data=$category->where($map)->order('id DESC')->limit($limit)->select();
        return $data;
    }

}