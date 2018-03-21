var myGamePiece;
var myObstacleCassable;
var myObstacle;

function startGame() {
    myGamePiece = new component(50, 50, '../medias/lolo.jpg', 0, 0, "image");
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


var coinImage = new Image();
coinImage.src = "../medias/spriteBomber.png";

var lastTime;
function spriteBomb (widthSprite, heightSprite, source, x, y) {
    this.widthSprite = widthSprite;
    this.heightSprite = heightSprite;
    this.x = x;
    this.y = y;
    var now = Date.now();
    var dt = (now - lastTime)/1000;


}


//Permet d'actualiser la map pour le déplacement du personnage
function updateGameArea() {
    myGameArea.clear();
    myGamePiece.speedX = 0;
    myGamePiece.speedY = 0;
    if (myGameArea.key && myGameArea.key == 81) {myGamePiece.speedX = -10; }
    if (myGameArea.key && myGameArea.key == 68) {myGamePiece.speedX = 10; }
    if (myGameArea.key && myGameArea.key == 90) {myGamePiece.speedY = -10; }
    if (myGameArea.key && myGameArea.key == 83) {myGamePiece.speedY = 10; }
    if (myGameArea.key && myGameArea.key == 32) {myGamePiece = new component(50,50,); }
    myGamePiece.newPos();
    myGamePiece.update();
}
