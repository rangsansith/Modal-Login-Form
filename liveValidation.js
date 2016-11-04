/**
 * Created by healer on 11/4/2016.
 */
$(document).ready(function($){
    //entering a regex so that it can be used as a guild for on the validation
    var testName = /^[A-z\s]*$/;
    $('input#name').bind('input propertychange', function(){
        if(testName.test($(this).val())){
            $(this).css({'border':'1px solid green'});
            $('button.validate').prop('disabled', false);
        } else {
            $(this).css({'border':'1px solid red'});
            $('button.validate').prop('disabled', true);
        }
    });
    var testPassword = /^[A-z0-9]+$/;
    $('input#password').bind('input propertychange', function(){
        if(testPassword.test($(this).val())){
            $(this).css({'border':'1px solid green'});
            $('button.validate').prop('disabled', false);
        } else {
            $(this).css({'border':'1px solid red'});
            $('button.validate').prop('disabled', false);
        }
    });
});