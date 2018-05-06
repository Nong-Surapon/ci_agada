<script type="text/javascript">

    $(document).ready(function(){

        //ให้พิมพ์อังกฤษอย่างเดียว
        $(".english").keypress(function(e) {
            var strCheck = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-.';
            var len = 0;
            var whichCode = (window.Event) ? e.which : e.keyCode;
            if(whichCode != 8 && whichCode != 0 && whichCode != 32){
                key = String.fromCharCode(whichCode);
                if (strCheck.indexOf(key) == -1){
                    return false;
                }
            }
        });

        //ให้พิมพ์ไทยอย่างเดียว
        $(".thai").keypress(function(e) {
            var whichCode = (window.Event) ? e.which : e.keyCode;
            if(whichCode != 8 && whichCode != 0 && whichCode != 32){
                key = String.fromCharCode(whichCode);
                var re = /^[ก-๙]+$/ig;
                return re.test(key);
            }
        });

        //ให้พิมพ์ไทยและอังกฤษอย่างเดียว(ไม่ให้พิมพ์อักขระพิเศษ)
        $(".thai_about").keypress(function(e) {
            var strCheck = 'ๅภถุึคตจขชๆไำพะัีรนยบลฃฟหกดเ้่าสวงผปแอิืทมใฝ๑๒๓๔ู๕๖๗๘๙๐ฎฑธํ๊ณฯญฐฅฤฆฏโฌ็๋ษศซฉฮฺ์ฒฬฦabcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-1234567890()[]~!@#$%^&*_+{}[]|\:"<>??';
            var whichCode = (window.Event) ? e.which : e.keyCode;
            if(whichCode != 8 && whichCode != 0 && whichCode != 32){
                key = String.fromCharCode(whichCode);
                var re = /^[ก-๙]+$/ig;
                //return re.test(key);
                if (strCheck.indexOf(key) == -1){
                    return false;
                }
            }
        });

        //ให้พิมพ์อังกฤษและตัวเลขและวงเล็บ
        $(".english_about").keypress(function(e) {
            var strCheck = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-1234567890()[]~!@#$%^&*_+{}[]|\:"<>??';
            var len = 0;
            var whichCode = (window.Event) ? e.which : e.keyCode;
            if(whichCode != 8 && whichCode != 0 && whichCode != 32){
                key = String.fromCharCode(whichCode);
                if (strCheck.indexOf(key) == -1){
                    return false;
                }
            }
        });

        $(".chkNum").keyup(function () {//หากมีการแก้ใช้
            chkFormatNam_NoDot(this.value,this.id);
        });

    });

</script>

<script src="<?php echo base_url('assets/js/agada.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/modernizr-2.6.2.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js'); ?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-select.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap-hover-dropdown.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/easypiechart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.easypiechart.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/wow.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/icheck.min.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/price-range.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.bootstrap.wizard.js" type="text/javascript'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/wizard.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>