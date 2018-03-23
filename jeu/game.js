var myGamePiece;
var myObstacleCassable;
var myObstacle;
var myObstacle1;
var myObstacle2;
var myObstacle3;

function startGame() {
    myGamePiece = new component(50, 50, '../medias/lolo.jpg', 0, 0, "image");
    //tant qu'on est pas a la hauteur max - 50
    for (y = 0; y < 600; y++){

        if (y % 100 == 0 || y % 100 == 50){

            //pour chaque colonne
            for (x = 0; x < 1200; x++){
                //Si on est sur la premier ligne ou la premiere colonne
                if(y == 0 || y == 600){
                    //Si on est entre la 3eme et la 23 eme colonne
                    if (x >= 150 && x <= 1100 && (x % 100 == 0 || x % 100 == 50)){
                        myObstacle1 = new componentObstacle(50,50,"grey",x,y);
                    }
                }
                //Si on est sur la premiere ou la derniere colonne
               if(x == 0 || x == 1200){
                    if(y >= 150 && y <= 550){
                        myObstacle = new componentObstacle(50,50,"grey",x,y);
                    }
               }
               //Si on est sur le reste de la fenetre
               if(y > 0 && y < 600){
                    if(x % 100 == 50){
                        myObstacle3 = new componentObstacle(50,50,"black",x,y);
                    }
                    if (x % 100 == 0) {
                        myObstacle3 = new componentObstacle(50,50,"grey",x,y);
                    }
               }
               x++;
            }
        }
        y++;
    }
    myGameArea.start();

}

//Permet de créer notre fenêtre de jeu
var myGameArea = {
    canvas : document.createElement("canvas"),
    start : function() {
        this.canvas.width = 1250;
        this.canvas.height = 650;
        this.context = this.canvas.getContext("2d");
        document.body.insertBefore(this.canvas, document.body.childNodes[0]);
        this.interval = setInterval(updateGameArea, 20);
        window.addEventListener('keydown', function (e) {
            myGameArea.key = e.keyCode;
        })
        window.addEventListener('keyup', function (e) {
            myGameArea.key = false;
        })
    },
    clear : function(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

//Permet de créer notre image de personnage
function component(width, height, adress, x, y, type) {
    this.type = type;
    if (type == "image") {
        this.image = new Image();
        this.image.src = adress;
    }
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;
    this.update = function() {
        ctx = myGameArea.context;
        if (type == "image") {
            ctx.drawImage(this.image,
                this.x,
                this.y,
                this.width, this.height);
        } else {
            ctx.fillStyle = adress;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    }

    this.newPos = function() {
        this.x += this.speedX;
        this.y += this.speedY;
        this.hitBottom();
        this.hitTop();
        this.hitRight();
        this.hitLeft();
    }

    //Permet de gérer pour pas que notre personnage sorte de la fenêtre
    this.hitBottom = function() {
        var rockbottom = myGameArea.canvas.height - this.height;
        if (this.y > rockbottom) {
            this.y = rockbottom;
        }
    }
    this.hitTop = function() {
        var rockTop = 0;
        if (this.y < rockTop){
            this.y = rockTop;
        }
    }
    this.hitRight = function () {
        var rockRight = myGameArea.canvas.width - this.width;
        if (this.x > rockRight){
            this.x = rockRight;
        }
    }
    this.hitLeft = function () {
        var rockLeft = 0;
        if (this.x < rockLeft){
            this.x = rockLeft;
        }
    }

}

//Fonction qui permet de créer les obstacles
function componentObstacle(width, height, color, x, y) {
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = 0;
    this.x = x;
    this.y = y;
    this.update = function() {
        ctx = myGameArea.context;
        ctx.fillStyle = color;
        ctx.fillRect(this.x, this.y, this.width, this.height);
    }
    this.crashWith = function(otherobj) {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = otherobj.x;
        var otherright = otherobj.x + (otherobj.width);
        var othertop = otherobj.y;
        var otherbottom = otherobj.y + (otherobj.height);
        var crash = true;
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
            crash = false;
        }
        return crash;
    }
}


// var coinImage = new Image();
// coinImage.src = "../medias/spriteBomber.png";
//
// var lastTime;
// function spriteBomb (widthSprite, heightSprite, source, x, y) {
//     this.widthSprite = widthSprite;
//     this.heightSprite = heightSprite;
//     this.x = x;
//     this.y = y;
//     var now = Date.now();
//     var dt = (now - lastTime)/1000;
//
//
// }


//Permet d'actualiser la map pour le déplacement du personnage
function updateGameArea() {
        myGameArea.clear();
        myObstacle.update();
        myGamePiece.speedX = 0;
        myGamePiece.speedY = 0;
        if (myGameArea.key && myGameArea.key == 81) {myGamePiece.speedX = -10; }
        if (myGameArea.key && myGameArea.key == 68) {myGamePiece.speedX = 10; }
        if (myGameArea.key && myGameArea.key == 90) {myGamePiece.speedY = -10; }
        if (myGameArea.key && myGameArea.key == 83) {myGamePiece.speedY = 10; }
        myGamePiece.update();
        myGamePiece.newPos();
}
