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
                                    <input class="opsi" type="radio" name="opsi" onclick = "showingPrice(${q}, ${head})">
                                    <span class="opsi-sider"> <span>${moneyIngame[q]}</span> <span>${queue[head].eyemoney}</span> </span>
                                </label>
                            </div>`;
        }

        
    })
}

function showingPrice(priceIndex, gameIndex){
    fetch('./games.json')
    .then((respone)=> respone.json())
    .then((games) => {
        let queue = games.packGame;
        let price_tag_gopay = document.getElementById("harga-game-gopay");
        let price_tag_ovo = document.getElementById("harga-game-ovo");
        let price_tag_dana = document.getElementById("harga-game-dana");

        let price_array = queue[gameIndex].harga;
        console.log(gameIndex);
        console.log(price_array);

        //lempar ke html
        price_tag_gopay.innerHTML = "";
        price_tag_gopay.innerHTML += numberComa(price_array[priceIndex]);

        price_tag_ovo.innerHTML = "";
        price_tag_ovo.innerHTML += numberComa(price_array[priceIndex]);

        price_tag_dana.innerHTML = "";
        price_tag_dana.innerHTML += numberComa(price_array[priceIndex]);
    })
}

function numberComa(slay){
   return slay.toLocaleString();
}