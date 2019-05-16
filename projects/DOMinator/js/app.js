const inputs = document.querySelectorAll('input');
const page = document.getElementById("page");
let parent;

function CreateElement() {
    let element = document.createElement(inputs[0].value);
    for (let i = 1; i < inputs.length; i++) {
        let attribute = inputs[i].getAttribute('placeholder');
        let value = inputs[i].value;
        if (value) {
            element[attribute] = value;
        }
        if (attribute === "parent id" && value) {
            let div = document.getElementById(value);
            div.appendChild(element);
        } else {
            page.appendChild(element);
        }
    }
    parent = element.parentNode;
    console.log(element);
}

function RemoveElement() {
    let last_child = parent.lastChild;
    last_child.remove();
}

function reset() {
    for (let i = 0; i < inputs.length; i++) {
        inputs[i].value = "";
    }
}

function hideElement() {
    let wrap = document.getElementById("wrap");
    wrap.className = "d-none";
    let show_btn = document.createElement("span");
    show_btn.innerHTML = "Show Panel";
    show_btn.className = "btn btn-primary float-right mt-5";
    show_btn.setAttribute("onclick", "showElement()");
    page.appendChild(show_btn);
}

function showElement() {
    let wrap = document.getElementById("wrap");
    wrap.className = "d-block";
    let btn = document.getElementById("sBtn");
    let p_btn = btn.parentNode;
    p_btn.removeChild(btn);
}