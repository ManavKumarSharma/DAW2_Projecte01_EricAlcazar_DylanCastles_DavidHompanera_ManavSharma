const botonMesas = document.querySelectorAll('.mesa');

botonMesas.forEach(function (botonMesas) {
    if (botonMesas) {
        botonMesas.addEventListener('click', function () {    
            window.location.href = `../view/mesas.php?id=${botonMesas.id}`;
        });
    }
});


