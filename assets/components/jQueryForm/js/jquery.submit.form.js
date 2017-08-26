(function ($) {
    $.fn.onSubmitForm = function (url, type, callback, beforeSend) {
        var form = $(this),
            url = url || $(this).attr("action"),
            type = type || 'post';

        $(form).submit(function () {
            if(beforeSend != undefined) {
                beforeSend(form);
            }
            if (form.find('.has-error').length) {
                return false;
            }
            $.ajax({
                url: url,
                type: type,
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    var response = JSON.parse(response);
                    if(callback != undefined) {
                        callback(response,form);
                    }
                }
            });
            return false;
        });
    };
    $.fn.uploadFile = function (url, callback) {
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
            error: function (xhr, textStatus, errorThrown) {
                return false;
            }
        });
    }

    $.loadFormValidatePhone = function () {

    }
}(window.jQuery));
