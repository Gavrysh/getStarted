function createImage1() {
	var canvas = document.getElementById("lesson6_1");
	var ctx = canvas.getContext("2d");
		ctx.fillStyle = "rgb(0,0,0)";
        ctx.fillRect (10, 10, 130, 130);
		ctx.clearRect(20, 20, 110, 110);
}

function createImage2() {
	var canvas = document.getElementById("lesson6_2");
	var ctx = canvas.getContext("2d");
		ctx.fillStyle = "rgb(200,0,0)";
        ctx.fillRect (10, 10, 200, 50);
		ctx.fillStyle = "rgb(0,199,2)";
		ctx.fillRect (20, 20, 200, 50);
		ctx.fillStyle = "rgb(1,0,200)";
		ctx.fillRect (30, 30, 200, 50);
}

function createImage3() {
	var canvas = document.getElementById("lesson6_3");
	var ctx = canvas.getContext("2d");
		ctx.fillStyle = "rgb(0,200,0)";
        ctx.fillRect (10, 10, 25, 140);
		ctx.fillStyle = "rgb(1,0,200)";
		ctx.fillRect (10, 50, 25, 100);
		
		ctx.fillStyle = "rgb(0,200,0)";
        ctx.fillRect (50, 40, 25, 110);
		ctx.fillStyle = "rgb(1,0,200)";
		ctx.fillRect (50, 70, 25, 80);
		
		ctx.fillStyle = "rgb(0,200,0)";
        ctx.fillRect (90, 20, 25, 130);
		ctx.fillStyle = "rgb(1,0,200)";
		ctx.fillRect (90, 40, 25, 110);
}