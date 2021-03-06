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

namespace LIN3S\SharedKernel\Infrastructure\Application\SimpleBus;

use LIN3S\SharedKernel\Application\CommandBus;
use SimpleBus\Message\Bus\MessageBus;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class SimpleBusCommandBus implements CommandBus
{
    private $messageBus;

    public function __construct(MessageBus $messageBus)
    {
        $this->messageBus = $messageBus;
    }

    public function handle($command) : void
    {
        $this->messageBus->handle($command);
    }
}
