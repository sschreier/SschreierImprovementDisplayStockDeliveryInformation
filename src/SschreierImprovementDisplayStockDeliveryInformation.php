<?php
declare(strict_types=1);

namespace Sschreier\ImprovementDisplayStockDeliveryInformation;

use Shopware\Core\Framework\Plugin;

class SschreierImprovementDisplayStockDeliveryInformation extends Plugin
{
    const PLUGIN_CONFIG_VARS = [
        'widthDeliveryStatusIndicator',
        'heightDeliveryStatusIndicator',
        'topDeliveryStatusIndicator',
        'heightCircleDeliveryStatusIndicatorIcon',
        'topCircleDeliveryStatusIndicatorIcon',
        'widthDeliveryStatusIndicatorIcon',
        'heightDeliveryStatusIndicatorIcon',
        'topDeliveryStatusIndicatorIcon',
        'widthDeliveryStatusIndicatorExclamationIcon',
        'heightDeliveryStatusIndicatorExclamationIcon',
        'topDeliveryStatusIndicatorExclamationIcon',
        'marginTopDeliveryStatusIndicatorExclamationIcon'
    ];
}
