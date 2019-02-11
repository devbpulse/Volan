<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class RequiredNestedArrayValidator extends NestedArrayValidator
{
    /**
     * @return bool
     */
    public function isRequired()
    {
        return true;
    }
}
