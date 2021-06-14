$(function () {
    console.log("ready!");
    $(".clipboard-button").click(function (e) {
        e.preventDefault();
        var mystring = $(this).prop('id');
        console.log(mystring);
        navigator.clipboard.writeText(mystring).then(function () {
            /* clipboard successfully set */
        }, function () {
            /* clipboard write failed */
        });
        $(".clipboard-button").html('<i class="bi bi-clipboard"></i>');
        $(this).html('<i class="bi bi-clipboard-check"></i>');
    });
});