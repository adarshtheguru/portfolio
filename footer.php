<footer>
		<div class="row">
			<div class="col-12 lower">
				<div class="container">
					<div class="row">
						<div class="col-7 col-xs-12">
							<p>&copy; <span class="copyrightYear"></span>&nbsp;All Rights Reserved</p>
						</div>
						<div class="col-5 col-xs-12 text-right">
							<p>Marketed By: <a href="https://beyondwalls.com/" target="_blank">BeyondWalls</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="mob-footer visible-xs">
		<div class="row">
			<div class="col-6">
				<a href="tel:+911234567890" class="mob-call-btn"><span class="sell_do_virtual_numbers">+91 1234 5678
						90</span></a>
			</div>
			<div class="col-6">
				<a href="javascript:;" class="mob_enq_click mob-enq-btn" data-event-category="Footer"
					data-event-action="Click" data-event-name="Enquire Now">Enquire Now</a>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.7.0.js"
		integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="assets/js/all.js"></script>



	<!-------------------- Ecommerce.js & SellDo script starts --------------------->

	<!-------------------- Ecommerce.js & SellDo script ends ------------------------>
	<!-- form validation -->
	<script>
		var _selldo = [];
		window.sell_do_form_rendered = function () {
			$("input[type=phone]").attr('maxlength', '13');
			$('input[placeholder=Name]').keypress(function (e) {
				var regex = new RegExp("^[a-zA-Z ]+$");
				var strigChar = String.fromCharCode(!e.charCode ? e.which : e.charCode);
				if (regex.test(strigChar)) {
					return true;
				}
				return false
			});
			$('input[type=phone]').on('keyup', function () {
				var val = this.value;
				var newStr = '';
				for (var i = 0; i < val.length; i++) {
					var character = val.charAt(i);
					var re = new RegExp('[\+0-9]', '');
					if (re.test(character)) {
						newStr += character;
					}
				}
				$('input[type=phone]').val(newStr);
			});
			setTimeout(function () {
				$('.sell_do_virtual_numbers').attr('data-event-category', 'Section');
				$('.sell_do_virtual_numbers').attr('data-event-action', 'Click');
				$('.sell_do_virtual_numbers').attr('data-event-name', 'Call Number');
				$('.sell_do_virtual_numbers a').attr('data-event-category', 'Footer');
				$('.sell_do_virtual_numbers a').attr('data-event-action', 'Click');
				$('.sell_do_virtual_numbers a').attr('data-event-name', 'Call Number');
			}, 3000);

			$('.sell_do_ctc_btn').attr('data-event-category', 'Header');
			$('.sell_do_ctc_btn').attr('data-event-action', 'Click on call me');
			$('.sell_do_ctc_btn').attr('data-event-name', 'Click to Call');
			$('.sell_do_form_container .btn').attr('data-event-category', 'Header');
			$('.sell_do_form_container .btn').attr('data-event-action', 'Click');
			$('.sell_do_form_container .btn').attr('data-event-name', 'Submit');
			$(".enq-btn-wrapper .sell_do_form_container .btn").attr('data-event-category', 'section');
			$('.mob-footer.sell_do_form_container .btn').attr('data-event-name', 'Contact us submit');

			x = setInterval(function () {
				console.log($(".sell_do_virtual_numbers").html());
				if ($(".sell_do_virtual_numbers").html() == "+91 20 6705 7005") {
					clearInterval(x);
					$(".sell_do_virtual_numbers").html("+91 20 6689 9347");
				}
				if ($(".sell_do_virtual_number_mobile").html() == "+91 20 6705 7005") {
					clearInterval(x);
					$(".sell_do_virtual_number_mobile").html("020 6689 9347");
					$(".sell_do_virtual_number_mobile").attr("href", "tel:+912066899347");
				}

			}, 100);
		};
		window.sell_do_form_successfully_submitted = function (data, event) {
			try {
				dataLayer.push({
					'event': 'selldo_form_submitted'
				});
			} catch (err) { }
		}
	</script>

</body>

</html>