<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to suporte.developer@buscape-inc.com so we can send you a copy immediately.
 *
 * @category   Buscape
 * @package    Buscape_PagamentoDigital
 * @copyright  Copyright (c) 2010 BuscapÃ© Company (http://www.buscapecompany.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class PagSeguro_PagSeguro_Block_Payment extends Mage_Core_Block_Template
{

    protected function getConvertCode() {
        $code = $this->getRequest()->getParam("code");
        $payment_url = $this->base64url_decode($code);
        $resultado = parse_url($payment_url);
        parse_str($resultado['query']);

        return array('code' => $code, 'urlCompleta' => $payment_url);
    }

    private function base64url_decode($b64Text) {
        return base64_decode(strtr($b64Text, '-_,', '+/='));
    }

}