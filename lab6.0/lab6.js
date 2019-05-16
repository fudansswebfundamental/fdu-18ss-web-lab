window.onload = function(){
    var Img=document.getElementById('featured');
    var Imgbtn=document.getElementById('thumbnails');
    change();

    var odiv = document.getElementsByTagName('figcaption');
        for(var i=0;i<odiv.length;i++)
    {
        odiv[i].onmouseover = function(){
            startOP(this,80);
        }
        odiv[i].onmouseout = function(){
            startOP(this,0);
        }
        odiv[i].timer = null;//事先定义
        odiv[i].alpha = null;//事先定义
        //这里发现一个问题，对象的动画属性可以不定义，但是透明度属性必须定义，否则报错
    }
}

function startOP(obj,utarget){
    clearInterval(obj.timer);//先关闭定时器
    obj.timer = setInterval(function(){
        var speed = 0;
        if(obj.alpha>utarget){
            speed = -10;
        }
        else{
            speed = 10;
        }
        obj.alpha = obj.alpha+speed;
        if(obj.alpha == utarget){
            clearInterval(obj.timer);
        }

        obj.style.opacity = parseInt(obj.alpha)/100;
    },100);
}

function change() {
    var img=document.getElementsByTagName("img");
    img[2].onclick=function () {
        img[1].src="images/medium/5855774224.jpg";
        img[1].title="Battle"
    };
    img[3].onclick=function () {
        img[1].src="images/medium/5856697109.jpg";
        img[1].title="Luneburg"
    };
    img[4].onclick=function () {
        img[1].src="images/medium/6119130918.jpg";
        img[1].title="Bermuda"
    };
    img[5].onclick=function () {
        img[1].src="images/medium/8711645510.jpg";
        img[1].title="Athens"
    };
    img[6].onclick=function () {
        img[1].src="images/medium/9504449928.jpg";
        img[1].title="Florence"
    };
}
function s() {
    var img = document.getElementsByTagName("img");
    img[1].onclick = function () {
        img[0].src = "images/medium/painting1.jpg"
    };
    img[2].onclick = function () {
        img[0].src = "images/medium/painting2.jpg"
    };
    img[3].onclick = function () {
        img[0].src = "images/medium/painting3.jpg"
    };
    img[4].onclick = function () {
        img[0].src = "images/medium/painting4.jpg"
    };
    img[5].onclick = function () {
        img[0].src = "images/medium/painting5.jpg"
    }
