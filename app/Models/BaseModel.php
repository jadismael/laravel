<?php


namespace App\Models;


class BaseModel extends \Illuminate\Database\Eloquent\Model
{

    protected $aData;

    public function __construct($aData = [])
    {
        $this->aData = $aData;
        parent::__construct($aData);
    }


}
