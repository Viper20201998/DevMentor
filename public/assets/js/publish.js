const btn = document.getElementById("sendform");
const card = document.querySelector('.containcard');
btn.addEventListener("click", () => {
    const form = document.getElementById("formpublic");
    const formData = new FormData(form);
    console.log(formData);
    fetch(form.action, {
        method: "POST",
        body: formData,
    })
        .then((response) => {
            // Aquí puedes manejar la respuesta, por ejemplo, mostrar una alerta
            alert("Formulario enviado exitosamente");
            console.log(response);
            return response.json(); // Analizar la respuesta JSON si es necesario
        })
        .then((data) => {
            console.log("respuesta del servidor: ", data);
            card.innerHTML = `
                <div class="card col-md-5 d-flex justify-content-between mx-3">
                    <img src="{{ url('/') }}/img/${data.img}" class="card-img-top" alt="" />
                    <div class="card-body">
                        <h5 class="card-title">${data.title}</h5>
                        <p class="card-text">
                            ${data.content}
                        </p>
                        <form action="{{ route('favorite') }}" class="favorities-form">
                            @csrf
                            <input type="hiden" name="id_post" value="{{ $post->id }}" class="d-none">
                            <button type="submit" class="btn btn-warning">Add Favotite</button>
                        </form>
                    </div>
                </div>

`;
        })
        .catch((error) => {
            // Maneja los errores si es necesario
            console.error("Error al enviar el formulario: ", error);
        });
});
