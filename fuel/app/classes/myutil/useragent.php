<?php

class Useragent{

    private $ua;
    private $device;

    public function UserAgent(){
        $this->deviceCheck();
    }

    public function deviceCheck(){

        //ユーザーエージェント取得
        $this->ua = $_SERVER['HTTP_USER_AGENT'];

        if(strpos($this->ua,'iPhone') !== false) || (strpos($this->ua,'iPad') !== false){
            //iPhone
            $this->device = 'iOs';
        }
        elseif(strpos($this->ua,'iPad') !== false){
            //iPad
            $this->device = 'iPad';
        }
        elseif((strpos($this->ua,'Android') !== false) && (strpos($this->ua, 'Mobile') !== false)){
            //Android
            $this->device = 'Android_m';
        }
        elseif(strpos($this->ua,'Android') !== false){
            //Android
            $this->device = 'Android_t';
        }
        else{
            $this->device = 'PC';
        }
    }

    public function getDevice(){
        return $this->device;
    }
}

?>