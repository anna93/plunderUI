

$(".initiateSearch").click(function () {
    $('#custom_carousel').carousel(2);
    $('#custom_carousel .controls li').addClass("active");
    $('#custom_carousel .controls li').addClass("carousel-disabled");

    intializeLoader();
    initiatePlunder();
    ajaxProgressTracker();


});

i = 0;
window.onload = function () {
    searchIndicator = setInterval(function () {
        document.getElementById("searching").innerHTML = "S e a r c h i n g";
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
        data: {"id" : id, "qs":"dfhadhyjg"}
    }).done(function (data) {
        incrProgress(100);
        $("#plundercontent").append(data);
        clearInterval(searchIndicator);
        $("#searching").html("S e a r c h");
        flag = 1;
    });
}

function ajaxProgressTracker() {
    var id = $("#identifier").val();
    $.ajax({
        url: "http://localhost:8088/plunderwu1/checkstatus.php",
        type: 'GET',
        data: "id="+id
    }).done(function (data) {
        $('#currentString').html(jQuery.parseJSON(data).currentQS);
        incrProgress(Math.round(parseInt(((jQuery.parseJSON(data).status)*100)/37)));
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
