
// Car Appear In View
function isScrolledIntoView(elem) {
    var docViewTop = jQuery(window).scrollTop();
    var docViewBottom = docViewTop + jQuery(window).height();

    var elemTop = jQuery(elem).offset().top + 180;
    var elemBottom = elemTop + jQuery(elem).height() - 500;

    return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
}

jQuery(window).scroll(function () {
    jQuery('.running-car').each(function () {
        if (isScrolledIntoView(this) === true) {
            jQuery(this).addClass('in-view');
        } else {
            jQuery(this).removeClass('in-view');
        }
    });
});

// threesixty degree
// Using window.load instead of window.onload to avoid overwriting other handlers
jQuery(window).on('load', function () {
    init();
});

var car;
function init() {
    if (jQuery('.360-car').length > 0) {
        car = jQuery('.360-car').ThreeSixty({
            totalFrames: 52, // Total no. of image you have for 360 slider
            endFrame: 52, // end frame for the auto spin animation
            currentFrame: 3, // This the start frame for auto spin
            imgList: '.threesixty_images', // selector for image list
            progress: '.spinner', // selector to show the loading progress
            imagePath: 'demos/car/images/360degree-cars/', // path of the image assets
            filePrefix: '', // file prefix if any
            ext: '.png', // extention for the assets
            height: 887,
            width: 500,
            navigation: true,
            responsive: true,
        });
    }
};

// Rev Slider
var revapi424, tpj = jQuery;
tpj(document).ready(function () {
    if (tpj("#rev_slider_424_1").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev_slider_424_1");
    } else {
        revapi424 = tpj("#rev_slider_424_1").show().revolution({
            sliderType: "standard",
            jsFileLocation: "include/rs-plugin/js/",
            sliderLayout: "auto",
            dottedOverlay: "none",
            delay: 7000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    style: "uranus",
                    enable: false,
                    hide_onmobile: false,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: -10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: -10,
                        v_offset: 0
                    }
                },
                carousel: {
                    maxRotation: 65,
                    vary_rotation: "on",
                    minScale: 55,
                    vary_scale: "on",
                    horizontal_align: "center",
                    vertical_align: "center",
                    fadeout: "on",
                    vary_fade: "on",
                    maxVisibleItems: 5,
                    infinity: "off",
                    space: 0,
                    stretch: "on"
                }
                ,
                tabs: {
                    style: "ares",
                    enable: true,
                    width: 270,
                    height: 80,
                    min_width: 270,
                    wrapper_padding: 10,
                    wrapper_color: "transparent",
                    wrapper_opacity: "0.5",
                    tmp: '<div class="tp-tab-content">  <span class="tp-tab-date">{{param1}}</span>  <span class="tp-tab-title">{{title}}</span></div><div class="tp-tab-image"></div>',
                    visibleAmount: 7,
                    hide_onmobile: false,
                    hide_under: 0,
                    hide_onleave: false,
                    hide_delay_mobile: 1200,
                    hide_delay: 200,
                    direction: "horizontal",
                    span: true,
                    position: "outer-bottom",
                    space: 20,
                    h_align: "left",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 0
                }
            },
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 992, 768, 420],
            gridheight: [600, 500, 960, 720],
            lazyType: "single",
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false,
            }
        });
    }
});	/*ready*/

// Video on play on hover
jQuery(document).ready(function ($) {
    jQuery('.videoplay-on-hover').hover(function () {
        if (jQuery(this).find('video').length > 0) {
            jQuery(this).find('video').get(0).play();
        }
    }, function () {
        if (jQuery(this).find('video').length > 0) {
            jQuery(this).find('video').get(0).pause();
        }
    });
});
