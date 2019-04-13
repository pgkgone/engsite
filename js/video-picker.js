document.addEventListener("DOMContentLoaded", function(event) {
var myVideo = videojs('my-video');
var dropdown = document.getElementById('videoSelector');
var paterV=document.getElementsByClassName('main-text-only-one')[0].id;
var titleV =  parseInt(paterV/10);
var partV =paterV%10;

myVideo.src([{src:"video/"+titleV+"/part_"+(partV+1)+"/1.mp4", type: "video/mp4"},]);

if(partV==0){
    var buttonss=document.getElementsByClassName('picker');
        for (i = 0; i < buttonss.length; i++) {
            buttonss[i].addEventListener("click", function() {
                console.log(i);
            });
        }
}

});