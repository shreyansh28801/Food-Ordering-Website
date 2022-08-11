setInterval(updateTime, 1000);
// setInterval(updateTime, 1000);
// setInterval(updateTime, 1000);

function updateTime() {
    time.innerHTML = new Date();
}
function toggleHide() {
    let btn = document.getElementById('btn');
    let para23 = document.getElementById('para21');
    if (para23.style.display == 'none') {
        let confr = confirm("Do you really want to see content indicated ?");
        if (confr) {
            para23.style.display = 'block';
            btn.style.background = 'red';
            para23.style.background = 'rgb(183, 255, 134)';
            let im2 = document.getElementById('im2');
            im2.style.backgroundImage; url(images_lab2 / objective2.jpg);
            // para23.style.background - image; url(images_lab2 / logo1.png);
        }
    }
    else {
        let confr = confirm("Do you really want to hide content indicated ?");
        if (para23.style.display != 'none') {

            para23.style.display = 'none';
            // btn.style.background='yellow';
            btn.style.color = 'black';


        }

    }
}

// function promptfunc() {
//     let name=prompt("if any difficulty is there in my website plz tell here ,dear customer", " ");   
    
// }

function myfunction() {
    let name = confirm('Hey user, is our application looks awesome w..r..t.. craetivity??',);    
}

// setTimeout(myfunc_food() => {
//     let name = confirm('Hey user, is our application looks awesome w..r..t.. craetivity??',),
//     if (name) {
//         alert('we are good to go');
//     } else {
//         alert('we will take a note of it');
//     }
    
// }, timeout);