<?php

declare(strict_types=1);

/*
 * This file is part of the robertsaupe/php-json package.
 *
 * (c) Robert Saupe <mail@robertsaupe.de>
 *     Kevin Herrera <kevin@herrera.io>
 *     Théo Fidry <theo.fidry@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace robertsaupe\Json\Exception;

use Throwable;
use RuntimeException;
use Webmozart\Assert\Assert;

/**
 * @internal
 */
final class IOException extends RuntimeException {

    private $readFile;

    /**
     * {@inheritdoc}
     *
     * @param string[] $errors
     */
    public function __construct(
        string $message,
        ?string $file = null,
        int $code = 0,
        ?Throwable $previous = null,
    ) {
        if (null !== $file) {
            Assert::file($file);
        }
        
        $this->readFile = $file;

        parent::__construct($message, $code, $previous);
    }

    public function getReadFile(): ?string {
        return $this->readFile;
    }

}

?>