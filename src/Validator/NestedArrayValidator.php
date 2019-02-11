<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class NestedArrayValidator extends ArrayValidator
{
    /**
     * @return bool
     */
    public function isNested()
    {
        return true;
    }
}
