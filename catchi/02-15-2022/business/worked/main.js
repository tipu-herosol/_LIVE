$(window).on("load", function () {
	/*_____ Toggle _____*/
	$(document).on("click", ".toggle", function () {
		$(".toggle").toggleClass("active");
		$("html").toggleClass("flow");
		$("#nav").toggleClass("active");
	});
	$(document).on("click", "#nav .run_btn", function () {
		$(".toggle").removeClass("active");
		$("html").removeClass("flow");
		$("#nav").removeClass("active");
	});

	/*_____ Footer _____*/
	$(document).on("click", "footer h5.drop", function () {
		$(this).next(".list").slideToggle();
	});

	/*_____ Run Button _____*/
	$(document).on("click", ".run_btn", function (event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			console.log(hash);
			$("html, body").animate(
				{
					scrollTop: $(hash).offset().top - 20,
				},
				800
			);
		}
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

	// $(window).on("scroll", function () {
	// 	if ($(window).scrollTop() >= ($(document).height() - $(window).height()) * 0.5) {
	// 		if (modalVar == 0) {
	// 			$(".news-letr").fadeIn();
	// 		}
	// 	}
	// });
	setInterval(function () {
		$(".news-letr").fadeIn();
		console.log("show");
	}, 10000);
});
