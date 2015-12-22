<?php

class BaseModel extends \Phalcon\Mvc\Model 
{    
    public static $hostType;
    public static $tableName;
    
    public function onConstruct()
    {         
        $this->setConnectionService(BaseModel::getConnectionDetails());
        BaseModel::$hostType = null;
        BaseModel::$tableName = null;
    }
    
    public static function getConnectionDetails()
    {        
        foreach(ScConstants::$tableHostMapping as $key => $value)
        {            
            if(in_array(BaseModel::$tableName, $value))
            {                
                if(BaseModel::$hostType == "slave")
                {                    
                    return ScConstants::$masterSlaveMapping[$key];
                }
                else
                {                    
                    return $key;
                }
            }
        }
        return "qb";
    }   
    
    public static function findFirst($parameters = NULL, $hostType = NULL)
    {                
        $class = get_called_class();
        $object = new $class;
        BaseModel::$tableName = $object->getSource();
        BaseModel::$hostType = $hostType;
        return parent::findFirst($parameters);
    }         
}