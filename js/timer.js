
var i=0;
var lim=90;
$(document).everyTime(1000,function(){
    lim--;
    i++;
    if(lim == 0) {
        $(document).stopTime();
        $('form').submit();
    }
    $('h2#timer').text(lim);
    $('*[name=time]').val(i);
});
