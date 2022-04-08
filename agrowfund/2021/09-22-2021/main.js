$(function () {
	/*_____ Toggle _____*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("html").toggleClass("flow side");
		$("[nav]").toggleClass("active");
		$("[nav] > ul > li > .sub").slideUp();
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
	});
	$(document).keydown(function (e) {
		if (e.keyCode == 27) $(".popup .crosBtn").click();
	});
	$(document).on("click", ".popBtn", function () {
		var popUp = $(this).data("popup");
		$("html").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});
	$(document).on("click", ".popBtn[data-store]", function () {
		var vcode = $(this).data("store");
		$("#vidBlk").html('<iframe src="https://www.youtube.com/embed/' + vcode + '?autoplay=1&loop=1&rel=0&wmode=transparent&modestbranding=1" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>');
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
	$(this)
		.parents("form")
		.find(`input[type="file"][data-upload="${upldFile}"]`)
		.trigger("click");
});
$(document).on("click", ".uploadImg[data-upload].uploaded", function () {
	upldFile = $(this).attr("data-upload");
	$(this)
		.attr("data-text", $(this).data("preText"))
		.removeClass("uploaded");
	$(this)
		.parents("form")
		.find(`input[type="file"][data-upload="${upldFile}"]`)
		.get(0).value = "";
});
let input = $(".txtGrp .txtBox:not(.uploadImg)");
	$.each(input, function (index, value) {
		// console.log(index);
		if ($(value).val() != '') {
			$(value).prev().addClass('move');
		}
	});
	$('input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea').each(function (element, i) {
		if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== null) {
			$(this).siblings('label').addClass('move');
		}
		else {
			$(this).siblings('label').removeClass('move');
		}
	});
