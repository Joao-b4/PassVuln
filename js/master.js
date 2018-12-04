function sleep(milliseconds) {
var start = new Date().getTime();
    for (var i = 0; i < 1e7; i++) {
        if ((new Date().getTime() - start) > milliseconds){
          break;
        }
    }
}
function removeC(){
    $('#loading').removeClass('load-container load7');
}
