<?php

namespace MPScholten\RequestParser;

class BooleanParser extends AbstractValueParser
{
    protected function describe()
    {
        return "either true or false";
    }

    protected function parse($value)
    {
        if (strtoupper($value) === 'TRUE' || $value === '1') {
            return true;
        }
        if (strtoupper($value) === 'FALSE' || $value === '0') {
            return false;
        }
        return null;
    }

    /**
     * @param boolean $defaultValue
     * @return boolean
     */
    public function defaultsTo($defaultValue)
    {
        return parent::defaultsTo($defaultValue);
    }

    /**
     * @throws \Exception
     * @return boolean
     */
    public function required($invalidValueMessage = null, $notFoundMessage = null)
    {
        return parent::required($invalidValueMessage, $notFoundMessage);
    }
}
