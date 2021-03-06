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

namespace LIN3S\SharedKernel\Event;

use LIN3S\SharedKernel\Domain\Model\DomainEventCollection;

/**
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class Stream
{
    private $name;
    private $version;
    private $events;

    public function __construct(StreamName $name, StreamVersion $version, DomainEventCollection $events)
    {
        $this->name = $name;
        $this->version = $version;
        $this->events = $events;
    }

    public function name() : StreamName
    {
        return $this->name;
    }

    public function version() : StreamVersion
    {
        return $this->version;
    }

    public function events() : DomainEventCollection
    {
        return $this->events;
    }
}
