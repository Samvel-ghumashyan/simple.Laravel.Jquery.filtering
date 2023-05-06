import 'jquery/dist/jquery'
import PerfectScrollbar from 'perfect-scrollbar'
import './daterangepicker'
import {setWith} from "lodash/object";



let firstBut = new PerfectScrollbar('#scrolingDivONe');
let secondBut = new PerfectScrollbar('#scrolingDivTwo');



$(document).ready(function() {
    $("#scrolingDivONe .dropdown-item").on("click", function() {
        // Get the value of the clicked item
        const itemValue = $(this).text().trim();

        // Set the value of the span to the clicked item's value
        $(".optBar1Value").text(itemValue);
    });

    $("#scrolingDivTwo .dropdown-item").on("click", function() {
        // Get the value of the clicked item
        const itemValue = $(this).text().trim();

        // Set the value of the span to the clicked item's value
        $(".optBar2Value").text(itemValue);
    });
})


$(document).ready(function() {
     $('#daterangeStart').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'YYYY-MM-DD HH:mm'
        }
     }, function(start, end, label) {
         // When a date range is selected, update the two spans with the start and end values
         $('.dateTimeValue1').html(start.format('MM/DD/YYYY HH:mm'));
         $('.dateTimeValue2').html(end.format('MM/DD/YYYY HH:mm'));
     });

})

$(document).ready(function() {
    $('.carButtons').on('click', function() {
        let $btn = $(this);
        if ($btn.hasClass('btn-outline-secondary')) {
            // Add the new HTML fragment
            $btn.append('<span class="position-absolute p-1 bg-success border border-light rounded-circle" style="width: 30px; height: 30px; left: 73%; top: 2%"><i class="bi bi-check-lg" style="color: white;"></i></span>');
            // Change the button class
            $btn.removeClass('btn-outline-secondary').addClass('btn-outline-success');
        } else {
            // Remove the new HTML fragment
            $btn.children('span').remove();
            // Change the button class back to the original
            $btn.removeClass('btn-outline-success').addClass('btn-outline-secondary');
        }
    });
});


$(document).on('click', '.modalButton', function() {
    let carId = $(this).data('car-id');
    let carImage = $(this).data('car-image');
    let carMark = $(this).data('car-mark');
    let carModel = $(this).data('car-model');
    let carDriver = $(this).data('car-driver');
    let carAvailable = $(this).data('car-available');
    let carCategory = $(this).data('car-category_id');
    let carCategoryText;

        switch(carCategory){
            case 1 : carCategoryText = 'BUSINESS CLASS'; break;
            case 2 : carCategoryText = 'SECOND CLASS'; break;
            case 3 : carCategoryText = 'THIRD CLASS'; break;
        }


    console.log('datassssss', carId, carImage, carMark, carModel )

    // Set the car details in the modal body
    let modalBody = $('.modal-body');
    modalBody.html(`
     <div class="row">
         <div class="col-6">
             <img src="${carImage}" alt="${carMark} ${carModel}" class="img-fluid">
         </div>
  <div class="col-6">
                <h4>${carMark} ${carModel}</h4>
                ${carCategory === 1 ? `<p>Car Driver: ${carDriver}</p>` : ''}
                <p>${carAvailable === 1 ? `<span style="display: inline-block; color: white; background-color: rgba(0,128,0,0.72); width: 120px; text-align: center; height: 30px; padding: 3px; ">CAR AVAILABLE</span>` :
                `<span style="display: inline-block; color: white; background-color: rgba(255,0,0,0.72); width: 120px; text-align: center; height: 30px; padding: 3px; ">CAR AVAILABLE</span>`} </p>
                <p style="background-color: orange; color: white; width: 120px; height: 30px; text-align: center; padding: 3px;">${carCategoryText}</p>
                 <div class="d-flex justify-content-end"><button class="btn btn-success">АРЕНДОВАТЬ</button></div>
            </div>
     </div>
 `);

});




$(document).ready(function() {
    $('.carButtons').click(function() {
        $(this).toggleClass('active');
    });


    $('#filterBtn').click(function() {
        var car_category_id = $('input[name=btnradio]:checked').attr('id');
        var car_brands = [];
        $('.carButtons.active').each(function() {
            car_brands.push($(this).attr('id'));
        });

        if(car_brands.length === 0){
            location.reload();
            return false;
        }

        var data = {
            car_category_id: car_category_id,
            car_brands: car_brands
        };
        $.ajax({
            url: '/filter',
            type: 'get',
            data: data,
            success: function(response) {

                let cars = response;

                // Update the HTML content of the page with the filtered cars
                var html = '';
                for (var i = 0; i < cars.length; i++) {
                    var car = cars[i];
                    html += '<div class="col-4">';
                    html += '<div class="card prod_cards" style="border-radius: 25px; padding: 20px; background-color: white; height: 400px;">';
                     if (car.available){
                         html += '<img class="bd-placeholder-img card-img-top carsImages" src="' + car.car_img + '">';
                     }else {
                         html += '<img class="bd-placeholder-img card-img-top carsImages" src="' + car.car_img + '" style="opacity: 0.3" >';
                     };
                    html += '<div class="card-body">';
                    if(car.available){
                        html += '<h4 class="card-title">' + car.car_mark + ' ' + car.car_model + '</h4>';
                        if (car.car_category_id === 1) {
                            html += '<p class="card-text" style="background-color: #fca900; color: white; font-size: 20px; text-align: center;">С водителям</p>';
                        }
                        html += '<button class="btn btn-success modalButton" data-bs-toggle="modal" data-bs-target="#carModal" data-car-id="' + car.id + '" data-car-image="' + car.car_img + '" data-car-mark="' + car.car_mark + '" data-car-model="' + car.car_model + '" data-car-driver="' + car.car_driver + '" data-car-available="' + car.available + '" data-car-category_id="' + car.car_category_id + '">Посмотреть</button>';
                    }else {
                        html +=  '<div style="background-color: rgba(45,55,72,0.55); color: white; font-size: 40px; text-align: center;">ЗАНЯТ</div>';
                    }

                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                }
                $('.carsBlocks').html(html);
            },
            error: function(xhr, status, error) {
                // Handle error here
            }
        });
    });


});


