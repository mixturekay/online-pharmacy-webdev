
    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
   // let $deal_price = $("#deal-price");
    let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){

      //  let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      //  let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        // change product price using ajax call
      //  $.ajax({url: "Ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
               // let obj = JSON.parse(result);
               // let item_price = obj[0]['item_price'];

                if($input.val() >= 1 && $input.val() <= 9){
                    $input.val(function(i, oldval){
                        return ++oldval;
                    });

                    // increase price of the product
                    //$price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    //let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                    //$deal_price.text(subtotal.toFixed(2));
                }

            //}}); // closing ajax request
    }); // closing qty up button

    // click on qty down button
    $qty_down.click(function(e){

        //let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
        //let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

        //change product price using ajax call
        //$.ajax({url: "Ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              //let obj = JSON.parse(result);
              //  let item_price = obj[0]['item_price'];

                if($input.val() > 1 && $input.val() <= 10){
                    $input.val(function(i, oldval){
                        return --oldval;
                    });


                    // increase price of the product
                   // $price.text(parseInt(item_price * $input.val()).toFixed(2));

                    // set subtotal price
                    //let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                    //$deal_price.text(subtotal.toFixed(2));
                }

            //}}); // closing ajax request
    }); // closing qty down button



    // input contact-form validation
/* function validate(){
  var name = document.getElementById("name").value;
  var subject = document.getElementById("subject").value;
  var phone = document.getElementById("phone").value;
  var email = document.getElementById("email").value;
  var message = document.getElementById("message").value;
  var error_message = document.getElementById("error_message");

  error_message.style.padding = "10px";

  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }
  if(subject.length < 10){
    text = "Please Enter Correct Subject";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 10){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }
  if(message.length <= 140){
    text = "Please Enter More Than 140 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;*/

    $("#name-register,#register-email,register-pass,#register-cpass").removeClass("input-error");
  var errorEmpty = "<?php echo $errorEmpty?>";
  var errorEmail = "<?php echo $errorEmail?>";

  if (errorEmpty == true) {
    $("#name-register,#register-email,register-pass,#register-cpass").addClass("input-error");
  }
  if (errorEmail == true) {
      $("#register-email").addClass("input-error");
  }
  if (errorEmpty == false && errorEmail == false) {
    $("#name-register,#register-email,register-pass,#register-cpass").val("");
  }