<?php

/*
 *  @author Super Dev <achmun0526@gmail.com>
 */

namespace Volan\Validator;

class ArrayValidator extends AbstractValidator
{
    /**
     * @param mixed $nodeData
     *
     * @return bool
     */
    public function isValid($nodeData)
    {
        return is_array($nodeData);
    }
}
