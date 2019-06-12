window.onload=function () {
    changepic();
    fadein();
    fadeout();
    document.getElementById('figcaption').style.webkitTransitionDuration='1s';
}

function changepic() {
    document.getElementById('1').onclick=function () {
        document.getElementById('big-pic').src="images/medium/5855774224.jpg";
        document.getElementById('figcaption').innerHTML="Battle";
        document.getElementById('big-pic').title="Battle";
    }
    document.getElementById('2').onclick=function () {
        document.getElementById('big-pic').src="images/medium/5856697109.jpg";
        document.getElementById('figcaption').innerHTML="Luneburg";
        document.getElementById('big-pic').title="Luneburg";
    }
    document.getElementById('3').onclick=function () {
        document.getElementById('big-pic').src="images/medium/6119130918.jpg";
        document.getElementById('figcaption').innerHTML="Bermuda";
        document.getElementById('big-pic').title="Bermuda";
    }
    document.getElementById('4').onclick=function () {
        document.getElementById('big-pic').src="images/medium/8711645510.jpg";
        document.getElementById('figcaption').innerHTML="Athens";
        document.getElementById('big-pic').title="Athens";
    }
    document.getElementById('5').onclick=function () {
        document.getElementById('big-pic').src="images/medium/9504449928.jpg";
        document.getElementById('figcaption').innerHTML="Florence";
        document.getElementById('big-pic').title="Florence";
    }
}

function fadein() {
    document.getElementById('big-pic').onmouseenter=function () {
        document.getElementById('figcaption').style.opacity=0.8;
    }
}

function fadeout() {
    document.getElementById('big-pic').onmouseout=function () {
        document.getElementById('figcaption').style.opacity=0;
    }

}






