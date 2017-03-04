<?php

class CCommand{
    public static function func1($paramStr){
        usleep(3000000);
        echo json_encode($paramStr).__FUNCTION__.PHP_EOL;
    }

    public static function func2($arrayObj){
        if(isset($arrayObj['key1'])){
            return true;
        }
        if(isset($arrayObj[0]['key2'])){
            return json_encode($arrayObj[0]['key2']);
        }
    }
    public static function main(){
        static::func1('start');
        $arrayObj = [["key2"=>["val"=>12]],];
        CCommand::func2($arrayObj);
    }
}

echo "TEST:\n";
usleep(1000000);
CCommand::main();

