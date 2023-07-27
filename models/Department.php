<?php
namespace app\models;
use yii\db\ActiveRecord;

class Department extends ActiveRecord{
    private $id;
    private $dept_name;

    public function rules(){
        return[
            [['id', 'dept_name'], 'required']
        ];
    }

}

?>