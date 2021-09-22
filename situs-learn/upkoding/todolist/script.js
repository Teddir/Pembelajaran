const link = "https://t-odolist.herokuapp.com/";
var u = document.getElementById("signUp");
let um = `
    <div class="modal-dialog modal-dialog-centered cc" role="document">
      <div class="modal-content signUpCard">
        <div class="modal-header hd">
          <p class="modal-title hdp">Welcome Back</p>
        </div>
        <div class="modal-body">
          <form name="adduser">
            <div class="form-group">
                <span style=" 
                position: absolute;
                margin: 14px;
                height: 25px;
                display: flex;
                align-items: center;">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                </span>
              <input name="name_file" type="text" class="form-control inp" id="name_file" aria-describedby="emailHelp"
              placeholder="Enter your name" required>
              </div>
            <div class="form-group">
            <span style=" 
                position: absolute;
                margin: 14px;
                height: 25px;
                display: flex;
                align-items: center;">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                </span>
              <input name="email" type="email" class="form-control inp" id="email" aria-describedby="emailHelp"
                placeholder="Enter your email">
              <small id="emailHelp" class="form-text text-muted"
                style="font-size: 10px; color: rgb(160, 160, 160);">*Santai email opsional</small>
            </div>
          </form>
          <div class="modal-footer">
            <button type="button" class="btn bt" onclick="signup()" style="width: 100%">Create
              Todolist</button>
          </div>
        </div>
      </div>
    </div>
    `;

u.innerHTML += um;
if (localStorage.getItem("sigup") === "1") {
  window.location.href = "home.html";
}
console.log(localStorage.getItem("sigup"));
// add file
function signup() {
  let req = /^[a-z0-9_]{3,15}$/g;
  let nameFile = document.forms["adduser"]["name_file"].value.replace(" ", "_");
  if (nameFile === "") {
    console.log("name tidak boleh kosong");
    return false;
  } else {
    if (!req.test(nameFile)) {
      console.log("Terjadi kesalahan");
      return false;
    } else {
      let data = {
        name_file: nameFile,
      };
      return axios
        .post(`${link}addTodo`, data)
        .then((res) => {
          localStorage.setItem("sigup", 1);
          localStorage.setItem("namefile", nameFile);
          window.location.href = "home.html";
          console.log(res);
        })
        .catch((err) => {
          console.log(err);
        });
    }
  }
}
