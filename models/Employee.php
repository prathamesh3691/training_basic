<?php
namespace app\models;
use yii\db\ActiveRecord;

class Employee extends ActiveRecord{
    private $emp_name;
    private $dept_id;

    public function rules(){
        return[
            [['emp_name'], 'required']
        ];
    }

}

?>