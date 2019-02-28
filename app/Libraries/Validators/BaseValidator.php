<?php

namespace App\Libraries\Validators;


use Illuminate\Validation\Factory as IlluminateValidator;
use  App\Exceptions\ValidationException;


abstract class BaseValidator
{
    /**
     * @var Illuminate\Validation\Factory
     */
    protected $oIlluminateValidator;

    public function __construct(IlluminateValidator $oIlluminateValidator)
    {
        $this->oIlluminateValidator = $oIlluminateValidator;
    }

    /**
     * @param array $aData
     * @param array $aRules
     * @param array $aCustomErrors
     * @return bool
     * @throws \Exception
     */
    public function validate(array $aData, array $aRules = array(), array $aCustomErrors = array())
    {
        if (empty($aRules) && !empty($this->rules) && is_array($this->rules))
        {
            $aRules = $this->rules;
        }

        //use Laravel's Validator and validate the data
        $oValidator = $this->oIlluminateValidator->make($aData, $aRules, $aCustomErrors);
        if ($oValidator->fails())
        {
            //validation failed, throw an exception
            throw new \Exception($oValidator->messages());
        }
        return TRUE;
    }
}
