function validate_data(){
    let password = document.querySelector("#password");
    let new_password = document.querySelector("#new-password");
    let confirm_password = document.querySelector("#confirm-password");
    let field_password = document.querySelector(".field-password").getElementsByTagName("span")[1];
    let field_new_password = document.querySelector(".field-new-password").getElementsByTagName("span")[1];
    let field_confirm_password = document.querySelector(".field-confirm-password").getElementsByTagName("span")[1];

    if (password.value === ""){
        field_password.classList.add("error");
    } else {

        field_password.classList.remove("error");
    }
    if (new_password.value === ""){
        field_new_password.classList.add("error");
    } else {
        field_new_password.classList.remove("error");

    }
    if (confirm_password.value === ""){
        field_confirm_password.classList.add("error");
    } else {
        field_confirm_password.classList.remove("error");
    }
}
