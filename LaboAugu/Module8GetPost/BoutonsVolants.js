window.onload=init;
//move et move all ETAPE 5 je crois 
var nb1,nb2;
var score=0;
function init(){
	//alert("Coucou");
	
	nb1=Math.floor((Math.random() * 9) + 2);
	nb2=Math.floor((Math.random() * 9) + 2);
	document.getElementById("firstPara").innerHTML= "Que vaut "+nb1+" * "+nb2+" ?";
	new FlyingButton(nb1*nb2,function(){clic(nb1*nb2);});
	new FlyingButton(nb1+nb2,function(){clic(nb1+nb2);});
	new FlyingButton(nb1*nb2+2,function(){clic(nb1*nb2+2);});
	new FlyingButton(nb1*nb2+6,function(){clic(nb1*nb2+6);});
	FlyingButton.startMove();
	}

function clic(nbR){
if(nb1*nb2==nbR){score++;document.getElementById("score").innerHTML=score;document.getElementById("mainDiv").innerHTML="";init();}else{
location.href="verification.php?nb1="+nb1+"&nb2="+nb2+"&nbR="+nbR;}
}

function FlyingButton(txt,fct){
	console.log(txt);
	var btn = document.createElement("BUTTON");
	console.log(btn);
	btn.className="flyingButton";
	btn.innerHTML=txt;
	btn.onclick=fct;
	document.getElementById("mainDiv").appendChild(btn);;
	this.elem=btn;
	console.log(btn);
	console.log(this.elem);
	this.posX = Math.floor(Math.random() * 540);
	this.posY = Math.floor(Math.random() * 370);
	this.xSpeed = Math.floor((Math.random() * 2) - 1);
	this.ySpeed = Math.floor((Math.random() * 2) - 1);
	btn.style.top=this.posY+"px";
	btn.style.left=this.posX+"px";
	console.log(this.posX+" "+this.posY+" "+this.xSpeed+" "+this.ySpeed);
	FlyingButton.buttons.push(this);
	console.log(this);
	
	//return this;
}
FlyingButton.buttons=[];
function hey(){
	console.log("hey");
}
FlyingButton.moveAll= function(){
	var i = 0;
	while(i<FlyingButton.buttons.length){FlyingButton.buttons[i].move();i++;}
}
FlyingButton.startMove=function(){
	var t=setInterval(FlyingButton.moveAll,30);
}
FlyingButton.prototype.setPosition= function(x,y){
		this.posX=x;
		this.posY=y;
		this.elem.style.left=x+"px";
		this.elem.style.top=y+"px";
	}
FlyingButton.prototype.move = function(){
		//console.log("move");
		if(this.posX+this.xSpeed<0||this.posX+this.xSpeed>540){
			this.xSpeed= this.xSpeed*(-1);
		}
		if(this.posY+this.ySpeed<0||this.posY+this.ySpeed>370){
			this.ySpeed= this.ySpeed*(-1);
		}
		//console.log(this.xSpeed+":"+this.ySpeed);
		this.setPosition(this.posX+this.xSpeed,this.posY+this.ySpeed);
	}