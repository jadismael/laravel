<?php

namespace App\Libraries\Validators;

class UserLoginValidator extends BaseValidator
{


    public $rules = [
            'user_id' => 'exists:users,id',
            'group_id' => 'exists:group,group_id',

        ];



}


