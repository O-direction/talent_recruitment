window.onload=function(){
    var oTop=document.getElementById('top');
    var oTopRight=oTop.getElementsByClassName('right')[0];
    var oTopRightA=oTopRight.getElementsByTagName('a');
    for(let i=0;i<oTopRightA.length;i++){
        oTopRightA[i].onmouseover=function(){
            this.style.cssText='font-weight:550;';
        };
        oTopRightA[i].onmouseout=function(){
            this.style.cssText='';
        };
    }
    var oCity=document.getElementsByClassName('city')[0];
    var oChoose=oCity.getElementsByTagName('img')[0];
    var oTopLeft=oTop.getElementsByClassName('left')[0];
    var oTopLeftLi=oTopLeft.getElementsByTagName('li');
    var oTopLeftDiv=oTopLeft.getElementsByTagName('div');
    var oUlCity=oTopLeft.getElementsByClassName('ul-city')[0];
    oCity.onmouseover=function(){
        oChoose.src="../img/up.png";
        oUlCity.style.cssText+='border:1px solid blue;background: #FFFFFF;';
        setTimeout(function(){
            for(let i=0;i<oTopLeftLi.length;i++){
                oTopLeftLi[i].style.cssText+='display:block;';
            }
            for(let i=0;i<oTopLeftDiv.length;i++){
                oTopLeftDiv[i].style.cssText+='display:block;';
            }
        },300)
    };
    oCity.onmouseout=function(){
        oChoose.src="../img/down.png";
        oUlCity.style.cssText+='border:none;background:none';
        for(let i=0;i<oTopLeftLi.length;i++){
            oTopLeftLi[i].style.cssText+='display:none;';
        }
        for(let i=0;i<oTopLeftDiv.length;i++){
            oTopLeftDiv[i].style.cssText+='display:none;';
        }
    }

};