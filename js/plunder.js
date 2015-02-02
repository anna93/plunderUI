var chars = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ' '];


$(".narrowdown").click(function () {
    $('#showalpha').css("display", "inline-block");
    $('.extrabtn').css("display", "inline-block");
    var char = $(this).children().html();
    $('.narrowdown > .network-name').each(function () {
        $(this).fadeOut(function () {
            $(this).html(char + $(this).html()).fadeIn();
        });
    });
    $(".narrowdown").each(function () {
        $(this).addClass('initiatesearch');
        $(this).removeClass('narrowdown');
    });


});


$("#showalpha").click(function () {
    $(".initiatesearch").each(function () {
        $(this).children().fadeOut(function () {
            $(this).html($(this).html()[1]).fadeIn();
        });
        $(this).removeClass("initiatesearch");
        $(this).addClass('narrowdown');
    });
    $('#showalpha').css("display", "none");
    $('.extrabtn').css("display", "none");
});

$("body").on("click",'.initiatesearch',function() {
    var content = $(this).children().html();
    if(content.length===2)
    alert(content);
})

i = 0;
window.onload = function () {
    searchIndicator = setInterval(function () {
        document.getElementById("searching").innerHTML = "P l u n d e r i n g";
        switch (i) {
            case 0:
                document.getElementById("searching").innerHTML += ".&nbsp;&nbsp;&nbsp;&nbsp;";
                break;
            case 1:
                document.getElementById("searching").innerHTML += ".&nbsp;.&nbsp;&nbsp;";
                break;
            case 2:
                document.getElementById("searching").innerHTML += ".&nbsp;.&nbsp;.";
                break;
        }
        i = (++i) % 3;
    }, 500)
};

flag = 0;
function initiatePlunder() {
    var id = $("#identifier").val();
    $.ajax({
        url: "http://localhost:8088/plunderwu1",
        type: 'GET',
        data: {"id": id, "qs": "dfhadhyjg"}
    }).done(function (data) {
        incrProgress(100);
        $("#plundercontent").append(data);
        clearInterval(searchIndicator);
        $("#searching").html("P l u n d e r");
        flag = 1;
    });
}

function ajaxProgressTracker() {
    var id = $("#identifier").val();
    $.ajax({
        url: "http://localhost:8088/plunderwu1/checkstatus.php",
        type: 'GET',
        data: "id=" + id
    }).done(function (data) {
        $('#currentString').html(jQuery.parseJSON(data).currentQS);
        incrProgress(Math.round(parseInt(((jQuery.parseJSON(data).status) * 100) / 37)));
        if (flag !== 1) {
            setTimeout(function () {
                ajaxProgressTracker()
            }, 2000);
        }
        else {
            $("#currentString").html("C o m p l e t e!");
        }
    });
}
