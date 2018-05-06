function check_empty(divId,notWait) {
    var isValid = true;
    if (!divId) {
        divId = '';
    }

    $(divId + ' .chk_empty').each(function () {

        if ($(this).is(':checkbox')) {
            if (!$(".require_chkbox").is(":checked")) {
                var fieldname = $(this).attr("fieldname");
                alert("กรุณาระบุ" + fieldname);
                isValid = false;
                return false;
            }
        } else if ($(this).attr('type') == 'file') {
            if (!$(this).val()) {
                var fieldname = $(this).attr("fieldname");
                alert("กรุณาระบุ" + fieldname);
                isValid = false;
                return false;
            }
        } else {

            if ($(this).val().trim() == "") {
                // var fieldname = $(this).attr("fieldname");
                var fieldname = $("label[for="+ $(this).attr("id")+"]").html();
                alert("กรุณาระบุ" + fieldname);


                if ($(this).is("select")) {  //focus on chosen
                    // $(this).next().mousedown(); แบบfocus + เปิด dropdown
                    $(this).next().addClass("chzn-container-active");
                    $(this).next().children().addClass("chzn-single-with-drop");  //2 บรรทัดadd class for show blue color
                    $(this).next().children().focus();  //for เลื่อนหน้าจอไปหา element นั้น
                } else {
                    $(this).focus();
                }

                isValid = false;
                return false;
            }
        }
    });
    if(isValid && (typeof notWait === "undefined")){//create by SS //กะทบระบบลงทะเบียน (SO)
        //wait_for_render('#'+$('form').last().attr('id'));
    }
    return isValid;
}

function chk_empty()  //function นี้ไม่ค่อยได้ใช้
{
    var isValid = true;

    $('.chk_empty').each(function () {

        if ($(this).val().trim() == "") {
            var fieldname = $(this).parent().prev().children(".field_title").text();   //ใช้ไม่ได้กับกรณีปฏิทิน เพราะมีgen divซ้อน
            //var fieldname = $(this).attr("fieldname");
            alert("กรุณาระบุ" + fieldname);

            if ($(this).is("select")) {  //focus on chosen
                // $(this).next().mousedown(); แบบfocus + เปิด dropdown
                $(this).next().addClass("chzn-container-active");
                $(this).next().children().addClass("chzn-single-with-drop");  //2 บรรทัดadd class for show blue color
                $(this).next().children().focus();  //for เลื่อนหน้าจอไปหา element นั้น
            } else {
                $(this).focus();
            }

            isValid = false;
            return false;
        }
    });
    return isValid;
}

function chkNumber(val) { //use onkeyup="chkNumber(this)";

    var str = val.value;
    var input = val.name;
    var RegExVal = str.replace(/[^0-9]/g, '');
    $("input[name = " + input + "]").val(RegExVal);

}

function chkAmount(e) { //use onkeyup="chkAmount(this)";

    var val = e.value;
    var name = e.name;

    if (isNaN(val)) {
        val = val.replace(/[^0-9\.]/g, '');
        if (val.split('.').length > 2)
            var val_rep = val.replace(/\.+$/, "");
            $("input[name = " + name + "]").val(val_rep);
            alert('กรุณากรอกข้อมูลตัวเลขเท่านั้น');

    }
}

function chkEmailFormat(element)
{
    var Email="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"
    if(!document.getElementById(element.id).value.match(Email) && $('#'+element.id).val()!=""){
        alert("Format อีเมล์ไม่ถูกต้อง");
        $('#'+element.id).val('');
        $('#'+element.id).focus();
        return false;
    }else{
        return true;
    }
}