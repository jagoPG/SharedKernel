<?php

/*
 * This file is part of the Shared Kernel library.
 *
 * Copyright (c) 2016-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace LIN3S\SharedKernel\Domain\Model\Iban;

use LIN3S\SharedKernel\Exception\DomainException;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class IbanInvalidException extends DomainException
{
    public function __construct(string $iban)
    {
        parent::__construct(sprintf('The given "%s" is not a valid.', $iban));
    }
}
