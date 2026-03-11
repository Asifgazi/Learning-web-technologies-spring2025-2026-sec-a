let cells = document.getElementsByClassName('cell');
let status = document.getElementById('status');
let reset = document.getElementById('reset');

let board = ["","","","","","","","",""];
let currentPlayer = "X";
let gameActive = true;

let winComb = [
    [0,1,2],
    [3,4,5],
    [6,7,8],
    [0,3,6],
    [1,4,7],
    [2,5,8],
    [0,4,8],
    [2,4,6]
];

for(let a=0; a<cells.length; a++){

    cells[a].addEventListener('click', function(){

        if(board[a] != "" || gameActive == false){
            return;
        }

        board[a] = currentPlayer;
        cells[a].innerHTML = currentPlayer;

        checkWinner();

        if(gameActive == true){

            if(currentPlayer == "X"){
                currentPlayer = "O";
            }else{
                currentPlayer = "X";
            }

            status.innerHTML = "Player " + currentPlayer + " Turn";
        }

    });

}

function checkWinner(){

    for(let a=0; a<winComb.length; a++){

        let p = winComb[a][0];
        let q = winComb[a][1];
        let r = winComb[a][2];

        if(board[p] != "" && board[p] == board[q] && board[q] == board[r]){

            gameActive = false;

            cells[p].classList.add('winner');
            cells[q].classList.add('winner');
            cells[r].classList.add('winner');

            status.innerHTML = "Player " + board[p] + " Wins!";
            return;
        }

    }

    let filled = true;

    for(let a=0; a<board.length; a++){
        if(board[a] == ""){
            filled = false;
        }
    }

    if(filled == true){
        status.innerHTML = "It's a draw!";
        gameActive = false;
    }

}

reset.addEventListener('click', function(){

    board = ["","","","","","","","",""];
    currentPlayer = "X";
    gameActive = true;

    for(let a=0; a<cells.length; a++){
        cells[a].innerHTML = "";
        cells[a].classList.remove('winner');
    }

    status.innerHTML = "Player X Turn";

});