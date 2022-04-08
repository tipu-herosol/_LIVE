let modalVar;
var optsuccess = {
	closeButton: true,
	debug: false,
	positionClass: "toast-top-left",
	onclick: null,
	showDuration: "300",
	hideDuration: "5000",
	timeOut: "5000",
	extendedTimeOut: "1000",
	showEasing: "swing",
	hideEasing: "linear",
	showMethod: "slideDown",
	hideMethod: "slideUp",
};

var opterror = {
	closeButton: true,
	debug: false,
	positionClass: "toast-top-left",
	onclick: null,
	showDuration: "300",
	hideDuration: "5000",
	timeOut: "5000",
	extendedTimeOut: "1000",
	showEasing: "swing",
	hideEasing: "linear",
	showMethod: "slideDown",
	hideMethod: "slideUp",
};

/*========== fORM sUBMIT ==========*/
$(document).on("submit", ".frmAjax", function (e) {
	e.preventDefault();
	needToConfirm = true;
	var frmbtn = $(this).find("button[type='submit']");
	var frmMsg = $(this).find("div.alertMsg:first");
	var frm = this;
	console.log(frm);
	frmbtn.attr("disabled", true);
	frmMsg.hide();
	$.ajax({
		url: $(this).attr("action"),
		data: new FormData(frm),
		processData: false,
		contentType: false,
		dataType: "JSON",
		method: "POST",

		error: function (rs) {
			console.log(rs);
		},
		success: function (rs) {
			console.log(rs);
			if (rs.status == 1) {
				toastr.success(rs.msg, "", optsuccess);
				setTimeout(function () {
					frm.reset();
					frmbtn.attr("disabled", false);
					if (rs.redirect_url) {
						window.location.href = rs.redirect_url;
					} else {
					}
				}, 3000);
			} else {
				toastr.error(rs.msg, opterror);
				setTimeout(function () {
					if (rs.hide_msg) frmMsg.slideUp(500);
					frmbtn.attr("disabled", false);
					if (rs.redirect_url) window.location.href = rs.redirect_url;
				}, 3000);
			}
		},
		complete: function (rs) {
			needToConfirm = false;
		},
	});
});

$(document).ready(function () {
	/*========== Toggle ==========*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("nav").toggleClass("move");
		// $('nav').slideToggle();
		$(".upperlay").toggleClass("active");
		$("body").toggleClass("move");
	});
	$(document).on("click", "body.move header nav > ul > li > a", function () {
		$(".toggle").toggleClass("active");
		$("nav").toggleClass("move");
		// $('nav').slideToggle();
		$(".upperlay").toggleClass("active");
		$("body").toggleClass("move");
	});
	$(document).on("click", ".upperlay", function () {
		$(".toggle").removeClass("active");
		$("nav").removeClass("move");
		$(".upperlay").removeClass("active");
		$("body").removeClass("move");
	});

	$("#lightSlider").lightSlider({
		gallery: true,
		item: 1,
		auto: true,
		loop: true,
		speed: 2500,
		pause: 8000,
		slideMargin: 0,
		enableDrag: false,
		thumbMargin: 4,
		thumbItem: 4,
	});

	// ========faq's===========
	$(".acc h4").click(function () {
		$(this).next(".content").slideToggle();
		$(this).parent().toggleClass("active");
		$(this).parent().siblings().children(".content").slideUp();
		$(this).parent().siblings().removeClass("active");
	});
	$(".qtyplus").click(function (e) {
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
	$(".qtyminus").click(function (e) {
		e.preventDefault();
		var parnt = $(this).parent().children(".qty");
		var currentVal = parnt.val();
		if (!isNaN(currentVal) && currentVal > 0) {
			parnt.val(parseInt(currentVal) - 1);
		} else {
			parnt.val(0);
		}
	});

	/*========== File Upload ==========*/
	var imgFile;
	$(document).on("click", "#uploadDp", function () {
		imgFile = $(this).attr("data-file");
		$(this).parents("form").children(".uploadFile").trigger("click");
	});
	$(document).on("change", ".uploadFile", function () {
		// alert(imgFile);
		var file = $(this).val();
		$(".uploadImg").html(file);
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

	$(document).on("click", ".new-cross", function () {
		$("body").removeClass("flow");
		$(".news-letr").fadeOut();
		modalVar = 1;
		$(".show-pop-subscribe-btn").show();
	});
	$(document).on("click", ".show-pop-subscribe-btn", function () {
		$("body").addClass("flow");
		$(".news-letr").fadeIn();
		$(".show-pop-subscribe-btn").hide();
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
	$(document).ready(function () {
		$(".selectpicker").selectpicker();
	});

	// Data Table Js
	var sortOrder = $("th.sortBy").index() > -1 ? $("th.sortBy").index() : 0;
	$(".dataTable").DataTable({
		order: [[sortOrder, "asc"]],
		pageLength: 25,
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

	$("#owl-feature").owlCarousel({
		autoplay: true,
		dots: false,
		nav: true,
		navText: ['<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>'],
		loop: true,
		center: true,
		autoWidth: true,
		autoHeight: true,
		smartSpeed: 1000,
		autoplayTimeout: 10000,
		autoplayHoverPause: true,
		responsive: {
			0: {
				items: 2,
				autoplay: false,
				// center: false,
				autoHeight: false,
				autoWidth: false,
			},
			600: {
				items: 2,
			},
			1000: {
				items: 3,
			},
		},
	});

	var offSet = $("body").offset().top;
	var offSet = offSet + 250;
	$(window).scroll(function () {
		var scrollPos = $(window).scrollTop();
		if (scrollPos >= offSet) {
			$(".bannerDots a").addClass("allbannerDots");
		} else {
			$(".bannerDots a").removeClass("allbannerDots");
		}
	});
});

function textAreaAdjust(o) {
	o.style.height = "1px";
	o.style.height = 25 + o.scrollHeight + "px";
}

// smooth scroling effect================
// $("html").easeScroll();

/*========== Page Loader ==========*/
$(window).on("load", function () {
	$(".loader").delay(700).fadeOut();
	$("#pageloader").delay(1200).fadeOut("slow");
	modalVar = 0;
});

$(window).on("scroll", function () {
	if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.5) {
		if (modalVar == 0) {
			$(".news-letr").fadeIn();
		}
	}
});
