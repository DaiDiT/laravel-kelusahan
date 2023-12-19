$(document).ready(function () {
	$(".btn-cmt").on("click", function () {
		// var targetUrl = $(this).data("href");
		// window.location.href = targetUrl;
		console.log('cmt diklik');
		$(this).find("modals.modal").addClass("d-block");
	});
	$(".post-body > p").each(function () {
		var content = $(this).text();
		var tags = Array.from(new Set(content.match(/#[^\s\<\#]+/g)));

		if (tags) {
	        var tempContainer = $('<p></p>');

	        tags.forEach(function (tag) {
	            var link = '<a href="/posts?tag=' + tag.slice(1) + ' class="text-decoration-none fw-semibold text-blueish">' + tag + '</a>';
	            tempContainer.html(content);  // Mengganti konten sementara dengan teks saat ini
	            content = tempContainer.html().replace(new RegExp(tag, 'g'), link);  // Menggantikan semua kemunculan tagar
	        });

	        $(this).html(content);  // Menetapkan kembali konten paragraf dengan hasil perubahan
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
	$(".btn-heart").on("click", function() {

		if ($(this).hasClass("liked")) {
			$(this).removeClass("liked")
			$(this).find("#heartIcon").removeClass("color-red");
		} else {
			$(this).addClass("liked")
			$(this).find("#heartIcon").addClass("color-red");
		}
	});
	$(".cmt-section:hover").on("click", function() {
		$(this).find(".btn-ops").addClass("d-block");
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
		// if (!$(e.target).closest("modals.modal").length) {
		// 	$("modals").removeClass("d-block");
		// }
	});
});
function likePost(postId) {
        $.ajax({
            url: '/like-post',
            method: 'POST',
            data: { post_id: postId },
            success: function (data) {
                if (data.success) {
                    // Perbarui jumlah like secara dinamis
                    $('#like-count-' + postId).text(data.like_count);
                }
            }
        });
    }