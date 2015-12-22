<?php

class LayoutData {
   
    public function getLayoutData($layoutName='common'){
        if($layoutName=='user')
            $arr = $this->getUserLayoutData();
        else
            $arr = $this->getCommonLayoutData();
        
        return $arr;
    }
    
    
    private function getUserLayoutData(){
        $arr->name = 'shopclues';
        return $arr;
    }
    private function getCommonLayoutData(){
        
        $arr->name = 'Common';
        return $arr;
    }
    
}
