function getServerTime() {
    return $.ajax({ async: false }).getResponseHeader("Date");
}
function realtimeClock() {
    var rtClock = new Date();
    // var rtClock = new Date(getServerTime());

    var hours = rtClock.getHours();
    var minutes = rtClock.getMinutes();
    var seconds = rtClock.getSeconds();

    // menampilkan AM PM
    // var amPm = (hours < 12) ? "AM" : "PM";
    // hours = (hours > 12) ? hours - 12 : hours;

    hours = ("0" + hours).slice(-2);
    minutes = ("0" + minutes).slice(-2);
    seconds = ("0" + seconds).slice(-2);

    document.getElementById("clock").innerHTML =
        hours + " : " + minutes + " : " + seconds;
    // + "  " + amPm;
    var jamnya = setTimeout(realtimeClock, 500);
}
