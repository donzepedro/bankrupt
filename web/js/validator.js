let flag = true;
let phone = false;
let symb;
$(document).keydown(function(e) {
    symb = e.key;
    if(symb == 'Backspace'){
        $('#login_field').prop('disabled', false);
        // $('#login_field').focus();
    }
});


$('#login_field').on("input",function(ev){
    if((!($(ev.target).val().length < 1))&&(flag)){
        if(/\+|\d/.test($('#login_field').val().substr(0,1))){
            $('#login_field').val('+7 ('+ $('#login_field').val());
            flag = false;
        }
    }
    if(($(ev.target).val().length == 7)&&(!flag)&&((symb != 'Backspace'))){
        $('#login_field').val($('#login_field').val()+') ');
    }
    if(($(ev.target).val().length == 12)&&(!flag)&&((symb != 'Backspace'))){
        $('#login_field').val($('#login_field').val()+' ');
    }
    if(($(ev.target).val().length == 15)&&(!flag)&&((symb != 'Backspace'))){
        $('#login_field').val($('#login_field').val()+' ');
    }
    if(($(ev.target).val().length == 18 )&&(!flag)&&((symb != 'Backspace'))){
        $('#login_field').val($('#login_field').val()+' ');
    }
    if(($(ev.target).val().length > 17)&&(!flag)){
        $('#login_field').prop('disabled', true);
    }

    if(($(ev.target).val().length ==0)){
        flag = true;
    }
});
$('#login_field').focusout(function(){
    if(/\+|\d/.test($('#login_field').val().substr(0,1))){
        console.log(/\+\d/.test());
    }

});
