<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class RequiredArrayValidator extends ArrayValidator
{
    /**
     * @return bool
     */
    public function isRequired()
    {
        return true;
    }
}
