window.onload=function () {
    var oTop=document.getElementsByClassName('top')[0];
    var oTopFirst=oTop.getElementsByClassName('first')[0];
    var oTopSecond=oTop.getElementsByClassName('second')[0];
    var oAccount=document.getElementsByClassName('account')[0];
    var oPhone=document.getElementsByClassName('phone')[0];
    oTopSecond.onclick=function () {
        oTopFirst.className="first pull-left";
        oTopSecond.className="second pull-left active";
        oAccount.style.cssText="display:none;";
        oPhone.style.cssText="display:block;";
    };
    oTopFirst.onclick=function () {
        oTopFirst.className="first pull-left active";
        oTopSecond.className="second pull-left";
        oAccount.style.cssText="display:block;";
        oPhone.style.cssText="display:none;";
    };
    jQuery.ajax()
};