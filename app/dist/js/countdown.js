count_down = document.querySelectorAll('.count-down');

// Set the date we're counting down to
var countDownDate = [
    new Date("Jan 29, 2022 10:37:25").getTime(),
    new Date("Jan 28, 2022 15:37:25").getTime(),
    new Date("Feb 30, 2022 12:37:25").getTime(),
    new Date("Jan 30, 2022 9:37:25").getTime(),
    new Date("Jan 30, 2022 4:37:25").getTime(),
    new Date("Jan 30, 2022 5:37:25").getTime(),
];
count_down.forEach((element, index) => {
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate[index] - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"

        element.innerText = 'OFF% : ' + days + "d " + hours + ": "
            + minutes + ": " + seconds + "";
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            element.innerText = 'expire'
            // document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
});
