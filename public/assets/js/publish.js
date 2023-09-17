const btn = document.getElementById("sendform");
const card = document.querySelector(".containcard");
const form = document.getElementById("formpublic");
const card2 = document.createElement('div');
card2.className = "col-md-12 mx-auto"
btn.addEventListener("click", () => {
    const formData = new FormData(form);
    console.log(formData);
    create(formData);
});

function create(formData) {
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
            console.log(data);
            getData();
        })
        .catch((error) => {
            // Maneja los errores si es necesario
            console.error("Error al enviar el formulario: ", error);
        });
}

function getData() {
    fetch("http://" + window.location.host + "/getstore", {
        method: "GET",
        headers: {
            "X-CSRF-TOKEN": "{{ csrf_token() }}", // Agrega el token CSRF de Laravel
        },
    })
        .then((response) => {
            return response.json();
        })
        .then((da) => {
            da.forEach(datas => {
                card2.innerHTML = `
                <div class="card col-md-5 d-flex justify-content-between mx-3">
                    <div id="img-content">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">${datas.title}</h5>
                        <p class="card-text">
                            ${datas.content}
                        </p>
                        <form action="{{ route('favorite') }}" class="favorities-form">
                            <input type="hidden" id="csrf-token" value="{{ csrf_token() }}">
                            <input type="hiden" name="id_post" value="${datas.id}" class="d-none">
                            <button type="submit" class="btn btn-warning">Add Favotite</button>
                        </form>
                    </div>
                </div>
                `;
                card.appendChild(card2)
                getImg(datas.img)

            });
        })
        .catch((error) => {
            console.log(error);
        });
}

function getImg(nameImg) {
    let contentImg = document.getElementById("img-content");
    let urlImg = `http://${window.location.host}/img/${nameImg}`;
    fetch(urlImg)
        .then((response) => {
            return response.blob();
        })
        .then((imgBlob) => {
            let urlBlob = URL.createObjectURL(imgBlob);
            const img = document.createElement("img");
            img.className = "card-img-top"
            img.src = urlBlob;

            contentImg.appendChild(img)

        }).catch(error => {
            console.log(error)
        })
}
