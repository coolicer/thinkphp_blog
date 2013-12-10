<?php
  class SignAction extends Action{   
    public function verify(){      
      import('ORG.Util.Image');     
      Image::buildImageVerify($length=5);
    } 
  	public function index(){      
  		$this->display();
  	}
    public function getArg(){        
      $this->username = $this->_post('userName');
      $this->email = $this->_post('email');
      $this->pwd = $this->_post('pwd');   
      $this->repwd = $this->_post('repwd'); 
    }
  	public function signup(){          
  		if($_POST){
        $this->getArg();
        if($this->checkPostData()){
          $User = M('User');
          $posData = array(
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->pwd
          );
          $result = $User->add($posData);
           if($result) {
                  $this->success('操作成功！');
              }else{
                  $this->error('写入错误！');
              }
        } 
      } 		
  		$this->display('signup');  		
  	}
  	public function checkPostData(){  	
      $this->getArg();  		
      if(empty($this->username) || empty($this->email) || empty($this->pwd) || empty($this->repwd)){
  			 throw new Exception('不能为空！');          
  			 return false;
  		}else if($this->pwd !== $this->repwd){
  			 throw new Exception('两次密码不一样。');
  			 return false;
  		}else{ 
        return ture;
  		}
  	}
    public function signin(){       
      if($_POST){
         $this->getArg();
         $User = M('User');
         $result = $User->where('username="%s"',array($this->username))->field('id,username,password')->find();        
         $password = $result['password'];        
         if(session('verify') != md5($_POST['verify'])) {
           $this->error('验证码错误！');
         }
         if(!empty($password) && $password == $this->pwd){            
        		session('name', $this->username);
        		redirect('/User/index',0);
         }else{
            $this->redirect('Sign/signin', array('info' => 0));
         }
      }     
      if(isset($_GET['info']) && $_GET['info'] == 0){
          $this->info = '帐号或密码错误';
      }
      $this->display('signin');
    }
    public function signout(){
        session('name',null);
        redirect('/index.php');        
    }    
  }