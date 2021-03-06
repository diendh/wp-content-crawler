<?php
/**
 * Created by PhpStorm.
 * User: turgutsaricam
 * Date: 15/03/2020
 * Time: 08:08
 *
 * @since 1.11.0
 */

namespace WPCCrawler\Objects\Views\Select;


use WPCCrawler\Objects\Views\Base\AbstractSelectWithLabel;

class SelectPostStatusWithLabel extends AbstractSelectWithLabel {

    public function getKey(): string {
        return 'form-items.combined.select-post-status-with-label';
    }

}