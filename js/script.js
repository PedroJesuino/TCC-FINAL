$(function () {

	$('.cards__obras').slick(
		{
			infinite: true,
			speed: 400,
			slidesToShow: 4,
			slidesToScroll: 4,
			prevArrow: '<span class="priv_arrow"><i class="fas fa-angle-left"></i></span>',
			nextArrow: '<span class="next_arrow"><i class="fas fa-angle-right"></i></span>',
		});


	document.addEventListener("keypress", function (e) {
		if (e.key === "Enter") {
			const enviar = document.querySelector("#enviar");

			enviar.click();
			$('#pesquisa').val('')
		}
	});



	$('.filter').on('click', function (e) {
		e.preventDefault();
		$('.cards__obras').show();

		var pesquisa = document.querySelector("#pesquisa").value;
		$('.filter').removeClass('active');

		var filterC = pesquisa;


		var filters = ['all', 'artes', 'literatura', 'artista', pesquisa];

		$('#pesquisa').val('');
		if (filterC == "") {
			filterC = $(this).data('attribute');
			if (filterC == "all") {
				$('.cards__obras').slick('slickUnfilter');
				if (pesquisa == "") {
					document.location.reload(true);
				}
			} else {
				$('.cards__obras').slick('slickUnfilter').slick('slickFilter', '.' + filterC);
			}
			$(this).addClass('active');
		} else {
			if (filters.includes(filterC)) {
				$('.cards__obras').slick('slickUnfilter').slick('slickFilter', '.' + filterC);
			} else {
				$('.cards__obras').hide();
			}
		}

		pesquisa = "";

	});


});

