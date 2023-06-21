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
            <a onclick='expowisko2();'>
            <img src="./img/lvl2.bmp">

</a>
        </div>
        <div id="lvl3">
        <h4>Lvl 6-9</h4>
            <br>
            <a onclick='expowisko3();'>
            <img src="./img/lvl3.bmp">

</a>
        </div>
        <div id="lvl4">
        <h4>Lvl 10-15</h4>
            <br>
            <a onclick='expowisko4();'>
            <img src="./img/lvl4.bmp">

</a>
        </div>
        <div id="lvl5">
        <h4>Lvl 16-22</h4>
            <br>
            <a onclick='expowisko5();'>
            <img src="./img/lvl5.bmp">

</a>
        </div>
        <div id="lvl6">
        <h4>BOSS 25Lvl</h4>
            <br>
            <a onclick='expowisko6();'>
            <img src="./img/lvl6.bmp">

</a>
</div>
    </div>
<br><br>
<a href='gamenew.php'>Wróc</a>

    </div>


    
    `;





});

//EXPOWISKA

function expowisko1(){


    const expowisko0 = new XMLHttpRequest();
    expowisko0.addEventListener('load', ()=>{
    const exp1 = JSON.parse(expowisko0.response);
    var nazwapotwora = exp1.nazwapott;
    document.querySelector('#main').innerHTML=`${nazwapotwora}`;

    });
    expowisko0.open('GET', `expowisko.php`, true);
    expowisko0.send();
    

}

function expowisko2(){


    const expowisko1 = new XMLHttpRequest();
    expowisko1.addEventListener('load', ()=>{
    const exp2 = JSON.parse(expowisko1.response);
    var nazwapotwora = exp2.nazwapott;
    document.querySelector('#main').innerHTML=`${nazwapotwora}`;

    });
    expowisko1.open('GET', `expowisko2.php`, true);
    expowisko1.send();
    

}

function expowisko3(){


    const expowisko2 = new XMLHttpRequest();
    expowisko2.addEventListener('load', ()=>{
    const exp3 = JSON.parse(expowisko2.response);
    var nazwapotwora = exp3.nazwapott;
    document.querySelector('#main').innerHTML=`${nazwapotwora}`;

    });
    expowisko2.open('GET', `expowisko3.php`, true);
    expowisko2.send();
    

}

function expowisko4(){


    const expowisko3 = new XMLHttpRequest();
    expowisko4.addEventListener('load', ()=>{
    const exp4 = JSON.parse(expowisko3.response);
    var nazwapotwora = exp4.nazwapott;
    document.querySelector('#main').innerHTML=`${nazwapotwora}`;

    });
    expowisko3.open('GET', `expowisko4.php`, true);
    expowisko3.send();
    

}

function expowisko5(){


    const expowisko4 = new XMLHttpRequest();
    expowisko4.addEventListener('load', ()=>{
    const exp5 = JSON.parse(expowisko4.response);
    var nazwapotwora = exp5.nazwapott;
    document.querySelector('#main').innerHTML=`${nazwapotwora}`;

    });
    expowisko4.open('GET', `expowisko5.php`, true);
    expowisko4.send();
    

}
function expowisko6(){


    const expowisko5 = new XMLHttpRequest();
    expowisko5.addEventListener('load', ()=>{
    const exp6 = JSON.parse(expowisko5.response);
    var nazwapotwora = exp6.nazwapott;
    document.querySelector('#main').innerHTML=`${nazwapotwora}`;

    });
    expowisko5.open('GET', `expowisko6.php`, true);
    expowisko5.send();
    

}