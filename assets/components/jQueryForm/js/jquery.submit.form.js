(function ($) {
    $.fn.onSubmitForm = function (url, callback, type) {
        var form = $(this);
        if (type === undefined) {
            type = 'post'
        }
        $(form).submit(function () {
            //var finishTime = new Date().getTime();
            if (form.find('.has-error').length) {
                return false;
            }
            $(form).find("input[type=text]").attr("readonly", true);
            $.ajax({
                url: url,
                type: type,
                data: form.serialize(),
                success: function (response) {
                    var response = JSON.parse(response);
                    callback(response, form);
                }
            });
            return false;
        });
    }
    $.fn.uploadFile = function(url, callback){
        var form = $(this);
        $.ajaxFileUpload({
            url: url,
            type: "POST",
            dataType: "json",
            data: form.serialize(),
            success: function (response) {
                var response = JSON.parse(response);
                callback(response, form);
            },
            error: function(xhr, textStatus, errorThrown)
            {
                return false;
            }
        });
    }

    $.loadFormValidatePhone = function (){

    }
}(window.jQuery));
