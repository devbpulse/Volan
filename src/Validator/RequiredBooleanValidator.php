<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class RequiredBooleanValidator extends BooleanValidator
{
    /**
     * @return bool
     */
    public function isRequired()
    {
        return true;
    }
}
