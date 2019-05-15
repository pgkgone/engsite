function atomDraw(){
$("#atom").load("svgs/atom.html", function() {
	anime({
		targets: '.atomthis',
		scale: [0.5, 1],
		top: ["0vh", "20vh"],
	});
	anime({
		targets: '#atom',
		top: ["0vh", "20vh"],
	});
	

});
}