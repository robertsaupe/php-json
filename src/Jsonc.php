<?php

declare(strict_types=1);

/*
 * This file is part of the robertsaupe/php-json package.
 *
 * (c) Robert Saupe <mail@robertsaupe.de>
 *     Alexander Shostak <https://stackoverflow.com/a/43439966>
 *     Kevin Herrera <kevin@herrera.io>
 *     Théo Fidry <theo.fidry@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace robertsaupe\Json;

use stdClass;
use robertsaupe\Json\Json;

/**
 * decode and validate jsonc or jsonc-file
 */
class Jsonc extends Json {

    /**
     * {@inheritdoc}
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function decode(string $jsoncString, bool $assoc = false): array|stdClass {
        $jsonString = $this->stripComments($jsoncString);
        return parent::decode($jsonString, $assoc);
    }

    private function stripComments(string $jsoncString): string {
        // https://stackoverflow.com/a/43439966
        return preg_replace('~(" (?:\\\\. | [^"])*+ ") | \# [^\v]*+ | // [^\v]*+ | /\* .*? \*/~xs', '$1', $jsoncString);
    }

}

?>