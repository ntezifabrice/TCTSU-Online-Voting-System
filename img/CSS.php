<STYLE>
.wrap {
	perspective: 800px;
	perspective-origin: 50% 100px;
	
}
.cube {
	position: relative;
	width: 200px;
	transform-style: preserve-3d;
}
.cube div {
	position: absolute;
	width: 200px;
	height: 200px;
}
.back {
	transform: translateZ(-100px) rotateY(180deg);
}
.right {
	transform: rotateY(-270deg) translateX(100px);
	transform-origin: top right;
}
.left {
	transform: rotateY(270deg) translateX(-100px);
	transform-origin: center left;
}
.top {
	transform: rotateX(-90deg) translateY(-100px);
	transform-origin: top center;
}
.bottom {
	transform: rotateX(90deg) translateY(100px);
	transform-origin: bottom center;
}
.front {
	transform: translateZ(100px);
}
@keyframes spin {
	from { transform: rotateY(0); }
	to { transform: rotateY(360deg); }
}

.cube {
	animation: spin 30s infinite linear;
}
@keyframes spin-vertical {
	from { transform: rotateX(0); }
	to { transform: rotateX(-360deg); }
}

.cube-wrap.vertical .cube {
	margin: 0 auto; /* keeps the cube centered */

	transform-origin: 0 100px;
	animation: spin-vertical 5s infinite linear;
}

.cube-wrap.vertical .top {
	transform: rotateX(-270deg) translateY(-100px);
}

.cube-wrap.vertical .back {
	transform: translateZ(-100px) rotateX(180deg);
}

.cube-wrap.vertical .bottom {
	transform: rotateX(-90deg) translateY(100px);
}
.wrap {
	/* no more perspective */
	perspective: none;
	perspective-origin: 0 0;
}
</STYLE>
<table width="100%"><tr><td>
<div style="margin: 3% 10% 0 10%;clear:right">
<div align=right class="wrap">
	<div class="cube">
		<div class="front"><IMG SRC='./logo.png' width='100%' height='100%'></div>
		<div class="back"><IMG SRC='./tctlogo.gif' width='100%' height='100%'></div>
		<div class="top"><IMG SRC='./tctsu.png' width='100%' height='100%'></div>
		<div class="bottom"><IMG SRC='./IMG1.jpg' width='100%' height='100%'></div>
		<div class="left"><IMG SRC='./IMG2.jpg' width='100%' height='100%'></div>
		<div class="right"><IMG SRC='./tctsu.png' width='100%' height='100%'></div>
	</div>
</div>
<div align=left class="wrap">
	<div class="cube">
		<div class="front"><IMG SRC='./logo.png' width='100%' height='100%'></div>
		<div class="back"><IMG SRC='./tctlogo.gif' width='100%' height='100%'></div>
		<div class="top"><IMG SRC='./tctsu.png' width='100%' height='100%'></div>
		<div class="bottom"><IMG SRC='./IMG1.jpg' width='100%' height='100%'></div>
		<div class="left"><IMG SRC='./IMG2.jpg' width='100%' height='100%'></div>
		<div class="right"><IMG SRC='./tctsu.png' width='100%' height='100%'></div>
	</div>
</div>
<div align=center class="wrap">
	<div class="cube">
		<div class="front"><IMG SRC='./logo.png' width='100%' height='100%'></div>
		<div class="back"><IMG SRC='./tctlogo.gif' width='100%' height='100%'></div>
		<div class="top"><IMG SRC='./tctsu.png' width='100%' height='100%'></div>
		<div class="bottom"><IMG SRC='./IMG1.jpg' width='100%' height='100%'></div>
		<div class="left"><IMG SRC='./IMG2.jpg' width='100%' height='100%'></div>
		<div class="right"><IMG SRC='./tctsu.png' width='100%' height='100%'></div>
	</div>
</div></div></td></tr></table><img src='./logo.png' width='50px' height='25px' alt='Vote'>