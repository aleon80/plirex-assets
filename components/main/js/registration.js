(function ($) {
    $(function () {
        $(".datepicker.menus").datepicker({
            changeMonth: true,
            changeYear: true,
            defaultDate: '-30y',
            yearRange: "1912:2012",
            constrainInput: true,
            firstDay: 1,
            dayNamesMin: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
            monthNamesShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
            selectOtherMonths: true,
            altFormat: "dd/mm/yy",
            dateFormat: "dd/mm/yy"
        });
    });
})(window.jQuery);

(function ($) {
    $(document).ready(function () {

        if ($('#phone').length > 0) {
            var placeholder = $('#phone').data('placeholder');
            console.log(placeholder);
            $('#phone').mask(placeholder);
        }
    });
})(window.jQuery);