var pizza = document.getElementById("pizza"), foods = document.getElementById("foods");

window.addEventListener("scroll", function() {
    pizza.style.transform = "translateY(" + (window.pageYOffset*1.1 - window.pageYOffset + "px");
    foods.style.transform = "translateY(" + (window.pageYOffset*1.1 - window.pageYOffset -200 + "px");
});

;(function() {
    var throttle = function(type, name, obj) {
        var obj = obj || window;
        var running = false;
        var func = function() {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function() {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };
    throttle ("scroll", "optimizedScroll");
})();