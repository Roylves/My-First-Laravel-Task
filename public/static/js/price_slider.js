function initRangeSliderPayroll(){
	  var updateSlider = document.getElementById('payroll_range');
	  if (updateSlider != null) {
		    noUiSlider.create(updateSlider, {
			      start: 3,
			      behaviour: 'payroll_range',
			      connect: 'upper',
			      range: {
				        'min': 1,
				        'max': 101
			      },
			      step: 1
		    });

		    var sliderBlock = $('.payroll_range .range_slider_tip').clone();
		    $('.payroll_range .range_slider_tip').remove();
		    $('.payroll_range .noUi-handle').append(sliderBlock);

        var monthly_prices = [
            {'from': 0, 'to': 3, 'price': 0},
            {'from': 4, 'to': 5, 'price': 30},
            {'from': 6, 'to': 10, 'price': 50},
            {'from': 11, 'to': 25, 'price': 100},
            {'from': 26, 'to': 50, 'price': 150},
            {'from': 51, 'to': 100, 'price': 200},
            {'from': 101, 'to': 250, 'price': 'ASK'}
        ];
        var yearly_prices = [
            {'from': 0, 'to': 3, 'price': 0},
            {'from': 4, 'to': 5, 'price': 360},
            {'from': 6, 'to': 10, 'price': 600},
            {'from': 11, 'to': 25, 'price': 1200},
            {'from': 26, 'to': 50, 'price': 1800},
            {'from': 51, 'to': 100, 'price': 2400},
            {'from': 101, 'to': 250, 'price': 'ASK'}
        ];

		    updateSlider.noUiSlider.on('update', function(values, handle) {
            var headcount = values[handle];

			      $('.payroll_range .users_count').text(parseInt(headcount));

            var total_amount = 0;

            var plan_choice = $('.monthly_or_yearly_plan .btn input:checked[name="plan_choice"]').val();

            var prices = [];
            if (plan_choice == 'monthly'){
                prices = monthly_prices;
                $('span.plan_interval').html('mo');
                $('p.yearly_plan').addClass('hidden');

            } else if (plan_choice == 'yearly'){
                prices = yearly_prices;
                $('span.plan_interval').html('yr');
                $('p.yearly_plan').removeClass('hidden');
            }
            prices.forEach(function(plan){
                if (headcount >= plan['from'] && headcount <= plan['to']){
                    total_amount = plan['price'];
                }
            });

			      $('.payroll_range .rm_counter').text(total_amount);
			      $('.payroll_range .total_amount').text(total_amount);
		    });

        $('.monthly_or_yearly_plan .btn-group input').change(function(){
            updateSlider.noUiSlider.set(3);
        });
	  }
}

function initRangeSliderHr(){
	  var updateSlider = document.getElementById('hr_range');
	  if (updateSlider != null) {
		    noUiSlider.create(updateSlider, {
			      start: 200,
			      behaviour: 'hr_range',
			      connect: 'upper',
			      range: {
				        'min':  1,
				        'max':  1000
			      },
			      step: 1
		    });

		    var sliderBlock = $('.hr_range .range_slider_tip').clone();
		    $('.hr_range .range_slider_tip').remove();
		    $('.hr_range .noUi-handle').append(sliderBlock);

		    updateSlider.noUiSlider.on('update', function( values, handle ) {
			      $('.hr_range .users_count').text(1*values[handle]);
		    });
	  }
}

function slideBlock(){
    $('body').on('click', '.slide_btn', function(e){
        $(this).parents('.slide_block').toggleClass('active');
        e.preventDefault();
	  });
}

$(document).ready(function(){
    initRangeSliderPayroll();
    initRangeSliderHr();
    slideBlock();
});
