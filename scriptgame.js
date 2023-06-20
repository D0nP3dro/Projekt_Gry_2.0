const xhr = new XMLHttpRequest();
xhr.addEventListener('load', ()=>{
    const start = JSON.parse(xhr.response);
    var nazwa = start.nazwa;
    var lvl = start.lvl;
    var exp = start.exp;
    var klasa = start.klasa;
    var hp = start.hp;
    var sila = start.sila;
    var sa = start.sa;
    var int = start.int;


    document.querySelector('#postac').innerHTML=`<br>
    Nick: ${nazwa}<br>
    Poziom: ${lvl}<br>
    Exp: ${exp}<br>
    Klasa: ${klasa}<br>
    Zdrowie: ${hp}<br>
    Sila: ${sila}<br>
    SA: ${sa}<br>
    Intelekt: ${int}<br>
    
    

    `


});
xhr.open('GET', 'start.php', true);
xhr.send();

document.querySelector('#exp').addEventListener('click', ()=>{
    document.querySelector('#main').style.float='none';
    document.querySelector('#main').innerHTML=`
    <h1>Expowiska</h1>
    <div id="displayexp">
    <div id="lvl1">
    <h4>Lvl 1-2</h4>
    <br>
    <a onclick='expowisko1();'>
    <img src="./img/lvl1.bmp">
</a>
</div>
                <div id="lvl2">
        <h4>Lvl 3-6</h4>
            <br>
            <button id="exp2">
            <img src="./img/lvl2.bmp">
            </button>
</a>
        </div>
        <div id="lvl3">
        <h4>Lvl 6-9</h4>
            <br>
            <button id="exp3">
            <img src="./img/lvl3.bmp">
            </button>
</a>
        </div>
        <div id="lvl4">
        <h4>Lvl 10-15</h4>
            <br>
            <button id="exp4">
            <img src="./img/lvl4.bmp">
            </button>
</a>
        </div>
        <div id="lvl5">
        <h4>Lvl 16-22</h4>
            <br>
            <button id="exp5">
            <img src="./img/lvl5.bmp">
            </button>
</a>
        </div>
        <div id="lvl6">
        <h4>BOSS 25Lvl</h4>
            <br>
            <button id="exp6">
            <img src="./img/lvl6.bmp">
            </button>
</a>
</div>
    </div>
<br><br>
<a href='gamenew.php'>Wróc</a>

    </div>


    
    `;





});

function expowisko1(){

    document.querySelector('#main').innerHTML='Siema';

}
