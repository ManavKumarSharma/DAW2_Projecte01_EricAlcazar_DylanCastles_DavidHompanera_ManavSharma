const botonMesas = document.querySelectorAll('.mesa');

botonMesas.forEach(function (botonMesas) {
    if (botonMesas) {
        botonMesas.addEventListener('click', function () {
    
            let elementoPadre = document.getElementById("contenedorMesas");
    
            elementoPadre.style.display = "flex";      


            alert(botonMesas.id)  
        });
    }
});


