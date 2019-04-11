document.addEventListener("DOMContentLoaded", function(event) {
var myVideo = videojs('my-video');
var dropdown = document.getElementById('videoSelector');
myVideo.src([
    {src: "1.mp4", type: "video/mp4"},
]);
dropdown.addEventListener("change", function() {
    var source = dropdown.selectedIndex;
    console.log(source)
    if (source == 0) {
        myVideo.src([
            {src: "1.mp4", type: "video/mp4"},
        ]);
    }
    else if (source == 1) {
        myVideo.src([
            {src: "2.mp4", type: "video/mp4"},
        ]);
    } else if (source == 2) {
        myVideo.src([
            {src: "3.mp4", type: "video/mp4"},
        ]);
    }
})
});