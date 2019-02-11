<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class StringValidator extends AbstractValidator
{
    /**
     * Validate wether given data is string.
     *
     * @param mixed $nodeData
     *
     * @return bool
     */
    public function isValid($nodeData)
    {
        return (is_string($nodeData) && $nodeData != "");
    }
}
