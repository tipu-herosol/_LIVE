$(document).ready(function () {
	$(document).on("click", ".share-article-btns ul li:last-child", function () {
		$(".copy-url-tip").show();
		setTimeout(function () {
			$(".copy-url-tip").fadeOut();
		}, 5000);
	});
	/*========== Toggle ==========*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("nav").toggleClass("move");
		// $('nav').slideToggle();
		$(".upperlay").toggleClass("active");
		// $('body').toggleClass('move');
	});
	$(document).on("click", ".upperlay", function () {
		$(".toggle").removeClass("active");
		$("nav").removeClass("move");
		$(".upperlay").removeClass("active");
		// $('body').removeClass('move');
	});
	$(document).on("click", ".show-form", function (e) {
		e.preventDefault();
		$(".wrap-form").removeClass("hidden");
		$(".wrap-content").addClass("hidden");
	});
	$(document).on("click", ".video-posterOuter", function (e) {
		$(this).parents(".outerVideo").hide();
		$(this).parents(".outerVideo").next("div").show();
		$(this).parents(".outerVideo").next("div").children("iframe")[0].src += "?autoplay=1";
	});
	// ======================banner dots===========
	$(document).on("click", ".bannerDots a", function () {
		$(".bannerDots a").removeClass("active");
		$(this).toggleClass("active");
	});
	// ========mobilenav
	$(document).on("click", ".mobileDropLst", function () {
		$(this).next("ul").slideToggle();
	});

	$(document).on("click", ".mobilePropertyLst", function () {
		$(this).next("ul").slideToggle();
	});

	// $(document).on('click', '.3dBtn', function() {
	//     $('.imageBox').toggleClass('imageBox3d');
	// });
	$(document).on("click", ".chooseSize li", function () {
		$(".chooseSize li").removeClass("active");
		$(this).addClass("active");
	});
	$(document).on("click", ".chooseFrame li", function () {
		$(".chooseFrame li").removeClass("active");
		$(this).addClass("active");
	});
	$(document).on("click", ".choosePaper li", function () {
		$(".choosePaper li").removeClass("active");
		$(this).addClass("active");
	});
	$(document).on("click", ".filterBox .imageMst", function () {
		$(".filterBox .imageMst").removeClass("active");
		$(this).addClass("active");
	});
	$(document).on("click", ".filBox .imageMst", function () {
		$(".filBox .imageMst").removeClass("active");
		$(this).addClass("active");
	});

	/*----- Card Sec Bar -----*/
	$(document).on("click", "#frmProperty .lblBtn", function (e) {
		e.preventDefault();
		var checkbox = $(this).find("input[type=checkbox]");
		checkbox.prop("checked", !checkbox.prop("checked"));
	});
	$(document).on("click", ".cardSecBar .lblBtn", function () {
		var checkbox = $(this).parents(".lblBtn").find("input[type=radio]");
		checkbox.prop("checked", !checkbox.prop("checked"));
		$(".cardSec").slideDown("3000");
		$(".paypalSec").slideUp("3000");
	});
	$(document).on("click", ".paypalSecBar .lblBtn", function () {
		var checkbox = $(this).parents(".lblBtn").find("input[type=radio]");
		checkbox.prop("checked", !checkbox.prop("checked"));
		$(".paypalSec").slideDown("3000");
		$(".cardSec").slideUp("3000");
	});

	$(document).on("click", "#sugested", function () {
		// var checkbox = $(this).parents('.lblBtn').find('input[type=radio]');
		// checkbox.prop("checked", !checkbox.prop("checked"));
		$(this).parents(".btnGrp").children(".sugested").slideDown();
		$(".customeSize").hide();
	});
	$(document).on("click", "#custom", function () {
		// var checkbox = $(this).parents('.lblBtn').find('input[type=radio]');
		// checkbox.prop("checked", !checkbox.prop("checked"));
		$(this).parents(".btnGrp").children(".customeSize").slideDown();
		$(".sugested").hide();
	});

	/*_____ Upload File _____*/
	var imgFile;
	$(document).on("click", ".uploadImg", function () {
		imgFile = $(this).attr("data-image-src");
		$(".uploadFile").trigger("click");
	});
	$(document).on("change", ".uploadFile", function () {
		// alert(imgFile);
		var file = $(this).val();
		$(".uploadImg").html(file);
	});

	$(".qtyPlus").click(function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal)) {
			parnt.val(parseInt(currentVal) + 1);
		} else {
			parnt.val(0);
		}
	});
	// This button will decrement the value till 0
	$(".qtyMinus").click(function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal) && currentVal > 0) {
			parnt.val(parseInt(currentVal) - 1);
		} else {
			parnt.val(0);
		}
	});

	/*========== Dropdown ==========*/
	$(document).on("click", ".dropBtn", function (e) {
		e.stopPropagation();
		var $this = $(this).parent().children(".dropCnt");
		$(".dropCnt").not($this).removeClass("active");
		var $parent = $(this).parent(".dropDown");
		$parent.children(".dropCnt").toggleClass("active");
	});
	$(document).on("click", ".dropCnt", function (e) {
		e.stopPropagation();
	});
	$(document).on("click", function () {
		$(".dropCnt").removeClass("active");
	});
	/*----- video button -----*/

	var vid = $("video");
	// var vid = document.getElementById("bannerVid");
	$(document).on("click", ".fa-play", function () {
		$(this).parents().children(vid).trigger("play");

		$(this).removeClass("fa-play").addClass("fa-pause");
	});
	$(document).on("click", ".fa-pause", function () {
		$(this).parents().children(vid).trigger("pause");

		$(this).removeClass("fa-pause").addClass("fa-play");
	});

	/*========== Popup ==========*/
	$(document).on("click", ".popBtn", function () {
		var popUp = $(this).data("popup");
		$("body").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});
	$(document).on("click", ".crosBtn", function () {
		var popUp = $(this).parents(".popup").data("popup");
		$("body").removeClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeOut();
	});

	$(".datepicker").datepicker({
		dateFormat: "MM dd, yy",
		changeMonth: true,
		changeYear: true,
		yearRange: "1900:2060",
	});

	// Timepicker Js
	$(".timepicker").timepicki({
		reset: true,
	});

	// Select Js
	// Select Js
	$(document).ready(function () {
		$(".selectpicker").selectpicker();
	});
	// Owl Carousel Js
	$("#owl-testi").owlCarousel({
		// autoplay: true,
		// dots: true,
		// loop: true,
		// smartSpeed: 1000,
		// autoplayTimeout: 10000,
		// autoplayHoverPause: true,
		// responsive: {
		//     0:{
		//         items: 1,
		//         autoplay: false,
		//         autoHeight: true,
		//         dots: true
		//     },
		//     600:{
		//         items: 2
		//     },
		//     1000:{
		//         items: 3
		//     }
		// }
		autoplay: true,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	$(".logos").owlCarousel({
		autoplay: true,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 2,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 4,
			},
			1000: {
				items: 6,
			},
		},
	});

	$("#owl-articles").owlCarousel({
		autoplay: true,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		margin: 20,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 3,
			},
			1000: {
				items: 3,
			},
		},
	});
	var owl_slider = $(".owl-carousel:not(#owl-guide)").owlCarousel({
		autoplay: false,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		autoHeight: true,
		smartSpeed: 1000,
		autoplayTimeout: 8000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
			},
			480: {
				items: 1,
			},
			991: {
				items: 1,
			},
			1200: {
				items: 1,
			},
		},
	});

	$(".logos-1").owlCarousel({
		autoplay: true,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 2,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 4,
			},
			1000: {
				items: 6,
			},
		},
	});

	$(".high").owlCarousel({
		autoplay: true,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		// navText: [ 'prev', 'next' ],
		dots: false,
		loop: true,
		items: 1,
		responsive: {
			0: {
				items: 1,
				autoplay: false,
				autoHeight: true,
				dots: true,
				nav: false,
			},
			600: {
				items: 1,
			},
			1000: {
				items: 1,
			},
		},
	});
	// Data Table Js
	var sortOrder = $("th.sortBy").index() > -1 ? $("th.sortBy").index() : 0;
	$(".dataTable").DataTable({
		// paging: false,
		// 'order': [[ 3, 'desc' ]],
		order: [[sortOrder, "asc"]],
		pageLength: 10,
		columnDefs: [
			{
				orderable: false,
				targets: "no-sort",
			},
		],
		responsive: true,
	});
	// rateYo
	$(".ratestars").rateYo({
		rating: 4.0,
		fullStar: true,
		// readOnly: true,
		normalFill: "#ddd",
		ratedFill: "#f6a623",
		starWidth: "14px",
		spacing: "2px",
	});

	$(".parallax-window").parallax({ imageSrc: "images/bg.jpg" });
});

$(window).on("load", function () {
	// $('body._homePage').children('.fiveTip').fadeIn();
	// $('body').addClass('flow');
	setTimeout(function () {
		$("body._homePage").children(".fiveTip").fadeIn();
		$("body.blog-page-pop").children(".blog-popup").fadeIn();
		$("body._homePage").addClass("flow");
		$("body.blog-page-pop").addClass("flow");
	}, 5000);
	$("#owl-guide").owlCarousel({
		autoplay: true,
		nav: true,
		navText: ['<i class="fi-chevron-left"></i>', '<i class="fi-chevron-right"></i>'],
		loop: true,
		margin: 20,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		items: 1,
	});
});

function textAreaAdjust(o) {
	o.style.height = "1px";
	o.style.height = 25 + o.scrollHeight + "px";
}

var offSet = $("body").offset().top;
var offSet = offSet + 1200;
$(window).scroll(function () {
	var scrollPos = $(window).scrollTop();
	if (scrollPos >= offSet) {
		$(".hBtn").fadeIn();
	} else {
		$(".hBtn").fadeOut();
	}
});
var scrollDown = $("body").offset().top;
var scrollDown = scrollDown + 500;
$(window).scroll(function () {
	var scrollPo = $(window).scrollTop();
	if (scrollPo >= scrollDown) {
		$("._homePage header").addClass("colorBgHeader");
	} else {
		$("._homePage header").removeClass("colorBgHeader");
	}
});

// smooth scroling effect================
// $("html").easeScroll();

/*========== Page Loader ==========*/
$(window).on("load", function () {
	$(".loader").delay(700).fadeOut();
	$("#pageloader").delay(1200).fadeOut("slow");
});
$(document).on("click", ".ques > .top-ques", function () {
	// $('.ques > .ans').not($(this).parent('.ques').children('.ans').slideToggle()).slideUp();
	$(this).children("span").toggleClass("_rotate");
	$(this).parents(".ques").children(".ans").slideToggle();
	$(this).toggleClass("clrBorder");
});
$(document).on("focus", ".txtGrp .txtBox:not(select)", function () {
	$(this).parents(".txtGrp:first").find("label:first").addClass("move");
});

$(document).on("blur", ".txtGrp .txtBox:not(select)", function () {
	if (this.value == "") $(this).parents(".txtGrp:first").find("label:first").removeClass("move");
});
