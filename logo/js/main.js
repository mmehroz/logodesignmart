    $(document).on('click', '.order_btn', function(e) {
        e.preventDefault();
        var allLiText = "";
        var service_title = $(this).closest('.p-full').find('.p-name').text();
        var service_price = $(this).closest('.p-full').find('.p-price').text();
        $(this).closest('.p-full').find('li').each(function() {
            var liText = $.trim($(this).text());
            if (liText !== "") {
                if (allLiText == "") {
                    allLiText = liText;
                } else {
                    allLiText = allLiText + "|" + liText;
                }
            }
        });
        $("input#service_price").val(service_price);
        $("input#service_title").val(service_title);
        $("input#service_li").val(allLiText);
        $("form#service_submit_form").submit();
    });
    $(document).on('click', '.sp_order_btn', function(e) {
        e.preventDefault();
        var allLiText = "";
        var service_title = $('.sp-package').find('.p-name').text();
        var service_price = $('.sp-package').find('.p-price').text();
        $('.sp-package').find('li').each(function() {
            var liText = $.trim($(this).text());
            if (liText !== "") {
                if (allLiText == "") {
                    allLiText = liText;
                } else {
                    allLiText = allLiText + "|" + liText;
                }
            }
        });
        $("input#service_price").val(service_price);
        $("input#service_title").val(service_title);
        $("input#service_li").val(allLiText);
        $("form#service_submit_form").submit();
    });
