// defining actions after the page is loaded
document.addEventListener("DOMContentLoaded", function (event) {
	"use strict";

	// mobile menu
	$("#menu__toggle").on("change", function () {
		$("body").toggleClass('menu')
	});

	$('.menu__box li').on('click', () => {
		$("body").removeClass('menu')
		$('#menu__toggle').prop('checked', false)
	})
	// mobile menu

});