const btns = document.querySelectorAll(".btn-form_update");
const btn2 = document.getElementById("sendupdate_form");
const inpTitle = document.getElementById("title2");
const inpImg = document.getElementById("img_prev");
const inpContent = document.getElementById("content2");
const formupdate = document.getElementById("update_form");
let postid;
btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        console.log(btn.value);
        getUpdate(btn.value);
    });
});

function getUpdate(id) {
    let url2 = `http://${window.location.host}/edit/${id}`;
    console.log(url2);
    fetch(url2, {
        method: "GET",
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            console.log(data);
            inpTitle.value = data.title;
            inpImg.value = data.img;
            inpContent.value = data.content;
            postid = id;
        })
        .catch((error) => {
            console.log(error);
        });
}

btn2.addEventListener("click", (e) => {
    console.log(postid);
    let formData = JSON.stringify(formupdate)
    console.log(formupdate);
    //update(postid, formData);
});

function update(id, data) {
    let csrfToken = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");
    let url2 = `http://${window.location.host}/update/${id}`;
    fetch(url2, {
        method: "PUT",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken, // Agrega el token CSRF al encabezado
        },
        body: data,
    })
        .then((response) => {
            return response.json();
        })
        .then((data) => {
            console.log(data);
        })
        .catch((error) => {
            console.log(error);
        });
}

//                 updateForm.action = `http://${window.location.host}/update/${data.id}`;
// btn2.addEventListener("click", (e) => {
//     const formData = new FormData(updateForm);
//     console.log(formData);
//     console.log(updateForm);
//     update(formData);
// });
//
// function update(data) {
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     console.log(updateForm.action)
//     fetch(updateForm.action, {
//         method: "PUT",
//         body: data,
//         headers: {
//             'Content-Type': 'application/json',
//             'X-CSRF-TOKEN': csrfToken, // Agrega el token CSRF al encabezado
//         },
//     })
//         .then((response) => {
//             if (!response.ok) {
//                 throw new Error("Error al actualizar los datos");
//             }
//             return response.json;
//         })
//         .then((data) => {
//             console.log(data);
//         })
//         .catch((error) => {
//             console.log(error);
//         });
// }
