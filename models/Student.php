<?php
namespace app\models;
 
use Yii;
 
class Student extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'student';
    }
    public function rules()
    {
        return [
            [['full_name', 'address', 'phone'], 'required'],
            [['full_name', 'address'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 10]
        ];
    }   
}

