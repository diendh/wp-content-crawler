<?php
/**
 * Created by PhpStorm.
 * User: turgutsaricam
 * Date: 12/04/2020
 * Time: 14:26
 *
 * @since 1.11.0
 */

namespace WPCCrawler\Objects\Filtering\Interfaces;


use WPCCrawler\Objects\Filtering\Commands\Base\AbstractBaseCommand;

interface NeedsCommand {

    /**
     * @param AbstractBaseCommand|null $command
     * @since 1.11.0
     */
    public function setCommand(?AbstractBaseCommand $command): void;

    /**
     * @return AbstractBaseCommand|null
     * @since 1.11.0
     */
    public function getCommand(): ?AbstractBaseCommand;

}