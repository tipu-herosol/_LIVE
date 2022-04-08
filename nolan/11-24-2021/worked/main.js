$(function () {
	/*_____ Toggle _____*/
	$(document).on("click", ".toggle, #lst > li > a", function () {
		$(".toggle").toggleClass("active");
		$("html").toggleClass("flow");
		$("#nav").toggleClass("active");
		$("#nav > ul > li > .sub").slideUp();
	});

	w = $(window).width();
	if (w <= 991) {
		$(document).on("click", "#nav > ul > li.drop > a", function (e) {
			e.preventDefault();
			$(".sub").not($(this).parent().children(".sub").slideToggle()).slideUp();
		});
	}

	$(window).on("resize", function () {
		$("#nav > ul > li > .sub").removeAttr("style");
	});

	$(document).on("click", ".form_blk.pass_blk > i.icon-eye", function () {
		$(this).addClass("icon-eye-slash");
		$(this).removeClass("icon-eye");
		$(this).parent().find(".text_box").attr("type", "text");
	});

	$(document).on("click", ".form_blk.pass_blk > i.icon-eye-slash", function () {
		$(this).addClass("icon-eye");
		$(this).removeClass("icon-eye-slash");
		$(this).parent().find(".text_box").attr("type", "password");
	});

	$(document).on("change", "input[type='file']", function () {
		// alert(imgFile);
		let file = $(this).val();
		if (this.files.length > 0) {
			$(this).parent("label").children("button").text(file);
		} else {
			$(this).parent("label").children("button").text("Choose File");
		}
	});

	$(document).on("click", ".faq_blk > h4", function () {
		$(".faq_blk").not($(this).parent().toggleClass("active")).removeClass("active");
		$(".faq_blk > .txt").not($(this).parent().children(".txt").slideToggle()).slideUp();
	});

	$(".faq_lst > .faq_blk:nth-child(1)").addClass("active");

	/*_____ Popup _____*/

	$(document).on("click", ".popup", function (e) {
		if ($(e.target).closest(".popup ._inner, .popup .inside").length === 0) {
			$(".popup").fadeOut("3000");
			$("html").removeClass("flow");
			$("#vid_blk").html("");
		}
	});

	$(document).on("click", ".cross_btn", function () {
		$(".popup").fadeOut();
		$("html").removeClass("flow");
		$("#vid_blk").html("");
	});

	$(document).keydown(function (e) {
		if (e.keyCode == 27) $(".popup .cross_btn").click();
	});

	$(document).on("click", ".pop_btn", function () {
		var popUp = $(this).data("popup");
		$("html").addClass("flow");
		$(".popup[data-popup= " + popUp + "]").fadeIn();
	});

	$(document).on("click", ".pop_btn[data-store]", function () {
		var vcode = $(this).data("store");
		$("#vid_blk").html('<iframe src="https://www.youtube.com/embed/' + vcode + '?autoplay=1&loop=1&rel=0&wmode=transparent&modestbranding=1" allow="autoplay;" frameborder="0" wmode="Opaque"></iframe>');
	});

	var offSet = $("body").offset().top;
	var offSet = offSet + 250;
	$(window).scroll(function () {
		var scrollPos = $(window).scrollTop();
		if (scrollPos >= offSet) {
			$("header").addClass("fix");
		} else {
			$("header").removeClass("fix");
		}
	});
});
