<?php
  class IndexAction extends Action{
  	public function index(){
  	    $this->user = session('name');
        if(isset($this->user)){
            $postModel = M('Post');
            $posts = $postModel->where('author="%s"',array($this->user))->order('id desc')->select();
            $this->posts = $posts;
        }else{
            $postModel = M('Post');                              
            import('ORG.Util.Page');// 导入分页类
            $count      = $postModel->count();// 查询满足要求的总记录数            
            $Page       = new Page($count, 5);// 实例化分页类 传入总记录数和每页显示的记录数
            $show       = $Page->show();// 分页显示输出            
            $list = $postModel->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();  
            $this->posts = $list;  
            $this->page = $show;       
        }
  	   
  		$this->display();
  	}
  }