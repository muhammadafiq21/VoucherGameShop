var send = localStorage.getItem("myValue");
console.log(send);
showingGame(send);
var resetValue="";
localStorage.setItem("myValue", resetValue);

function showingGame(blind){
    fetch('./games.json')
    .then((respone)=> respone.json())
    .then((games) => {
        let queue = games.packGame;
        console.log(queue);
        let moneyIngame;
        let head;
        let voc = document.getElementById('voucher-game');

        // Searching Game
        for(let i=0; i < queue.length; i++){
            if(blind == queue[i].nama){
                moneyIngame = queue[i].voucher;
                head = i;
            }
            else{
                console.log("Searching Game Gagal"); 
            }
        }

        console.log("showingGame Terpanggil");
        //Terujunan HTML atribut
        let leftHead = document.getElementById("nama-game");
        leftHead.innerHTML = queue[head].nama;
        
        let leftFoot = document.getElementById("desk-game");
        leftFoot.innerHTML = queue[head].deskripsi;

        //Menampilkan Voucher Pilihan
        voc.innerHTML ="";
        for(let q=0; q < moneyIngame.length; q++){
            voc.innerHTML += `<div class="card-voc">
                                <label>
                                    <input class="opsi" type="radio" name="opsi">
                                    <span class="opsi-sider"> <span>${moneyIngame[q]}</span> <span>${queue[head].eyemoney}</span> </span>
                                </label>
                            </div>`;
        }

        
    })
}