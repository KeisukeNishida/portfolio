// function MoveCheck() {
//     if( confirm("本当に大丈夫ですか？") ) {
//         window.location.href = "http://localhost/Sazae.Battle.Game/sazae.code/sazae.battle.php";
//     }
//     else {
//         window.location.href ="http://localhost/Sazae.Battle.Game/sazae.code/sazae.index.php";
//     }
// }


function MoveCheck() {
var result = confirm('本当にその手で大丈夫ですか？');

    if(result) {
        window.location.href = "http://localhost/Sazae.Battle.Game/sazae.code/sazae.battle.php";
    }
    else {
        window.location.href ="http://localhost/Sazae.Battle.Game/sazae.code/sazae.index.php";
    }
}
