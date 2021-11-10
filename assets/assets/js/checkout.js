"use strict";
$(document).ready(function () {
    var addresses = [];
    function razorpay_setup(key, amount, app_name, logo, razorpay_order_id, username, user_email, user_contact) {
        var options = {
            "key": key, // Enter the Key ID generated from the Dashboard
            "amount": (amount * 100), // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": app_name,
            "description": "Product Purchase",
            "image": logo,
            "order_id": razorpay_order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "handler": function (response) {
                $('#razorpay_payment_id').val(response.razorpay_payment_id);
                $('#razorpay_signature').val(response.razorpay_signature);
                place_order().done(function (result) {
                    console.log(result)
                    console.log(result.error)
                    if (result.error == false) {
                        setTimeout(function () {
                            location.href = base_url + 'payment/success';
                        }, 3000);
                    }else{
                        Toast.fire({
                        icon: 'error',
                        title: 'Something went wrong while placing your order please try again!'
                    });
                    }
                });
            },
            "prefill": {
                "name": username,
                "email": user_email,
                "contact": user_contact
            },
            "notes": {
                "address": app_name + " Purchase"
            },
            "theme": {
                "color": "#3399cc"
            },
            "escape": false,
            "modal": {
                "ondismiss": function () {
                    $('#place_order_btn').attr('disabled', false).html('Place Order');
                }
            }
        };
        console.log(options);
        var rzp = new Razorpay(options);
        return rzp;
    }

    

}