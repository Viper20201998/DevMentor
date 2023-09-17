const editForms = document.querySelectorAll(".edit-posts");
const updateForm = document.getElementById("update_form");
const inpTitle = document.getElementById("title");
const inpImg = document.getElementById("img_prev");
const inpContent = document.getElementById("content");
const btn2 = document.getElementById("sendupdate_form")
editForms.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        console.log(e.target);
        // Obtener los datos del formulario
        const formData = new FormData(form);
        console.log(formData);

        // Realizar la solicitud POST con Fetch API
        fetch(form.action, {
            method: "GET",
        })
            .then(function(response) {
                if (!response.ok) {
                    throw new Error("Error en la solicitud.");
                }
                return response.json(); // Analizar la respuesta JSON si es necesario
            })
            .then(function(data) {
                // Manejar la respuesta exitosa aquí
                console.log("Respuesta del servidor:", data);
                inpTitle.value = data.title;
                inpImg.value = data.img;
                inpContent.value = data.content;
                updateForm.action = `http://${window.location.host}/update/${data.id}`
            })
            .catch(function(error) {
                // Manejar errores aquí
                console.error("Error al enviar los datos:", error);
            });
    });
});

btn2.addEventListener('click', (e) => {
    const formData = new FormData(updateForm);
    console.log(formData)
    console.log(updateForm)
    update(formData)
})

function update(data) {
    fetch(updateForm.action, {
        method: "PUT",
        body: data,
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}", // Agrega el token CSRF de Laravel
        },
    }).then(response => {
        if (!response.ok) {
            throw new Error('Error al actualizar los datos');
        }
        return response.json
    }).then(data => {
        console.log(data)
    }).catch(error => {
        console.error(error)
    })
}
