<?php

/*
 * This file is part of the Shared Kernel library.
 *
 * Copyright (c) 2016 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\SharedKernel\Domain\Model;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class PhoneFormatInvalidException extends Exception
{
    public function __construct()
    {
        parent::__construct('Invalid phone format');
    }
}
