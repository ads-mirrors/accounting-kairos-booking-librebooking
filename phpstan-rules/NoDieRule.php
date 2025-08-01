<?php

declare(strict_types=1);

namespace LibreBookingDev\PHPStan;

use PhpParser\Node;
use PhpParser\Node\Expr\Exit_;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\Rule;
use PHPStan\Rules\RuleErrorBuilder;

/**
 * Custom PHPStan rule to disallow die() and exit() function calls
 */
class NoDieRule implements Rule
{
    public function getNodeType(): string
    {
        return Exit_::class;
    }

    public function processNode(Node $node, Scope $scope): array
    {
        assert($node instanceof Exit_);

        return [
            RuleErrorBuilder::message('Use of die() or exit() is not allowed. Use proper error handling instead.')
                ->identifier('librebooking.noDie')
                ->build(),
        ];
    }
}
