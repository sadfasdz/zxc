// модальное окно
var modal = document.querySelector("#myModal");

// открывает модальное окно
var btn = document.querySelector("#btn-open");

//  закрывает модальное окно
var span = document.querySelector("#close");

// Когда пользователь нажимает на кнопку, откройте модальный
btn.onclick = function () {
    modal.style.display = "block";
}

// Когда пользователь нажимает на <span> (x), закройте модальное окно
span.onclick = function () {
    modal.style.display = "none";
}

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
window.onclick = function (event) {
    if (event.target == modal-content) {
        modal.style.display = "none";
    }
}





//update//
//

// Get the modal
var modalU = document.querySelectorAll(".modalUp");
var modalA = document.querySelectorAll(".modalAb");



// Get the button that opens the modal
var openModal = document.querySelectorAll(".open-modal");
var openModalA = document.querySelectorAll(".btnAb");



// Get the <span> element that closes the modal
var closeModal = document.querySelectorAll(".modal__close");
var closeModalA = document.querySelectorAll(".closeAb");



// var openModal2 = document.getElementsByClassName("");
// When the user clicks the button, open the modal
function setDataIndexUp() {
    for (let i = 0; i < openModal.length; i++) {
        openModal[i].setAttribute('data-index', i);
        modalU[i].setAttribute('data-index', i);
        closeModal[i].setAttribute('data-index', i);
    }
    for (let y = 0; y < openModalA.length; y++) {
        openModalA[y].setAttribute('data-index', y);
        modalA[y].setAttribute('data-index', y);
        closeModalA[y].setAttribute('data-index', y);
    }


}

for (let i = 0; i < openModal.length; i++) {
    openModal[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalU[ElementIndex].style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    closeModal[i].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalU[ElementIndex].style.display = "none";
    };

}
for (let y = 0; y < openModalA.length; y++) {
    openModalA[y].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalA[ElementIndex].style.display = "block";
    };
    closeModalA[y].onclick = function() {
        var ElementIndex = this.getAttribute('data-index');
        modalA[ElementIndex].style.display = "none";
    };

}
window.onload = function() {
    setDataIndexUp();
};

window.onclick = function(event) {
    if (event.target === modalU[event.target.getAttribute('data-index')]) {
        modalU[event.target.getAttribute('data-index')].style.display = "none";
    }
};
window.onclick = function(event) {
    if (event.target === modalA[event.target.getAttribute('data-index')]) {
        modalA[event.target.getAttribute('data-index')].style.display = "none";
    }
};
//

// //abon//

// var modalA = document.getElementsByClassName("modalAb");
//
// // Get the button that opens the modal
// var openModalA = document.getElementsByClassName("btnAb");
//
// // Get the <span> element that closes the modal
// var closeModalA = document.getElementsByClassName("closeAb");
//
// // When the user clicks the button, open the modal
// function setDataIndexA() {
//     for (let y = 0; y < openModalA.length; y++) {
//         openModalA[y].setAttribute('data-index', y);
//         modalA[y].setAttribute('data-index', y);
//         closeModalA[y].setAttribute('data-index', y);
//     }
// }
//
// for (let y = 0; y < openModalA.length; y++) {
//     openModalA[y].onclick = function() {
//         var ElementIndexA = this.getAttribute('data-index');
//         modalA[ElementIndexA].style.display = "block";
//     };
//
//     // When the user clicks on <span> (x), close the modal
//     closeModalA[y].onclick = function() {
//         var ElementIndexA = this.getAttribute('data-index');
//         modalA[ElementIndexA].style.display = "none";
//     };
//
// }
//
// window.onload = function() {
//     setDataIndexA();
// };
//
// window.onclick = function(event1) {
//     if (event1.target === modalA[event1.target.getAttribute('data-index')]) {
//         modalA[event1.target.getAttribute('data-index')].style.display = "none";
//     }
// };



// Получить модальный
let modalpass = document.querySelector("#Modalpass");

// Получить кнопку, которая открывает модальный
let repass = document.querySelector("#repass");

// Получить элемент <span>, который закрывает модальный
let spanC = document.querySelector("#closeP");

// Когда пользователь нажимает на кнопку, откройте модальный
repass.onclick = function() {
    modalpass.style.display = "block";
}

// Когда пользователь нажимает на <span> (x), закройте модальное окно
spanC.onclick = function() {
    modalpass.style.display = "none";
}

// Когда пользователь щелкает в любом месте за пределами модального, закройте его
window.onclick = function (event) {
    if (event.target === modalpass) {
        modalpass.style.display = "none";
    }
}


var captcha = document.querySelector("#captcha");
if(modal.style.display = "none"){
    captcha = '';
}