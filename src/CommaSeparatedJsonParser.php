<?php

namespace MPScholten\RequestParser;

class CommaSeparatedJsonParser extends AbstractValueParser
{
    protected function parse($value)
    {
        $value = '[' . $value . ']';
        try {
            $value = json_decode($value, true);
            return $value;
        } catch (\Exception $e) {
            return null;
        }
    }

    /**
     * @param array $defaultValue
     * @return array
     */
    public function defaultsTo($defaultValue)
    {
        return parent::defaultsTo($defaultValue);
    }

    /**
     * @throws \Exception
     * @return array
     */
    public function required()
    {
        return parent::required();
    }
}