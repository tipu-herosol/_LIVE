$(function () {
	/*_____ Toggle _____*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("html").toggleClass("flow side");
		$("[nav]").toggleClass("active");
		$("[nav] > ul > li > .sub").slideUp();
	});
	w = $(window).width();
	if (w <= 991) {
		$(document).on("click", "[nav] > ul > li.drop > a", function (e) {
			e.preventDefault();
			$(".sub").not($(this).parent().children(".sub").slideToggle()).slideUp();
		});
	}
	$(window).on("resize", function () {
		$("[nav] > ul > li > .sub").removeAttr("style");
	});

	/*_____ Drop Down _____*/
	$(document).on("click", ".dropBtn", function (e) {
		e.stopPropagation();
		if ($(this).parents(".dropCnt:first").hasClass("active")) $(this).parents(".dropCnt:first").find(".dropCnt:first").addClass("active");
		else {
			$(".dropCnt").not($(this).parent().children(".dropCnt")).removeClass("active");
			$(this).parents(".dropDown:first").find(".dropCnt:first").toggleClass("active");
		}
	});
	$(document).on("click", ".dropCnt", function (e) {
		e.stopPropagation();
	});
	$(document).on("click", function () {
		$(".dropCnt").removeClass("active");
	});

	/*_____ Popup _____*/
	$(document).on("click", ".popup", function (e) {
		if ($(e.target).closest(".popup ._inner, .popup .inside").length === 0) {
			$(".popup").fadeOut("3000");
			$("html").removeClass("flow");
			$("#vidBlk").html("");
		}
	});
	$(document).on("click", ".crosBtn", function () {
		$(".popup").fadeOut();
		$("html").removeClass("flow");
		$("#vidBlk").html("");
		$("#donarHtml").html("");
	});
	$(document).keydown(function (e) {
		if (e.keyCode == 27) $(".popup .crosBtn").click();
	});
	$(document).on("click", ".popBtn", function () {
		var popUp = $(this).data("popup");
		$("html").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});
	$(document).on("click", ".popDonor", function () {
		var popUp = $(this).data("popup");
		var donors = $(this).data("donars");
		let donors_html = '';
		$(donors).each(function (index, donor) {
			donors_html += '<div class="donorBlk"><div class="ico"><img src="' + base_url + 'assets/images/placeholder_black.svg" alt=""></div><div class="txt"><div class="name">' + donor.name + '</div><div class="small"><strong>' + donor.amount + '</strong><em> • </em><span>' + donor.date + '</span></div></div></div>'
		});
		$("#donarHtml").html(donors_html);
		$("html").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});
	$(document).on("click", ".payBtn", function () {
		var popUp = $(this).data("popup");
		var paypal_email = $(this).data("paypal_email");
		var payment_id = $(this).data("id");
		$("#paypalEmail").val(paypal_email);
		$("#payment_id").val(payment_id);
		$("html").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});
	$(document).on("click", ".popBtn[data-store]", function () {
		var vcode = $(this).data("store");
		var type = $(this).data("video_type");
		if (type != '') {
			if (type == 'vimeo') {
				$("#vidBlk").html('<iframe src="https://player.vimeo.com/video/' + vcode + '" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>');
			}
			else {
				$("#vidBlk").html('<iframe src="https://www.youtube.com/embed/' + vcode + '?autoplay=1&loop=1&rel=0&wmode=transparent&modestbranding=1" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>');
			}
		}
		else {
			$("#vidBlk").html('<iframe src="https://www.youtube.com/embed/' + vcode + '?autoplay=1&loop=1&rel=0&wmode=transparent&modestbranding=1" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>');
		}

	});

	$(document).on("click", ".txtGrp.pasDv > i.icon-eye", function () {
		$(this).addClass("icon-eye-slash");
		$(this).removeClass("icon-eye");
		$(this).parent().find(".txtBox").attr("type", "text");
	});
	$(document).on("click", ".txtGrp.pasDv > i.icon-eye-slash", function () {
		$(this).addClass("icon-eye");
		$(this).removeClass("icon-eye-slash");
		$(this).parent().find(".txtBox").attr("type", "password");
	});

	$(document).on("focus", ".txtGrp .txtBox:not(select):not(.uploadImg)", function () {
		$(this).parents(".txtGrp:first").find("label:first").addClass("move");
	});

	$(document).on("blur", ".txtGrp .txtBox:not(select):not(.uploadImg)", function () {
		if (this.value == "") $(this).parents(".txtGrp:first").find("label:first").removeClass("move");
	});

	$(".txtGrp select.txtBox").parents(".txtGrp").find("label:first").addClass("move");

	$(document).on("change", "[data-payment] .lblBtn > input.tglBlk", function () {
		let checked = this.checked;
		$(this).parents("[data-payment]").find(".insideBlk").slideUp();
		if (checked == true) {
			$(this).parents(".lblBtn").next(".insideBlk").slideDown();
		}
	});
});

$(window).on("load", function () {
	$("img").parent("a:not(.webBtn)").css("display", "block");
	$(".loader").delay(700).fadeOut();
	$("#pageloader").delay(1200).fadeOut("slow");
});

/*_____ Upload File _____*/
var upldFile;
$(document).on("click", ".uploadImg[data-upload]:not(.uploaded)", function () {
	upldFile = $(this).attr("data-upload");
	$(this).data("preText", $(this).attr("data-text"));
	$(this).parents("form").find(`input[type="file"][data-upload="${upldFile}"]`).trigger("click");
});
$(document).on("click", ".uploadImg[data-upload].uploaded", function () {
	upldFile = $(this).attr("data-upload");
	$(this).attr("data-text", $(this).data("preText")).removeClass("uploaded");
	$(this).parents("form").find(`input[type="file"][data-upload="${upldFile}"]`).get(0).value = "";
});
let input = $(".txtGrp .txtBox:not(.uploadImg)");
$.each(input, function (index, value) {
	// console.log(index);
	if ($(value).val() != "") {
		$(value).prev().addClass("move");
	}
});
$("input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea").each(function (element, i) {
	if ((element.value !== undefined && element.value.length > 0) || $(this).attr("placeholder") !== null) {
		$(this).siblings("label").addClass("move");
	} else {
		$(this).siblings("label").removeClass("move");
	}
});
$('#owl-folio').owlCarousel({
	loop: true,
	margin: 30,
	smartSpeed: 1000,
	autoplayTimeout: 8000,
	autoplayHoverPause: true,
	responsive: {
		0: {
			items: 1
		},
		580: {
			items: 2
		}
	}
});
$('#owl-gallery').owlCarousel({
	dots: false,
	loop: true,
	margin: 10,
	smartSpeed: 1000,
	autoplayTimeout: 8000,
	autoplayHoverPause: true,
	URLhashListener: true,
	startPosition: 'URLHash',
	items: 1
});
$('#owl-thumbs').owlCarousel({
	// nav: true,
	// navText: ['<i></i>, <i></i>'],
	dots: false,
	loop: true,
	margin: 10,
	autoWidth: true,
	smartSpeed: 1000,
	autoplayTimeout: 8000,
	autoplayHoverPause: true,
	items: 7
});
var $grid;
$(window).on('load', function () {
	var masonary = setInterval(function () {
		$grid = $('[masonary_parent]').masonry({
			percentPosition: true,
			itemSelector: '[masonary]'
		});
		clearInterval(masonary);
	}, 1000);
});
function copyToClipboard(elementId) {

	// Create a "hidden" input
	var aux = document.createElement("input");

	// Assign it the value of the specified element
	aux.setAttribute("value", document.getElementById(elementId).innerHTML);

	// Append it to the body
	document.body.appendChild(aux);

	// Highlight its content
	aux.select();

	// Copy the highlighted text
	document.execCommand("copy");
	document.getElementById("copied").innerHTML = "Copied Text";
	setTimeout(function () {
		$('#copied').html('');
	}, 2000);
	// Remove it from the body
	document.body.removeChild(aux);

}