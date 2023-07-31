var now = new Date(),
days = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'],
day = days[now.getDay()],
UTC_hours = new Date().getUTCHours() +8;
$button = $('#myButton');

if (day === days[0] || day === days[6] || (UTC_hours >= 0 && UTC_hours < 17)) {
    $button.prop( "disabled", true );
} else {
    $button.prop( "disabled", false );
    function pageRedirect() {
        window.location.href = "https://www.tutorialrepublic.com/";
      }  
}

$button.click(function() {
    if ($(this).is(':disabled')) {
        alert('We are not accepting entries during weekends.')
        return;
    }
});
