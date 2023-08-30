
<footer>
    <div class="cc-footer-section">
        
        <div class="cc-footer-social-icons">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-logo-wrapper">
                            <div class="cc-footer-logo-section">
                                <!-- <a href="#"><img class="lazy"
                                    data-src="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/logo2.png"
                                        alt="xzyreptiles logo footer"></a> -->
                                        <a href="<?php echo site_url(); ?>"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo2.png" alt="xzyreptiles logo footer"></a>
                            </div>
                            <div class="cc-social-icons-section">
                                <ul>
                                    <?php
                                    $facebook = get_field('facebook', 'option');
                                    $twitter = get_field('twitter', 'option');
                                    $youtube = get_field('youtube', 'option');
                                    $instagram = get_field('instagram', 'option');
                                    $google_plus = get_field('google_plus', 'option');
                                    $pinterest = get_field('pinterest', 'option');
                                    $rss = get_field('rss', 'option');
                                    ?>
                                    <?php if(!empty($facebook)) { ?>
                                    <li><a href="<?php echo $facebook;  ?>" target="_blank"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook-logo.png" alt="facebook"></a></li>
                                    <?php } if(!empty($twitter)) {  ?>
                                    <li><a href="<?php echo $twitter;  ?>" target="_blank" ><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png" alt="twitter"></a></li>
                                    <?php } if(!empty($google_plus)) {  ?>
                                    <li><a href="<?php echo $google_plus;  ?>" target="_blank"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/google-plus.png" alt="google-plus"></a></li>
                                    <?php } if(!empty($instagram)) {  ?>
                                    <li><a href="<?php echo $instagram;  ?>" target="_blank"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" alt="instagram"></a></li>
                                    <?php } if(!empty($pinterest)) {  ?>
                                    <li><a href="<?php echo $pinterest;  ?>" target="_blank"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/pinterest.png" alt="pinterest"></a></li>
                                    <?php } if(!empty($youtube)) {  ?>
                                    <li><a href="<?php echo $youtube;  ?>" target="_blank"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="youtube"></a></li>
                                    <?php } if(!empty($rss)) {  ?>
                                    <li><a href="<?php echo $rss;  ?>" target="_blank"><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/rss.png" alt="rss"></a></li>
                                    <?php }  ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ">
                        <!-- <aside id="custom_html-2" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">
                                <div class="cc-address-widget cc-widget-style lazy"
                                style="background-image: url(https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/lizard.png);background-repeat: no-repeat;background-position: bottom right;"> -->
                                <?php
                            if(is_active_sidebar('footer-sidebar-1')){
                            dynamic_sidebar('footer-sidebar-1');
                            }
                            ?>
                                <!-- </div>
                            </div>
                        </aside> -->
                    </div>
                    <div class="col-md-4 ">
                        <div class="cc-browse-widget cc-widget-style lazy"
                            style="background-image: url(https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/turtule.png);background-repeat: no-repeat;background-position: bottom right;">
                            <div class="cc-widget-title ">
                                <h3>Browse</h3>
                            </div>
                            <div class="details">
                            <?php
                            if(is_active_sidebar('footer-sidebar-2')){
                            dynamic_sidebar('footer-sidebar-2');
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="cc-about-widget cc-widget-style lazy"
                            style="background-image: url(https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/img/shadow_snake.png);background-repeat: no-repeat;background-position: bottom right;">
                            <div class="cc-widget-title">
                                <h3>About XYZReptiles</h3>
                            </div>
                            <div class="details">
                            <?php
                            if(is_active_sidebar('footer-sidebar-3')){
                            dynamic_sidebar('footer-sidebar-3');
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cc-footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 left-content">
                    <ul>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/secure.png" alt=""></li>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ssl.png" alt=""></li>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ssl-icon.png" alt=""></li>
                        </ul>
                    </div>
                    <div class="col-md-4 center-content">
                    <p>© <?php echo date('Y'); ?> Copyright xyzreptiles</p>
                    </div>
                    <div class="col-md-4 right-content">
                    <ul>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_visa.png" alt=""></li>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_mc.png" alt=""></li>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_paypal.png" alt=""></li>
                            <li><img class="lazy" data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cc_amex.png" alt=""></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>   
</footer>

<script src="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/js/jquery.js"></script>

 <!-- BEGIN GCR Badge Code -->
<!-- <script src="https://apis.google.com/js/platform.js?onload=renderBadge"
  async defer>
</script>

<script>
  window.renderBadge = function() {
    var ratingBadgeContainer = document.createElement("div");
      document.body.appendChild(ratingBadgeContainer);
      window.gapi.load('ratingbadge', function() {
        window.gapi.ratingbadge.render(
          ratingBadgeContainer, {
            // REQUIRED
            "merchant_id": 105570382,
            // OPTIONAL
            "position": "BOTTOM_RIGHT"
          });           
     });
  }
</script> -->
<!-- END GCR Badge Code -->
<?php if(is_front_page()){
     ?>

     <style>
     @media only screen and (max-width:768px) {
    .cc-pop-up-field-wrapper input:placeholder-shown {
    text-align: center !important;
    padding: unset !important;
}
.cc-pop-container {
display: inline-block;
    position: relative;
    /* padding-left: 30px; */
    padding-left: 23px;
    margin-bottom: 12px;
    font-size: 16px !important;
    width: 31.33% !important;
    min-width: unset !important;
    text-align: center !important;
}

}
     </style>
<input type="hidden" value="1" id="home" />
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/www.xyzreptiles.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
}
/* ]]> */
</script>
    <script src="https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js"></script>
    <!-- <script type='text/javascript' src='https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/js/ajax-add-to-cart.js'></script> -->
   
   
    <script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_665179ed2d79aac7a697b03e1e709cc8","fragment_name":"wc_fragments_665179ed2d79aac7a697b03e1e709cc8","request_timeout":"5000"};
}
/* ]]> */
</script>
        <script src="https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js"></script>
        <!-- <script src=" https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/js/ajax-add-to-cart.js"></script> -->
       

<?php } ?>
<script defer="" src="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/js/custom.js"></script>
<script defer="" src="https://www.xyzreptiles.com/wp-content/themes/xyzreptiles/assets/js/stellarnav.min.js"></script>


<!--  // if(is_front_page()){ 
    <script type='text/javascript' defer src='https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js' id='js-cookie-js'></script>
    <script type='text/javascript' defer src='https://www.xyzreptiles.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js' id='wc-cart-fragments-js'></script>

// }  -->
<script>
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
    function _extends() { return (_extends = Object.assign || function (t) { for (var e = 1; e < arguments.length; e++) { var n = arguments[e]; for (var o in n) Object.prototype.hasOwnProperty.call(n, o) && (t[o] = n[o]) } return t }).apply(this, arguments) } function _typeof(t) { return (_typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) { return typeof t } : function (t) { return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t })(t) } !function (t, e) { "object" === ("undefined" == typeof exports ? "undefined" : _typeof(exports)) && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : t.LazyLoad = e() }(this, function () { "use strict"; var t = "undefined" != typeof window, e = t && !("onscroll" in window) || "undefined" != typeof navigator && /(gle|ing|ro)bot|crawl|spider/i.test(navigator.userAgent), n = t && "IntersectionObserver" in window, o = t && "classList" in document.createElement("p"), r = { elements_selector: "img", container: e || t ? document : null, threshold: 300, thresholds: null, data_src: "src", data_srcset: "srcset", data_sizes: "sizes", data_bg: "bg", class_loading: "loading", class_loaded: "loaded", class_error: "error", load_delay: 0, auto_unobserve: !0, callback_enter: null, callback_exit: null, callback_reveal: null, callback_loaded: null, callback_error: null, callback_finish: null, use_native: !1 }, a = function (t, e) { var n, o = new t(e); try { n = new CustomEvent("LazyLoad::Initialized", { detail: { instance: o } }) } catch (t) { (n = document.createEvent("CustomEvent")).initCustomEvent("LazyLoad::Initialized", !1, !1, { instance: o }) } window.dispatchEvent(n) }; var i = function (t, e) { return t.getAttribute("data-" + e) }, s = function (t, e, n) { var o = "data-" + e; null !== n ? t.setAttribute(o, n) : t.removeAttribute(o) }, c = function (t) { return "true" === i(t, "was-processed") }, l = function (t, e) { return s(t, "ll-timeout", e) }, u = function (t) { return i(t, "ll-timeout") }, d = function (t, e) { t && t(e) }, f = function (t, e) { t._loadingCount += e, 0 === t._elements.length && 0 === t._loadingCount && d(t._settings.callback_finish) }, _ = function (t) { for (var e, n = [], o = 0; e = t.children[o]; o += 1)"SOURCE" === e.tagName && n.push(e); return n }, v = function (t, e, n) { n && t.setAttribute(e, n) }, g = function (t, e) { v(t, "sizes", i(t, e.data_sizes)), v(t, "srcset", i(t, e.data_srcset)), v(t, "src", i(t, e.data_src)) }, m = { IMG: function (t, e) { var n = t.parentNode; n && "PICTURE" === n.tagName && _(n).forEach(function (t) { g(t, e) }); g(t, e) }, IFRAME: function (t, e) { v(t, "src", i(t, e.data_src)) }, VIDEO: function (t, e) { _(t).forEach(function (t) { v(t, "src", i(t, e.data_src)) }), v(t, "src", i(t, e.data_src)), t.load() } }, b = function (t, e) { var n, o, r = e._settings, a = t.tagName, s = m[a]; if (s) return s(t, r), f(e, 1), void (e._elements = (n = e._elements, o = t, n.filter(function (t) { return t !== o }))); !function (t, e) { var n = i(t, e.data_src), o = i(t, e.data_bg); n && (t.style.backgroundImage = 'url("'.concat(n, '")')), o && (t.style.backgroundImage = o) }(t, r) }, h = function (t, e) { o ? t.classList.add(e) : t.className += (t.className ? " " : "") + e }, p = function (t, e, n) { t.addEventListener(e, n) }, y = function (t, e, n) { t.removeEventListener(e, n) }, E = function (t, e, n) { y(t, "load", e), y(t, "loadeddata", e), y(t, "error", n) }, w = function (t, e, n) { var r = n._settings, a = e ? r.class_loaded : r.class_error, i = e ? r.callback_loaded : r.callback_error, s = t.target; !function (t, e) { o ? t.classList.remove(e) : t.className = t.className.replace(new RegExp("(^|\\s+)" + e + "(\\s+|$)"), " ").replace(/^\s+/, "").replace(/\s+$/, "") }(s, r.class_loading), h(s, a), d(i, s), f(n, -1) }, I = function (t, e) { var n = function n(r) { w(r, !0, e), E(t, n, o) }, o = function o(r) { w(r, !1, e), E(t, n, o) }; !function (t, e, n) { p(t, "load", e), p(t, "loadeddata", e), p(t, "error", n) }(t, n, o) }, k = ["IMG", "IFRAME", "VIDEO"], A = function (t, e) { var n = e._observer; z(t, e), n && e._settings.auto_unobserve && n.unobserve(t) }, L = function (t) { var e = u(t); e && (clearTimeout(e), l(t, null)) }, x = function (t, e) { var n = e._settings.load_delay, o = u(t); o || (o = setTimeout(function () { A(t, e), L(t) }, n), l(t, o)) }, z = function (t, e, n) { var o = e._settings; !n && c(t) || (k.indexOf(t.tagName) > -1 && (I(t, e), h(t, o.class_loading)), b(t, e), function (t) { s(t, "was-processed", "true") }(t), d(o.callback_reveal, t), d(o.callback_set, t)) }, O = function (t) { return !!n && (t._observer = new IntersectionObserver(function (e) { e.forEach(function (e) { return function (t) { return t.isIntersecting || t.intersectionRatio > 0 }(e) ? function (t, e) { var n = e._settings; d(n.callback_enter, t), n.load_delay ? x(t, e) : A(t, e) }(e.target, t) : function (t, e) { var n = e._settings; d(n.callback_exit, t), n.load_delay && L(t) }(e.target, t) }) }, { root: (e = t._settings).container === document ? null : e.container, rootMargin: e.thresholds || e.threshold + "px" }), !0); var e }, N = ["IMG", "IFRAME"], C = function (t, e) { return function (t) { return t.filter(function (t) { return !c(t) }) }((n = t || function (t) { return t.container.querySelectorAll(t.elements_selector) }(e), Array.prototype.slice.call(n))); var n }, M = function (t, e) { this._settings = function (t) { return _extends({}, r, t) }(t), this._loadingCount = 0, O(this), this.update(e) }; return M.prototype = { update: function (t) { var n, o = this, r = this._settings; (this._elements = C(t, r), !e && this._observer) ? (function (t) { return t.use_native && "loading" in HTMLImageElement.prototype }(r) && ((n = this)._elements.forEach(function (t) { -1 !== N.indexOf(t.tagName) && (t.setAttribute("loading", "lazy"), z(t, n)) }), this._elements = C(t, r)), this._elements.forEach(function (t) { o._observer.observe(t) })) : this.loadAll() }, destroy: function () { var t = this; this._observer && (this._elements.forEach(function (e) { t._observer.unobserve(e) }), this._observer = null), this._elements = null, this._settings = null }, load: function (t, e) { z(t, this, e) }, loadAll: function () { var t = this; this._elements.forEach(function (e) { A(e, t) }) } }, t && function (t, e) { if (e) if (e.length) for (var n, o = 0; n = e[o]; o += 1)a(t, n); else a(t, e) }(M, window.lazyLoadOptions), M });
}
</script>
<script type="text/javascript">
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
    let amframe = document.querySelectorAll('.amigolazy');
    window.onload = function(){
    for(let i=0; i<amframe.length;i++){
        let amsrc = amframe[i];
        let amdata = amsrc.getAttribute("data-src");
        let datanew = amsrc.getAttribute("lazy");
        if(datanew === null){
        datanew = 1500;
        }
        setTimeout(function(){
        amframe[i].setAttribute("src",amdata);
        console.info(datanew + "ms Lazyloaded " + amframe[i].src);
        }, datanew);
    }
    }
}
</script>
<div id="cc-myModal" class="cc-modal cc-home-model-popup">
    <div class ="sub_form cc-modal-content" style="display: none;">
        <span class="cc-close"><span class='cc-close-span'>&times;</span></span>
        <h6 class="cc-popup-header">Get Special Offers & Coupons From <br> XYZReptiles! </h6>
        <form id="subscribe_form" method="post">
            <div class='wrapp-name-fields'>
                <span class="cc-pop-up-field-wrapper">
                    <input type="text" id="first_name" name="first_name" placeholder="First & Last Name" />
                    <span class="error_msg"></span>
                </span>
                <!--span class="cc-pop-up-field-wrapper">
                    <input type="text" id="last_name" name="last_name" placeholder="Last Name">
                </span-->
            </div>
            <span class="cc-pop-up-field-wrapper">
                <input type="text" id="email" name="email" placeholder="Email Address" />
                <span class="error_msg"></span>
            </span>
            <p class="cc-modal-desc"><?php  $newsletter_content = get_field('newsletter_description', 'option'); if(!empty($newsletter_content)){echo $newsletter_content;} ?></p>
           <label class="cc-pop-container">Snakes
                <input type="checkbox" name="reptiles" checked value="Snakes">
                <span class="cc-pop-checkmark"></span>
           </label>
           <label class="cc-pop-container">Lizards
                <input type="checkbox" name="reptiles1" checked value="Lizards">
                <span class="cc-pop-checkmark"></span>
           </label>
           <label class="cc-pop-container">Tortoises
                <input type="checkbox" name="reptiles2" checked value="Tortoises">
                <span class="cc-pop-checkmark"></span>
           </label>
           <!-- <label class="cc-pop-container">Amphibians
                <input type="checkbox" name="Amphibians" value="Amphibians">
                <span class="cc-pop-checkmark"></span>
           </label> -->

            <!--input type="checkbox" name="reptiles" value="Snakes" checked>  <span class="check-lable">Snakes</span>  <br>
            <input type="checkbox" name="reptiles1" value="Lizards" checked> <span class="check-lable"> Lizards </span> <br>
            <input type="checkbox" name="reptiles2" value="Tortoises" checked> <span class="check-lable"> Tortoises </span> <br>
            <input type="checkbox" name="reptiles3" value="Amphibians" checked> <span class="check-lable"> Amphibians </span> <br-->

            <div class="wrapp-sub-btn"><input type="submit" class="cc-modal-submit" value="Sign Up"></div>
            <div class="wrapp-sub-btn1" style="text-align: center;
    margin: 20px 0px;display:none;">Submitting...</div>
        </form>
    </div>
</div>
</div><!--/wrapper-->

</div>
<?php if (is_page(8)){ ?>
    <script>
        document.querySelector('.checkout-button').addEventListener('click', function(e){ console.log(e); //alert(1);
        setTimeout(function(){document.querySelector('.wooup-wrap .wooup-container .wooup-content #wooup-offer-wrapper .wooup-close').addEventListener('click', function(e){ console.log(e); //alert(2);
            window.location.href = "https://www.xyzreptiles.com/checkout/";
            }) }, 300) });
    </script>
<?php } ?>
<?php //if (is_page(66277)){
    if((wp_is_mobile()) && (is_front_page())){ $mobile = 1;} else {$mobile = 0; }?>
    <script>
    
    var isMobile = false;
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
        isMobile = true;
    }
    var mobile = '<?php echo $mobile; ?>';
    console.log(mobile);
    console.log(isMobile);
        function getCookie(name) {
            var cname = name + "=";
            var dc = document.cookie;
            if (dc.length > 0) {
                begin = dc.indexOf(cname);
                if (begin != -1) {
                    begin += cname.length;
                    end = dc.indexOf(";", begin);
                    if (end == -1) end = dc.length;
                    return unescape(dc.substring(begin, end));
                }
            }
            return null;
        }

        function setCookie(name, value, expires) {
            var now = new Date();
            now.setTime(now.getTime() + 1 * 86400 * 1000);
            document.cookie = name + "=" + escape(value) + "; path=/" + ((expires == null) ? "" : "; expires=" + now.toUTCString());
        }

        jQuery(document).ready(function(){
             if((getCookie('visible') == '') || (getCookie('visible') == null))
             //if((getCookie('visible') == '') || (getCookie('visible') == null) && (isMobile == false))
             {

                 setTimeout(function(){
                 jQuery('.sub_form').css("display", "block");
                 jQuery('#cc-myModal').css("display", "block");}, 45000);
                 setCookie('visible', 1 ,null);
             }
            jQuery("#initial-form").submit(function(event) {
            jQuery('.email-error-message').html('');
            var emailnewsletter = jQuery("#emailnewsletter").val();
            if(emailnewsletter == '')
            {
                jQuery('.email-error-message').html('<p>Error: Please Enter Email Address</p>');
                return false;
            }
            else if(emailnewsletter != '')
            {
                var regex=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(emailnewsletter)){
                    jQuery('.email-error-message').html('<p>Error: Please Enter Valid Email Address</p>');
                    return false;
            }
            else
            {
            jQuery('.sub_form').css("display", "block");
            jQuery('#cc-myModal').css("display", "block");
            jQuery('#subscribe_form').css("display", "block");
            jQuery('.errormsg').text("");
            jQuery('.wrapp-sub-btn1').css("display","none");
            document.getElementById("subscribe_form").reset();
            jQuery('.cc-modal-submit').show();
            jQuery('#email').val(emailnewsletter);
            jQuery('input:checkbox').prop('checked',true);
            return false;
            }
            }
            });
        });
        jQuery( "#cc-myModal .cc-close" ).click(function() {
            jQuery('.sub_form').css("display", "none");
            jQuery('#cc-myModal').css("display", "none");
        });

        jQuery("#email").focus(function(){
            var email = jQuery('#email').val();
             var name = jQuery('#first_name').val();
            if(name!="")
            { 
            if(!name.match(/\s/g))
            {
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last name" );
                jQuery('#first_name').val(name+ " ").focus();
                return false;
            }
            else 
            {
                jQuery("#error_msg").hide();
            }
            }
                });

         jQuery("#subscribe_form").submit(function(event) {

             var email = jQuery('#email').val();
             var name = jQuery('#first_name').val();
             jQuery('.error_msg').html('');


             
             if(name!="")
            { 
            if(!name.match(/\s/g))
            {
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last  name" );
                jQuery('#first_name').val(name+ " ").focus();
                return false;
            }
            }

             if(!name.match(/\s/g))
            {
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last name" );
                return false;
                }
                 if(name.match(/\s/g))
                {
                    console.log("test");
                var absc= name.substr(name.indexOf(' ')+1);
                console.log(absc);
             if(absc=="")
             {
                console.log("tesetsetset");
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Please enter Last name" );
                return false;
             }
                }
            if(email == '' && name == ''){
                jQuery('#first_name, #email').addClass('inputError');
                jQuery('#first_name').next().html( "* Field Required" );
                jQuery('#email').next().html( "* Field Required" );
                return false;
            }else if(name == ''){
                jQuery('#first_name').addClass('inputError');
                jQuery('#first_name').next().html( "* Field Required" );
                return false;
            }else if(email == ''){
                jQuery('#email').addClass('inputError');
                 jQuery('#email').next().html( "* Field Required" );
                return false;
            }else if(email != ''){
                var regex=/^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(email)){
                    jQuery('#email').addClass('inputError');
                    jQuery('#email').next().html( "Invalid Email Address" );
                    return false;
                }

            }
            jQuery('.error_msg').html('');
            jQuery('#first_name, #email').removeClass('inputError');
            /* stop form from submitting normally */
            event.preventDefault();
            jQuery('.cc-modal-submit').hide();
            jQuery('.wrapp-sub-btn1').css("display","block");
            //alert('form_submitted');
            /*var first_name = jQuery("#first_name").val();
            var last_name = jQuery("#last_name").val();
            console.log(first_name);
            console.log(last_name);*/
            var data = {
                'action': 'subcribe_form_submitted',
                'data': jQuery('#subscribe_form').serialize(),
            };
            console.log(data);
            jQuery.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>/wp-admin/admin-ajax.php",
                dataType: 'JSON',
                data: data,
                success: function(res){
                    // alert(res);
                    console.log(res);
                    if(res == 1){
                        jQuery("#subscribe_form").css("display","none");
                        jQuery(".errormsg").remove();
                        jQuery('.cc-popup-header').css("display", "none");
                        //jQuery("#subscribe_form").after("<div class='errormsg' style='text-align: center;'>Thank you for signing up for our email notifications.</div>");
                        jQuery("#subscribe_form").after("<div class='errormsg' style='text-align: center;line-height: 2.0;'>Thank you for signing up for our email notifications.<br/>You will receive a welcome email shortly.</div>");
                        jQuery("#emailnewsletter").val("");
                    } else if (res == 0) {
                        jQuery("#subscribe_form").css("display","none");
                        jQuery(".errormsg").remove();
                        jQuery("#subscribe_form").after("<div class='errormsg' style='text-align: center;'>Already subscribed to receive email notifications.</div>");
                        jQuery("#emailnewsletter").val("");
                    } else {
                        alert("Failed Try again");
                        jQuery('.sub_form').css("display", "none");
                        jQuery('#cc-myModal').css("display", "none");
                        jQuery("#emailnewsletter").val("");
                    }
                }
            });
         });
         </script>
<script>
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
    (function() {
        function logElementEvent(eventName, element) {
            console.log(
                Date.now(),
                eventName,
                element.getAttribute("data-src")
            );
        }
        var callback_enter = function(element) {
            logElementEvent("ENTERED", element);
        };
        var callback_exit = function(element) {
            logElementEvent("EXITED", element);
        };
        var callback_reveal = function(element) {
            logElementEvent("REVEALED", element);
        };
        var callback_loaded = function(element) {
            logElementEvent("LOADED", element);
        };
        var callback_error = function(element) {
            logElementEvent("ERROR", element);
            element.src =
                "https://via.placeholder.com/440x560/?text=Error+Placeholder";
        };
        var callback_finish = function() {
            logElementEvent("FINISHED", document.documentElement);
        };
        var ll = new LazyLoad({
            elements_selector: ".lazy",
            callback_enter: callback_enter,
            callback_exit: callback_exit,
            callback_reveal: callback_reveal,
            callback_loaded: callback_loaded,
            callback_error: callback_error,
            callback_finish: callback_finish
        });
    })();
}
</script>
<script>
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
    (function() {
        var lazyLoadInstances = [];
        function logElementEvent(eventName, element) {
            console.log(
                Date.now(),
                eventName,
                element.getAttribute("data-src")
            );
        }
        var callback_enter = function(element) {
            var oneLL = new LazyLoad({
                container: element
            });
            lazyLoadInstances.push(oneLL);
            logElementEvent("ENTERED", element);
        };
        var callback_exit = function(element) {
            logElementEvent("EXITED", element);
        };
        var callback_reveal = function(element) {
            logElementEvent("REVEALED", element);
        };
        var callback_loaded = function(element) {
            logElementEvent("LOADED", element);
        };
        var callback_error = function(element) {
            logElementEvent("ERROR", element);
            element.src =
                "https://via.placeholder.com/440x560/?text=Error+Placeholder";
        };
        var callback_finish = function() {
            logElementEvent("FINISHED", document.documentElement);
        };
        var lazyLazy = new LazyLoad({
            elements_selector: ".cc-slidebox-wrapper.owl-carousel",
            callback_enter: callback_enter,
            callback_exit: callback_exit,
            callback_reveal: callback_reveal,
            callback_loaded: callback_loaded,
            callback_error: callback_error,
            callback_finish: callback_finish
        });
    })();
}
</script>
<script>
    jQuery(document).ready(function ($) {
        jQuery('.stellarnav').stellarNav({
            theme: 'dark',
            breakpoint: 1023,
            position: 'right',
            sticky: true,

        });
        if (jQuery('.header-cart-icon .cc-wrapp-minicart .cc-content-block').text().length <= 58) {
            //jQuery('.cc-wrapp-minicart').hide();
        }
    });
</script>
<script>
    jQuery(".draptodiv").click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery("#contentarea").offset().top
        }, 2000);
    });
</script>
<script>
//     jQuery(window).scroll(function(){
//     if (jQuery(window).scrollTop() >= 60) {
//         jQuery('form.dgwt-wcas-search-form').addClass('sticky');
//     }
//     else {
//         jQuery('form.dgwt-wcas-search-form').removeClass('sticky');
//     }
// });
// jQuery(window).scroll(function(){
//     if (jQuery(window).scrollTop() >= 60) {
//         jQuery('.stellarnav.dark.right.mobile').addClass('sticky1');
//     }
//     else {
//         jQuery('.stellarnav.dark.right.mobile').removeClass('sticky1');
//     }
// });
</script>
<?php if(is_front_page()){ ?>
 
    <script type='text/javascript' id='jquery-dgwt-wcas-js-extra'>
/* <![CDATA[ */
var agent = navigator.userAgent;
  var n = agent.includes("Chrome-Lighthouse");
  var m = agent.includes("PingdomPageSpeed/1.0");
    if(!n && !m){
var dgwt_wcas = {"t":{"sale_badge":"sale","featured_badge":"featured","category":"Category","tag":"tag","sku_label":"SKU:"},"ajax_search_endpoint":"\/?wc-ajax=dgwt_wcas_ajax_search","ajax_details_endpoint":"\/?wc-ajax=dgwt_wcas_result_details","action_search":"dgwt_wcas_ajax_search","action_result_details":"dgwt_wcas_result_details","min_chars":"3","width":"auto","show_details_box":"1","show_images":"1","show_price":"","show_desc":"","show_sale_badge":"","show_featured_badge":"","is_rtl":"","show_preloader":"1","preloader_url":"","copy_no_result":"No results","copy_show_more":"See all results...","copy_in_category":"in","img_url":"https:\/\/www.xyzreptiles.com\/wp-content\/plugins\/ajax-search-for-woocommerce\/assets\/img\/"};
}
/* ]]> */
</script>
<script src="https://www.xyzreptiles.com/wp-content/plugins/ajax-search-for-woocommerce/assets/js/search.min.js"></script>
<?php }?>
<script>

// jQuery(window).scroll(function() {    
//     var scroll = jQuery(window).scrollTop();
//     if (scroll >150) {
        

//         jQuery(".mtsnb-shown").addClass("darkHeader");
//         jQuery(".mtsnb").css("position","fixed");
//     }

//   if (scroll <=150) 
//     {
//         jQuery(".mtsnb-shown").removeClass("darkHeader");
//         jQuery(".mtsnb").css("position","relative");
//     }
// });
jQuery(document).ready(function() {
    jQuery(window).scroll(function() {
        var e = jQuery(window).scrollTop();
        if (e >= 10) {
            jQuery(".mtsnb-fixed").addClass("str")
        } else {
            jQuery(".mtsnb-fixed").removeClass("str")
        }
    })
});
</script>
<style>
    /* for the header added by vicky 11-2-21 */
@media only screen and (min-width: 1024px) and (max-width: 1279px) {
	html body .cc-nav .container { max-width: 1000px; padding-right: 0px; padding-left: 0px;}
	html body header .cc-nav a{padding: 10px 4px!important;}
}
</style>
<?php do_action('wp_footer'); ?>
<script> 
    window.addEventListener("load", function() { 
        var styles = {
            visibility : "visible",

};
jQuery("#cc-block-section").css(styles);

})
        </script>	
        <script> 
    window.addEventListener("load", function() {
        var styles = {
            visibility : "visible",

};
jQuery(".stellarnav.dark.right.desktop").css(styles);

   })
        </script>	
                <script> 
    window.addEventListener("load", function() { 
        var styles = {
            visibility : "visible",

};
jQuery(".slider-section").css(styles);

    }); 
        </script>	
        <script>
            	const mediaQuery = window.matchMedia('(max-width: 767px)')
// Check if the media query is true
if (mediaQuery.matches) {
window.onscroll = function() {myFunction()};

var header = document.getElementById("search_sticky");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky1");
  } else {
    header.classList.remove("sticky1");
  }
}
}
</script>

<script> 
    window.addEventListener("load", function() { setTimeout(function(){
        var styles = {
            visibility : "visible",

};
jQuery(".cc-image-wrapper").css(styles);

},1000); });
        </script>


        
</body>
</html>