function taobao_set_country (code) {
    $("#search_country").val(code);
    $('.cuselText').text($('#cusel-scroll-search_country span[val=' + code + ']').text());
    return code;
}

jQuery(function($){
    jQuery.cookie('country', '');
    clientIP = false;
    if(!$.cookie('country') && clientIP) {
        alert('get new');
        $.get("http://api.hostip.info/country.php?ip="+clientIP.toString(), function(data) {
            if(data && data != 'XX') {
                taobao_set_country(data);
                $.cookie('country', data);
            }
        })
    } else {
        alert('start else');
        if (!$.cookie('country')) {
            alert('set in list and set in cookie')
            $.cookie('country', taobao_set_country($('#search_country').val()));
        } else {
            alert('set from cookie');
            taobao_set_country($.cookie('country'));
        }
    }
})