<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class RequiredNumberValidator extends NumberValidator
{
    /**
     * @return bool
     */
    public function isRequired()
    {
        return true;
    }
}
