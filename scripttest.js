
const xhr = new XMLHttpRequest();
xhr.addEventListener('load',()=>{
    const test = JSON.parse(xhr.response);
    var exp= test.int;
    var lvl = test.exp;
    
    document.querySelector('#wyswietl').innerHTML=`${lvl} ${exp}`;
});


xhr.open('GET', 'walka2.php', true);
xhr.send();





