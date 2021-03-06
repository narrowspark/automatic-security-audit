<?php

declare(strict_types=1);

/**
 * Copyright (c) 2018-2020 Daniel Bannert
 *
 * For the full copyright and license information, please view
 * the LICENSE.md file that was distributed with this source code.
 *
 * @see https://github.com/narrowspark/automatic
 */

namespace Narrowspark\Automatic\Security\Command\Formatter;

use Narrowspark\Automatic\Security\Contract\Command\Formatter as FormatterContract;
use Symfony\Component\Console\Style\SymfonyStyle;

final class JsonFormatter implements FormatterContract
{
    /**
     * {@inheritdoc}
     */
    public function displayResults(SymfonyStyle $output, array $vulnerabilities): void
    {
        $output->writeln((string) \json_encode($vulnerabilities, \JSON_PRETTY_PRINT));
    }
}
