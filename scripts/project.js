$(document).ready(function () {
	$(function() {
		$(".card-button").on('click', () => {
			$(".list").removeClass("shown");
			$(".list").addClass("hidden");
			$(".cards").removeClass("hidden");
			$(".cards").addClass("shown");
		});
		$(".list-button").on('click', () => {
			$(".cards").removeClass("shown");
			$(".cards").addClass("hidden");
			$(".list").removeClass("hidden");
			$(".list").addClass("shown");
		});
	});

	$(function() {
		$(".get-books").on('click', () => {
			$(".list").removeClass("shown");
			$(".list").addClass("hidden");
			$(".cards").removeClass("hidden");
			$(".cards").addClass("shown");
		});
	});
});