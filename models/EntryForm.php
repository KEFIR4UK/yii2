<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 10/17/16
 * Time: 12:34 PM
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],

        ];
    }



}