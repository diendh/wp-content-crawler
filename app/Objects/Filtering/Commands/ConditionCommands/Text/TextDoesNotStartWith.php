<?php
/**
 * Created by PhpStorm.
 * User: turgutsaricam
 * Date: 28/03/2020
 * Time: 21:29
 *
 * @since 1.11.0
 */

namespace WPCCrawler\Objects\Filtering\Commands\ConditionCommands\Text;


use Illuminate\Support\Str;
use WPCCrawler\Objects\Filtering\Commands\ConditionCommands\Base\AbstractTextConditionCommand;
use WPCCrawler\Objects\Filtering\Enums\CommandKey;

class TextDoesNotStartWith extends AbstractTextConditionCommand {

    public function getKey(): string {
        return CommandKey::TEXT_DOES_NOT_START_WITH;
    }

    public function getName(): string {
        return _wpcc('Does not start with');
    }

    protected function getInputDescription(): string {
        return _wpcc('Enter the value that the text should not start with');
    }

    protected function onCheckCondition(string $subjectValue, string $optionValue): bool {
        if ($subjectValue === '' || $optionValue === '') return false;

        return !Str::startsWith($subjectValue, $optionValue);
    }

}