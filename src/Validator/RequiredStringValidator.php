<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class RequiredStringValidator extends StringValidator
{
    /**
     * @return bool
     */
    public function isRequired()
    {
        return true;
    }
}
