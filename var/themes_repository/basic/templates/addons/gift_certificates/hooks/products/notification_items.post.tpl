{if $gift_cert}
    <div class="product-notification-item clearfix">
        {include file="addons/gift_certificates/views/gift_certificates/components/gift_certificates_cart_icon.tpl" width="50" height="50" class="product-notification-image"}
        <div class="product-notification-content clearfix">
            <a href="{"gift_certificates.update?gift_cert_id=`$gift_cert.gift_cert_id`"|fn_url}" class="product-notification-product-name">{__("gift_certificate")}</a>
            <div class="product-notification-price">
            {include file="common/price.tpl" value=$gift_cert.display_subtotal span_id="price_`$gift_cert.gift_cert_id`" class="none"}
            </div>
        </div>
    </div>
{/if}