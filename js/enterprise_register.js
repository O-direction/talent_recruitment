var itime = 59; //定义一个变量，倒计时初始化，从59秒开始
function getTime() {
    if (itime >= 0) {
        if (itime === 0) {
            //倒计时变成0时，
            //要清除计时器
            clearTimeout(act);
            //设置按钮为初始状态
            $("#getCodeBtn").val('免费获取手机验证码').attr('disabled', false);
            itime = 59;
        } else {
            //延迟一秒中执行该函数。
            var act = setTimeout('getTime()', 1000);
            //把倒计时的秒显示到按钮中
            $("#getCodeBtn").val('还剩' + itime + '秒');
            itime = itime - 1;
        }
    }
}
$(function() {
    //定义一个函数,用于完成倒计时效果
    $("#getCodeBtn").click(function() {
        //获取输入的手机号码
        var telephone=$('#telephone').val();
        //ajax请求文件，调用短信发送的接口
        $.ajax({
            type: 'get',
            url: 'SendTemplateSMS.php?telephone='+telephone,
            success: function (msg) {
                //判断调用短信发送接口是否成功，
                if (msg) {
                    //调用接口已经成功
                    alert('短信验证码已经发送成功');
                    $("#getCodeBtn").attr('disabled', true); //要禁用该按钮
                    //调用一个函数，完成倒计时效果。
                    getTime();
                }
            }
        });
    });
});