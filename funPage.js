var rows=3;
var cols=3;
//refrence tiles
var curTile;
var otherTile;// blank tile

var turns=0;
//array of images names

var imgOrder=["3","1","7","4","0","5","6","8","2"];

//put images on puzzle board
window.onload=function(){
    for(let r=0; r<rows;r++){
        for(let c=0;c<cols;c++){
            //keeps track of image location in puzzle
            let tile = document.createElement("img");
            tile.id=r.toString()+"-"+ c.toString();
            tile.src = imgOrder.shift()+ ".png";
            //drag and drop
            tile.addEventListener("dragstart", dragStart); //holding image to drag
            tile.addEventListener("dragover", dragOver);//moving image
            tile.addEventListener("drageneter",dragEnter);//dragged image to another image
            tile.addEventListener("dragleave", dragLeave);//drag image to leave
            tile.addEventListener("drop", dragDrop);//dropping image
            tile.addEventListener("dragend", dragEnd);//ending drag

            document.getElementById("board").append(tile);
        }

    }
}

function dragStart(){
    curTile= this;//tile being dragged
}
function dragOver(e){
    e.preventDefault();

}
function dragEnter(e){
    e.preventDefault();

}
function dragLeave(){

}
function dragDrop(){
    otherTile= this; //tile dropped on
}

function dragEnd(){
    if(!otherTile.src.includes("2.png")){
        return;
    }

    let currCoords = curTile.id.split("-");
    let r= parseInt(currCoords[0]);
    let c= parseInt(currCoords[1]);
    
    let otherCoords= otherTile.id.split("-");
    let r2= parseInt(otherCoords[0]);
    let c2 = parseInt(otherCoords[1]);

    let moveLeft= r == r2 && c2== c-1;
    let moveRight= r == r2 && c2== c+1;

    let moveUp= c==c2 && r2==r-1;
    let moveDown= c==c2 && r2==r+1;

    let isAdjacent= moveLeft || moveRight ||moveUp|| moveDown;



if (isAdjacent){
    let curImg= curTile.src;
    let otherImg=otherTile.src;

    curTile.src= otherImg;
    otherTile.src= curImg;

    turns+=1
    document.getElementById("turns").innerText= turns;

    }
}




