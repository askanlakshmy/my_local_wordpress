jQuery(document).ready(function () {
    if(site_url_para.is_mobile != 1){
        jQuery('nav.applePie').easyPie();
    }
    jQuery("#slider4").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            jQuery('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            jQuery('.events').append("<li>after event fired.</li>");
        }
    });
    if(site_url_para.is_mobile != 1){
        if (Modernizr.touch) {
            jQuery(".close-overlay").removeClass("hidden");
            jQuery(".img").click(function (e) {
                if (!jQuery(this).hasClass("hover")) {
                    jQuery(this).addClass("hover");
                }
            });
            jQuery(".close-overlay").click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".img").hasClass("hover")) {
                    $(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            jQuery(".img").mouseenter(function () {
                jQuery(this).addClass("hover");
            }).mouseleave(function () {
                jQuery(this).removeClass("hover");
            });
        }
    }
    jQuery(document).on({
        mouseenter: function () {
            jQuery(this).addClass("hover");
        }, mouseleave: function () {
            jQuery(this).removeClass("hover");
        }
    }, '.img');
    jQuery('.category_tags li').mouseover(function () {
        var cat_id = jQuery(this).data("count");
        if (cat_id == 14741) {
            jQuery('.discover-courses').css('display', 'block');
            jQuery('.discover-posts').css('display', 'none');
            jQuery('.discover-workshops').css('display', 'none');
            jQuery('.discover-retreats').css('display', 'none');
        } else if (cat_id == 14742) {
            jQuery('.discover-workshops').css('display', 'block');
            jQuery('.discover-courses').css('display', 'none');
            jQuery('.discover-posts').css('display', 'none');
            jQuery('.discover-retreats').css('display', 'none');
        } else if (cat_id == 14743) {
            jQuery('.discover-workshops').css('display', 'none');
            jQuery('.discover-courses').css('display', 'none');
            jQuery('.discover-posts').css('display', 'none');
            jQuery('.discover-retreats').css('display', 'block');
        } else if (cat_id == 14744) {
            jQuery('.discover-workshops').css('display', 'none');
            jQuery('.discover-courses').css('display', 'none');
            jQuery('.discover-posts').css('display', 'block');
            jQuery('.discover-retreats').css('display', 'none');
        }
        if (cat_id == 14688) {
            jQuery('.menu-popular-quotes').css('display', 'block');
            jQuery('.menu-recent-quotes').css('display', 'none');
			jQuery('.menu-recent-pic-quotes').css('display', 'none');
        } else if (cat_id == 14689) {
            jQuery('.menu-popular-quotes').css('display', 'none');
            jQuery('.menu-recent-quotes').css('display', 'block');
			jQuery('.menu-recent-pic-quotes').css('display', 'none');
        } else if (cat_id == 18966) {
            jQuery('.menu-popular-quotes').css('display', 'none');
            jQuery('.menu-recent-quotes').css('display', 'none');
			jQuery('.menu-recent-pic-quotes').css('display', 'block');
        }
        if (cat_id == 14862) {
            jQuery('.category-0').css('display', 'block');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14690) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'block');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14691) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'block');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14692) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'block');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14693) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'block');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14694) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'block');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14695) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'block');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14696) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'block');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 14697) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'block');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'none');
        } else if (cat_id == 13798) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'block');
            jQuery('.category-10').css('display', 'none');
        }
    });
    jQuery('.category_tags .archive_article li').mouseover(function () {
        var cat_id = jQuery(this).data("count");
        if (cat_id == 180618) {
            jQuery('.category-0').css('display', 'none');
            jQuery('.category-1').css('display', 'none');
            jQuery('.category-2').css('display', 'none');
            jQuery('.category-3').css('display', 'none');
            jQuery('.category-4').css('display', 'none');
            jQuery('.category-5').css('display', 'none');
            jQuery('.category-6').css('display', 'none');
            jQuery('.category-7').css('display', 'none');
            jQuery('.category-8').css('display', 'none');
            jQuery('.category-9').css('display', 'none');
            jQuery('.category-10').css('display', 'block');
        }
    });
    jQuery('.quote-text .large-icons li:not(:last-child)').hover(function () {
        jQuery('.quote-text .large-icons li').width('13%');
        jQuery('.quote-text .large-icons li:last-child').width('15%');
        jQuery(this).width('24%');
        jQuery(this + '.icon-text').width('50%');
    }, function () {
        jQuery(this).width('17%');
        jQuery('.quote-text .large-icons li').width('15%');
        jQuery('.quote-text .large-icons li:last-child').width('15%');
    });
    jQuery('.large-icons li:not(:last-child)').hover(function () {
        jQuery('.large-icons li').width('15%');
        jQuery('.quote-text .large-icons li').width('14%');
        jQuery('.large-icons li:last-child').width('10%');
        jQuery('.quote-text .large-icons li:last-child').width('15%');
        jQuery(this).width('24%');
        jQuery(this + '.icon-text').width('60%');
    }, function () {
        jQuery(this).width('17%');
        jQuery('.large-icons li').width('17%');
        jQuery('.quote-text .large-icons li').width('15%');
        jQuery('.large-icons li:last-child').width('10%');
        jQuery('.quote-text .large-icons li:last-child').width('15%');
    });
    jQuery('#a_z_menu').insertAfter("#menu-item-12986");
    jQuery('#a_z_menu_mobile').insertAfter("#menu-item-14707");
});
function init() {
    var vidDefer = document.getElementsByTagName('iframe');
    for (var i = 0; i < vidDefer.length; i++) {
        if (vidDefer[i].getAttribute('data-src')) {
            vidDefer[i].setAttribute('src', vidDefer[i].getAttribute('data-src'));
        }
    }
}
window.onload = init;
var ppp = 6;
var tag = jQuery('#more_posts').data('tag');
var pageNumber = 0;
jQuery(document).on('click', '#more_posts', function () {
    var pg = jQuery("#more_posts").attr('data-pg');
    load_posts(pg);
});
function load_posts(pg) {
    pageNumber++;
    var str = '&tag=' + tag + '&pageNumber=' + pg + '&ppp=' + ppp + '&action=more_post_ajax';
    jQuery.ajax({
        type: "POST", dataType: "html", url: site_url_para.ajax_url, data: str, success: function (data) {
            var $data = jQuery(data);
            console.log($data.length);
            if ($data.length) {
                jQuery("#ajax-posts").append($data);
                jQuery("#more_posts").css("display", "block");
                if ($data.length < 6) {
                    jQuery("#more_posts").css("display", "none");
                }
            } else {
                jQuery("#more_posts").css("display", "none");
            }
        }, error: function (jqXHR, textStatus, errorThrown) {
            jQueryloader.html(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }
    });
    pg1 = parseInt(pg) + 1;
    jQuery('#more_posts').attr('data-pg', pg1);
    return false;
}
jQuery(function () {
    jQuery(".js_p_start, .js_p_another_start").simplePopup();
});
jQuery(document).ready(function () {
    jQuery("#signupbutton").click(function () {
        var signupemail = jQuery("#email-address").val();
        var signupname = jQuery("#first-name").val();
        jQuery(".adduseremail").val(signupemail);
        jQuery(".addusername").val(signupname);
    });
    jQuery(".close-load-new").click(function () {
        location.reload();
    });
    jQuery(".abh_about").on("click", function () {
        jQuery(".abh_about_tab").show();
        jQuery(".abh_posts_tab").hide();
        jQuery(".abh_post").removeClass('abh_active');
        jQuery(".abh_about").addClass('abh_active');
    });
    jQuery(".abh_posts").on("click", function () {
        jQuery(".abh_posts_tab").show();
        jQuery(".abh_about_tab").hide();
        jQuery(".abh_posts").addClass('abh_active');
        jQuery(".abh_about").removeClass('abh_active');
    });
    if(site_url_para.is_mobile != 1){
        if (Modernizr.touch) {
            jQuery(".close-overlay").removeClass("hidden");
            jQuery(".img").click(function (e) {
                if (!jQuery(this).hasClass("hover")) {
                    jQuery(this).addClass("hover");
                }
            });
            jQuery(".close-overlay").click(function (e) {
                e.preventDefault();
                e.stopPropagation();
                if (jQuery(this).closest(".img").hasClass("hover")) {
                    jQuery(this).closest(".img").removeClass("hover");
                }
            });
        } else {
            jQuery(".img").mouseenter(function () {
                jQuery(this).addClass("hover");
            }).mouseleave(function () {
                jQuery(this).removeClass("hover");
            });
        }
    }
    //jQuery("#reg_password2").keyup(checkPasswordMatch);
    jQuery("#reg_comfirm_email").keyup(checkmail);
    jQuery("#register").click(function () {
        var password = jQuery("#reg_password").val();
        var confirmPassword = jQuery("#reg_password2").val();
        var reg_email = jQuery("#reg_email").val();
        var reg_comfirm_email = jQuery("#reg_comfirm_email").val();
        if (reg_email == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Email!");
            return false;
        } else if (reg_comfirm_email == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Confirm Email!");
            return false;
        } else if (password == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Password!");
            return false;
        } else if (confirmPassword == '') {
            jQuery("#divCheckPasswordMatch").html("Please Enter Confirm Password!");
            return false;
        } else if (reg_email != reg_comfirm_email) {
            jQuery("#divCheckPasswordMatch").html("Email do not match!");
            jQuery('input[type="submit"]').addClass("disabled");
            return false;
        } else if (password != confirmPassword) {
            jQuery("#divCheckPasswordMatch").html("Passwords do not match!");
            jQuery('input[type="submit"]').addClass("disabled");
            return false;
        } else {
            jQuery("#divCheckPasswordMatch").html("");
        }
        var username = reg_email.substring(0, reg_email.indexOf('@'));
        jQuery(".adduseremail").val(reg_email);
        jQuery(".addusername").val(username);
        jQuery(".inspiration").val(username);
        jQuery(".ctct-custom-form").submit();
    });
    jQuery("#search-show").click(function () {
        jQuery('#s').val('');
        jQuery('.error_msg').hide();
        jQuery(".dropdown-menu1").slideToggle();
        jQuery(".dropdown-menu1 #s").focus();
    });
    jQuery(".search-popclose").click(function () {
        jQuery(".dropdown-menu1").hide();
        jQuery('#s').val('');
        jQuery('.error_msg').hide();
    });
    jQuery("#mobile_search").click(function () {
        jQuery('.popup-body-div #s').val('');
        jQuery('.error_msg_mobile').hide();
        jQuery(".mobile_view").slideToggle();
        jQuery(".popup-body-div #s").focus();
    });
    jQuery(".mobileclose-icon").click(function () {
        jQuery(".mobile_view").hide();
        jQuery('.popup-body-div #s').val('');
        jQuery('.error_msg_mobile').hide();
    });
    jQuery(".menubtn").click(function () {
        jQuery('.widget-region #s').val('');
    });
   jQuery("#searchsubmit").click(function () {
        if(jQuery('#s').val() == ''){
            jQuery('.error_msg').show();
            return false;
        }  
    });
    jQuery(".popup-body-div #searchsubmit").click(function () {
        if(jQuery('.popup-body-div #s').val() == ''){
            jQuery('.error_msg_mobile').show();
            return false;
        }  
    });
    jQuery(".mobile_form #searchsubmit").click(function () {
        if(jQuery('.mobile_form #s').val() == ''){
            jQuery(".mobile_form #s").attr("placeholder", "Oops, you didn’t enter anything. Try again");
            return false;
        }  
    });
    jQuery("#a_z_menu_mobile .next-button").click(function () { 
        var me = this;
        jQuery(me).parent('li').parent('ul').removeClass('is-in-view').addClass('has-been-viewed');
        jQuery(me).parent('li').find('ul').eq(0).addClass('is-in-view').css('display','block').css('z-index','9');
        jQuery('#menu-item-14707').css('display','none');
        jQuery('#menu-item-14723').css('display','none');
        jQuery('#menu-item-14735').css('display','none');
    });
    jQuery('.back-button').click(function(){
        var myself = this;
        var me = jQuery('#a_z_menu_mobile');
        if(jQuery(myself).parents('ul').eq(1).hasClass('has-been-viewed')){
            console.log("first-if");
            jQuery(myself).parents('li.menu-item').find('ul.is-in-view').removeClass('is-in-view').css('display', 'none').css('z-index', '0');
            jQuery(myself).parents('ul').eq(1).removeClass('has-been-viewed').addClass('is-in-view');
            jQuery('#menu-item-14707').css('display','block');
            jQuery('#menu-item-14723').css('display','block');
            jQuery('#menu-item-14735').css('display','block');
        } 
        if(jQuery(me).find('ul').eq(0).hasClass('is-in-view')){
            console.log("second-if");
            jQuery(me).find('ul').eq(0).removeClass('is-in-view').css('display', 'none').css('z-index', '0');
            jQuery('#menu-item-14707').css('display','block');
            jQuery('#menu-item-14723').css('display','block');
            jQuery('#menu-item-14735').css('display','block');
            jQuery(me).find('ul').eq(0).removeClass('is-in-view');
            jQuery(me).parent('ul').removeClass('has-been-viewed').addClass('is-in-view');
        }
    });
});
/*function checkPasswordMatch() {
    var password = jQuery("#reg_password").val();
    var confirmPassword = jQuery("#reg_password2").val();
    if (password != confirmPassword) {
        jQuery("#divCheckPasswordMatch").html("Passwords do not match!");
        jQuery('input[type="submit"]').addClass("disabled");
        return false;
    } else {
        jQuery('input[type="submit"]').removeClass("disabled");
        jQuery("#divCheckPasswordMatch").html("");
        return false;
    }
}*/
function checkmail() {
    var reg_email = jQuery("#reg_email").val();
    var reg_comfirm_email = jQuery("#reg_comfirm_email").val();
    if (reg_email != reg_comfirm_email) {
        jQuery("#divCheckPasswordMatch").html("Email do not match!");
        jQuery('input[type="submit"]').addClass("disabled");
        return false;
    } else {
        jQuery('input[type="submit"]').removeClass("disabled");
        jQuery("#divCheckPasswordMatch").html("");
        return false;
    }
}
jQuery(window).bind("load", function () {
    var site_url = site_url_para.site_url;
    jQuery('#googlesidebarads').load(site_url + "/wp-content/uploads/ads/googlesidebarads.html");
    //jQuery('.header-google-ads').load(site_url + "/wp-content/uploads/ads/header-google-ads.html");
});
jQuery(window).one("scroll", function () {
    var site_url = site_url_para.site_url;
    jQuery('#homepageads').load(site_url + "/wp-content/uploads/ads/homepageads.html");
    jQuery('#cust-fb').load(site_url + "/wp-content/uploads/ads/facebook.html");
    //jQuery('#taboola-sidebar').load(site_url + "/wp-content/uploads/ads/taboola-sidebar.html");
    //jQuery('#taboola').load(site_url + "/wp-content/uploads/ads/taboola.html");
});
var popupCenter = function (url, title, w, h) {
    var dualScreenLeft = window.screenLeft !== undefined ? window.screenLeft : screen.left;
    var dualScreenTop = window.screenTop !== undefined ? window.screenTop : screen.top;
    var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
    var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
    var left = ((width / 2) - (w / 2)) + dualScreenLeft;
    var top = ((height / 3) - (h / 3)) + dualScreenTop;
    var newWindow = window.open(url, title, 'scrollbars=yes, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
    if (window.focus) {
        newWindow.focus();
    }
};