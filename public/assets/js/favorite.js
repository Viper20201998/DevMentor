// JavaScript para manejar la solicitud Fetch
const favoritiesForms = document.querySelectorAll(".favorities-form");
const alertcont = document.querySelector(".alertcont");
const aler = document.createElement("div");
aler.setAttribute("role", "alert");
favoritiesForms.forEach(function(form) {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        console.log(e.target);

        // Obtener los datos del formulario
        const formData = new FormData(form);
        console.log(formData);

        // Realizar la solicitud POST con Fetch API
        fetch(form.action, {
            method: "POST",
            body: formData,
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}", // Agrega el token CSRF de Laravel
            },
        })
            .then(function(response) {
                if (!response.ok) {
                    throw new Error("Error en la solicitud.");
                }
                return response.json(); // Analizar la respuesta JSON si es necesario
            })
            .then(function(data) {
                // Manejar la respuesta exitosa aquí
                console.log("Respuesta del servidor:", data.stat);
                if (data.stat != 200) {
                    aler.className = "alert alert-danger";
                    aler.textContent = data.detail;
                    alertcont.appendChild(aler);


                } else {
                    aler.className = "alert alert-success";
                    aler.textContent = data.detail;
                    alertcont.appendChild(aler);

                }
                setTimeout(function() {
                    alertcont.removeChild(aler)
                }, 5000);

            })
            .catch(function(error) {
                // Manejar errores aquí
                console.error("Error al enviar los datos:", error);
            });
    });
});
