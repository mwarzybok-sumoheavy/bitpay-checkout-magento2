<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace BitpayCheckout\BPCheckout\Model\Config\Source;

/**
 *Crypto Model
 */
class Crypto implements \Magento\Framework\Option\ArrayInterface
{

    public function toOptionArray()
    {

        return [
            '1' => 'All',
            'BTC' => 'BTC',
            'BTCH' => 'BTCH',
        ];

    }
}
