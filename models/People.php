<?php

namespace app\models;

use yii\db\ActiveRecord;

class People extends ActiveRecord
{
    public function rules(){
        return [
            [['name', 'age'], 'required'],
        ];
    }
}