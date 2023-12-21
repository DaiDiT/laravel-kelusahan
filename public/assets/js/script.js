$(document).ready(function () {
	$(".btn-cmt .cursor-pointer").on("click", function () {
		var targetUrl = $(this).data("href");
		window.location.href = targetUrl;
	});
	$(".post-body > p, .cmt-section > p").each(function () {
		var content = $(this).text();
		var tags = Array.from(new Set(content.match(/#[^\s\<\#]+/g)));

		if (tags) {
	        var tempContainer = $('<p></p>');

	        tags.forEach(function (tag) {
	            var link = '<a href="/posts?tag=' + tag.slice(1) + '" class="text-decoration-none fw-semibold text-blueish">' + tag + '</a>';
	            tempContainer.html(content);
	            content = tempContainer.html().replace(new RegExp(tag, 'g'), link);
	        });
	        $(this).html(content);
	    }

		$(this).data("original-content", content);

		var truncatedContent = content.slice(0, 1000);

		if (content.length > 1000) {
			truncatedContent += '<span class="read-more fs-7 fst-italic fw-semibold text-blueish cursor-pointer">... Baca selengkapnya</span>';
		}

		$(this).html(truncatedContent);
	});

	$(".post-body > p").on("click", ".read-more", function () {
		var postBody = $(this).closest(".post-body > p");
		var originalContent = postBody.data("original-content");


		postBody.html(originalContent);
	});
	$(".cmt-section > p").on("click", ".read-more", function () {
		var cmtBody = $(this).closest(".cmt-section > p");
		var originalContent = cmtBody.data("original-content");


		cmtBody.html(originalContent);
	});
	$(".btn-ops, .profile").on("click", function (e) {
		$(".menu").not($(this).find(".menu")).hide();
		$(".navbar-collapse").collapse("hide");
		
		$(this).find(".menu").toggle();

		e.stopPropagation();
	});

	$(document).on("click", function (e) {
		if (!$(e.target).closest(".btn-ops").length) {
			$(".menu").hide();
		}
		if (!$(e.target).closest(".navbar-toggler").length) {
			$(".navbar-collapse").collapse("hide");
		}
	});
});