<?php
/**
 * 2007-2020 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2020 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */
class BlockWishlistListsModuleFrontController extends ModuleFrontController
{
    /**
     * @var bool If set to true, will be redirected to authentication page
     */
    public $auth = true;

    public function initContent()
    {
        parent::initContent();

        $this->context->smarty->assign(
        [
            'url' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'getAllWishlist']),
            'createUrl' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'createNewWishlist']),
            'deleteListUrl' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'deleteWishlist']),
            'deleteProductUrl' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'deleteProductFromWishlist']),
            'renameUrl' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'renameWishlist']),
            'shareUrl' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'getUrlByIdWishlist']),
            'addUrl' => Context::getContext()->link->getModuleLink('blockwishlist', 'action', ['action' => 'addProductToWishlist']),
            'accountLink' => '#',
            'wishlistsTitlePage' => Configuration::get('blockwishlist_WishlistPageName', $this->context->language->id),
            'newWishlistCTA' => Configuration::get('blockwishlist_CreateButtonLabel', $this->context->language->id),
        ]
      );

        $this->context->controller->registerJavascript(
          'blockwishlistController',
          'modules/blockwishlist/public/wishlistcontainer.bundle.js',
          [
            'priority' => 200,
          ]
      );

        $this->setTemplate('module:blockwishlist/views/templates/pages/lists.tpl');
    }
}
