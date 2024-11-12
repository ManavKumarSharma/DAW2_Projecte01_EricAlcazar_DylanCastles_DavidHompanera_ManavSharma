const modal = document.getElementById("mesaModal");
        const span = document.getElementsByClassName("close")[0];
        let selectedMesaId = null;

        function openModal(mesa) {
            selectedMesaId = mesa.getAttribute("data-mesa-id");
            document.getElementById("mesaId").innerText = selectedMesaId;
            document.getElementById("mesa_id").value = selectedMesaId;
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        const mesas = document.querySelectorAll('.mesa');
        mesas.forEach(mesa => {
            mesa.addEventListener('click', function() {
                openModal(mesa);
            });
        });