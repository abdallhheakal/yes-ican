var linkSign = document.getElementById("linkSign"),
    sign = document.getElementById("sign"),
    linkMath = document.getElementById("linkMath"),
    math = document.getElementById("math"),
    input   = document.getElementById("input"),
    clear   = document.getElementById("clear"),
    del     = document.getElementById("delete"),
    buttons = document.getElementsByClassName("button"),
    equal   = document.getElementById("equal"),
    button  = document.getElementsByClassName("button1"),
    div     = document.getElementsByClassName("div"),
    i;
//show and hidden of ids
linkMath.onclick = function (){
    "use strict";
    math.style.display = "block";
    sign.style.display = "none";
}
linkSign.onclick = function () {
    "use strict";
    sign.style.display = "block";
    math.style.display = "none";
}
//to prss inputs in calculator
for (i = 0; i < buttons.length; i = i + 1) {
    buttons[i].onclick = function () {
        "use strict";
        input.value += this.value;
    };
}
//to clear in calculator
clear.onclick = function () {
    "use strict";
    input.value = " ";
};
//to delete input in calculator
del.onclick = function () {
    "use strict";
    input.value = input.value.substring(0, input.value.length - 1);
};
//to show result in calculator
equal.onclick = function () {
    "use strict";
    input.value = eval(input.value);
};
//show and hidden elements after buttons
for (i = 0; i < button.length; i = i + 1) {
    button[i].onclick = function () {
        "use strict";
        if (this.nextElementSibling.style.display === "none") {
            this.nextElementSibling.style.display = "block";       
        } else {
           this.nextElementSibling.style.display = "none";
        }
    };
}