$("#form4Mail").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        event.preventDefault();
        submitForm();
    }
});


function submitForm() {
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    $.ajax({
        type: "POST",
        url: "/person/mailForm",
        data: "name=" + name + "&email=" + email + "&message=" + message,
        success: function (text) {
            if (text === "success") {
                formSuccess();
            } else {
                formError();
                submitMSG(false, text);
            }
        }
    });
}

function formSuccess() {
    $("#form4Mail")[0].reset();
    resetText();
    submitMSG(true, "Message Submitted!");
}


$("#resetBtn").click(function () {
    resetText();
    submitMSG(true, "");
});


function resetText() {
    $("label[id^='lbComment']").text("").append("&nbsp;");
}

function formError() {
    $("#form4Mail").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    var msgClasses = '';
    if (valid) {
        msgClasses = "h4 text-center tada animated text-success col-sm-8";
    } else {
        msgClasses = "h4 text-center text-danger col-sm-8";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}


function onClickTip(idRb) {
    var m = $("#message");
    switch ($('#' + idRb).val()) {
        case '1':
            m.val(m.val() + $("#lRbLike").attr("title"));
            break;
        case '2':
            m.val(m.val() + $("#lRbHate").attr("title"));
            break;
        case '0':
            m.val('');
            break;
    }
}

function onCLickComment(idCbx, idLbl, idSpn, comment, className) {
    var value = $('#' + idCbx).is(':checked');
    if (value) {
        $('#' + idLbl).text(comment);
        $('#' + idSpn).addClass(className);
    } else {
        $('#' + idLbl).text("").append("&nbsp;");
        $('#' + idSpn).removeClass(className);
    }
}

