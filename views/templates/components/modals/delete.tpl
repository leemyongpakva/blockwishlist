{**
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
 *}

<div
  class="wishlist-delete"
  data-url="{$url}"
>
  <div
    class="wishlist-modal modal fade"
    {literal}
      :class="{show: !isHidden}"
    {/literal}
    tabindex="-1"
    role="dialog"
    aria-modal="true"
  >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">((title))</h5>
          <button
            type="button"
            class="close"
            @click="toggleModal"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="modal-text">((placeholder))</p> 
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="modal-cancel btn btn-secondary"
            data-dismiss="modal"
            @click="toggleModal"
          >
            ((cancelText))
          </button>

          <button
            type="button"
            class="btn btn-primary"
            @click="deleteWishlist"
          >
            ((deleteText))
          </button>
        </div>
      </div>
    </div>
  </div>

  <div 
    class="modal-backdrop fade"
    {literal}
      :class="{in: !isHidden}"
    {/literal}
  >
  </div>
</div>

