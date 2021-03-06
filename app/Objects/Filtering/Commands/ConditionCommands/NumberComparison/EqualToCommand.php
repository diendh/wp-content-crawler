<?php
/**
 * Created by PhpStorm.
 * User: turgutsaricam
 * Date: 14/03/2020
 * Time: 15:22
 *
 * @since 1.11.0
 */

namespace WPCCrawler\Objects\Filtering\Commands\ConditionCommands\NumberComparison;


use WPCCrawler\Objects\Filtering\Commands\ConditionCommands\Base\AbstractNumericConditionCommand;
use WPCCrawler\Objects\Filtering\Enums\CommandKey;

class EqualToCommand extends AbstractNumericConditionCommand {

    public function getKey(): string {
        return CommandKey::EQUAL_TO;
    }

    public function getName(): string {
        return _wpcc("Equal to");
    }

    protected function onCheckCondition(float $subjectValue, float $optionValue): bool {
        return $subjectValue === $optionValue;
    }

}