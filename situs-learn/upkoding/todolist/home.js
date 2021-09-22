const link = "https://t-odolist.herokuapp.com/";
var t = document.getElementById("t-odolist");
let to = `
    <nav class="navbar navbar-light" style="background-color: #296aec;">
      <span class="navbar-brand mb-1 h1 " style="color: white;width:100%; text-align:center;">T-odolist</span>
    </nav>

    <!-- status -->
    <div class="status">

    </div>

    <!-- card todo -->
    <div class="row" style="margin: 1%;">

      <div class="col-sm "
        style="font-size: 14px; margin-right: 2%; text-align: start; padding-top: 10px; background-color: rgb(240, 240, 240)">
        <div class="isi">
          <div class="ar"
            style="display: flex; padding-bottom: 10px; justify-content: space-between;margin-right: 1%; color: rgb(71, 71, 71);">
            To Do's
            <div class="dropdown">
              <span class="fa fa-bars" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"></span>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#modalTodo">Add card...</a>
              </div>
            </div>
          </div>
          <div class="containera">
            <div class="col-sm container" style="font-size: 14px; margin-right: 2%; text-align: start;padding-bottom: 10px; background-color: rgb(240, 240, 240);;
                height: 500px;overflow-x: auto; padding-bottom: 10px;" data-id="todos">

              <!-- isi card -->
              <div id="todos">
              </div>
            </div>
          </div>
          <!-- modal button  -->
          <button type="button" class="btn bt-none cola"
            style="width: 100%; height: 100%; color: grey; font-size: 12px;background-color: rgb(240, 240, 240); padding-top: 10px;"
            data-toggle="modal" data-target="#modalTodo">Add
            Task
          </button>
          <!-- modal -->
          <div class="modal fade" id="modalTodo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Input New Task Here</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="addTodos">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                        placeholder="judul">
                      <small id="emailHelp" class="form-text text-muted">Enjoy your life</small>
                    </div>
                    <div class="form-group">
                      <label for="inputState">Category</label>
                      <select id="category" class="form-control" name="category">
                        <option selected>All</option>
                        <option value="work">Work</option>
                        <option value="personal">Personal</option>
                        <option value="wishlist">Wishlist</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Due Date</label>
                      <input type="datetime-local" class="form-control" id="date" placeholder="00-00-0000" name="date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Notes</label>
                      <textarea type="text" class="form-control" id="note" placeholder="notes" name="note"></textarea>
                    </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="validasi(  '${localStorage.getItem(
                      "namefile"
                    )}')">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm "
        style="font-size: 14px; margin-right: 2%; text-align: start; padding-top: 10px; background-color: rgb(240, 240, 240)">
        <div class="isi">
          <div class="ar"
            style="display: flex; padding-bottom: 10px; justify-content: space-between;margin-right: 1%; color: rgb(71, 71, 71);">
            Progees
            <div class="dropdown">
              <span class="fa fa-bars" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"></span>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#modalProgees">Add card...</a>
              </div>
            </div>
          </div>
          <div class="containera">
            <div class="col-sm container" style="font-size: 14px; margin-right: 2%; text-align: start;padding-bottom: 10px; background-color: rgb(240, 240, 240);;
                height: 500px;overflow-x: auto; padding-bottom: 10px;" data-id="progees">

              <!-- isi card -->
              <div id="progees">
              </div>
            </div>
          </div>
          <!-- modal button  -->
          <button type="button" class="btn bt-none cola"
            style="width: 100%; height: 100%; color: grey; font-size: 12px;background-color: rgb(240, 240, 240); padding-top: 10px;"
            data-toggle="modal" data-target="#modalProgees">Add
            Task
          </button>
          <!-- modal -->
          <div class="modal fade" id="modalProgees" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Input New Task Here</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="addProgees">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                        placeholder="judul">
                      <small id="emailHelp" class="form-text text-muted">Enjoy your life</small>
                    </div>
                    <div class="form-group">
                      <label for="inputState">Category</label>
                      <select id="category" class="form-control" name="category">
                        <option selected>All</option>
                        <option value="work">Work</option>
                        <option value="personal">Personal</option>
                        <option value="wishlist">Wishlist</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Due Date</label>
                      <input type="datetime-local" class="form-control" id="date" placeholder="00-00-0000" name="date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Notes</label>
                      <textarea type="text" class="form-control" id="note" placeholder="notes" name="note"></textarea>
                    </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="validasi('${localStorage.getItem(
                      "namefile"
                    )}')">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm "
        style="font-size: 14px; margin-right: 2%; text-align: start; padding-top: 10px; padding-bottom: 10px;background-color: rgb(240, 240, 240);">
        <div class="isi">
          <div class="ar"
            style="display: flex; padding-bottom: 10px; justify-content: space-between;margin-right: 1%; color: rgb(71, 71, 71);">
            Review
            <div class="dropdown">
              <span class="fa fa-bars" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"></span>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#modalReview">Add card...</a>
              </div>
            </div>
          </div>
          <div class="containera">
            <div class="col-sm container" style="font-size: 14px; margin-right: 2%; text-align: start;padding-bottom: 10px; background-color: rgb(240, 240, 240);;
                height: 500px;overflow-x: auto; padding-bottom: 10px;" data-id="review">

              <!-- isi card -->
              <div id="review">
              </div>
            </div>
          </div>
          <!-- modal button  -->
          <button type="button" class="btn bt-none cola"
            style="width: 100%; height: 100%; color: grey; font-size: 12px;background-color: rgb(240, 240, 240); padding-top: 10px;"
            data-toggle="modal" data-target="#modalReview">Add
            Task
          </button>
          <!-- modal -->
          <div class="modal fade" id="modalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Input New Task Here</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="addReview">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                        placeholder="judul">
                      <small id="emailHelp" class="form-text text-muted">Enjoy your life</small>
                    </div>
                    <div class="form-group">
                      <label for="inputState">Category</label>
                      <select id="category" class="form-control" name="category">
                        <option selected>All</option>
                        <option value="work">Work</option>
                        <option value="personal">Personal</option>
                        <option value="wishlist">Wishlist</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Due Date</label>
                      <input type="datetime-local" class="form-control" id="date" placeholder="00-00-0000" name="date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Notes</label>
                      <textarea type="text" class="form-control" id="note" placeholder="notes" name="note"></textarea>
                    </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="validasi('${localStorage.getItem(
                      "namefile"
                    )}')">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm "
        style="font-size: 14px; margin-right: 2%; text-align: start; padding-top: 10px; padding-bottom: 10px;background-color: rgb(240, 240, 240);">
        <div class="isi">
          <div class="ar"
            style="display: flex; padding-bottom: 10px; justify-content: space-between;margin-right: 1%; color: rgb(71, 71, 71);">
            Done
            <div class="dropdown">
              <span class="fa fa-bars" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false"></span>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#modalDone">Add card...</a>
              </div>
            </div>
          </div>
          <div class="containera">
            <div class="col-sm container" style="font-size: 14px; margin-right: 2%; text-align: start;padding-bottom: 10px; background-color: rgb(240, 240, 240);;
                height: 500px;overflow-x: auto; padding-bottom: 10px;" data-id="done">

              <!-- isi card -->
              <div id="done">
              </div>
            </div>
          </div>
          <!-- modal button  -->
          <button type="button" class="btn bt-none cola"
            style="width: 100%; height: 100%; color: grey; font-size: 12px;background-color: rgb(240, 240, 240); padding-top: 10px;"
            data-toggle="modal" data-target="#modalDone">
            Add Task
          </button>
          <!-- modal -->
          <div class="modal fade" id="modalDone" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Input New Task Here</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form name="addDone">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Judul</label>
                      <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                        placeholder="judul">
                      <small id="emailHelp" class="form-text text-muted">Enjoy your life</small>
                    </div>
                    <div class="form-group">
                      <label for="inputState">Category</label>
                      <select id="category" class="form-control" name="category">
                        <option selected>All</option>
                        <option value="work">Work</option>
                        <option value="personal">Personal</option>
                        <option value="wishlist">Wishlist</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Due Date</label>
                      <input type="datetime-local" class="form-control" id="date" placeholder="00-00-0000" name="date">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Notes</label>
                      <textarea type="text" class="form-control" id="note" placeholder="notes" name="note"></textarea>
                    </div>
                  </form>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="validasi('${localStorage.getItem(
                      "namefile"
                    )}')">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>`;

axios.get(`${link}todo`);
// .then(res => console.log(res.data.data))

t.innerHTML += to;
if (localStorage.getItem("namefile") === "") {
  localStorage.setItem("sigup", 0);
  window.location.href = "index.html";
}

// see data
axios
  .get(`${link}todo/see/${localStorage.getItem("namefile")}`)
  .then((res) => {
    // console.log(res)
    res.data.data.map((nilai) => {
      // tampilan data
      if (nilai.status === "todos") {
        console.log(nilai);
        // nilai.forEach(a => {
        //   console.log(a);
        // })
        let dataa = `
              <div class="card" style="cursor: move;width: 16rem; border-radius:5px;
              border-top-color: ${
                nilai.category === "work"
                  ? "#f40101"
                  : nilai.category === "personal"
                  ? "#7800a3"
                  : nilai.category === "wishlist"
                  ? "#001dd6"
                  : "#12cc05"
              }
              " draggable="true" data-id="${nilai.id}" key="${nilai.id}">
                <div class="card-body">
                  <p style="text-align: start; justify-content: center;">
                    <button type="button" class="btn"
                    style="
                    font-size: 12px; 
                    text-transform: capitalize;
                    background-color: ${
                      nilai.category === "work"
                        ? "#f401011a"
                        : nilai.category === "personal"
                        ? "#7800a314"
                        : nilai.category === "wishlist"
                        ? "#4d52ff2b"
                        : "#13e70417"
                    }; 
                    color: ${
                      nilai.category === "work"
                        ? "#f40101"
                        : nilai.category === "personal"
                        ? "#7800a3"
                        : nilai.category === "wishlist"
                        ? "#001dd6"
                        : "#12cc05"
                    };
                    " id="tim" >${
                      nilai.category !== "" ? nilai.category : "None"
                    }</button>
                  </p>
                  <h5 class="card-title" style="margin-top: 10px; font-size:16px">${
                    nilai.judul
                  }</h5>
                  <h6 class="card-subtitle" style="margin-top: 1px; font-size:12px; color:grey">${
                    nilai.note
                  }</h6>
                  <span style=" 
                  height: 25px;
                  display: flex;
                  justify-content: end;
                  align-items: end;
                  ">
                  <div class='del' data-id="${nilai.id}">
                  <i class="fa fa-trash-o" aria-hidden="true" style="margin-right:15px"></i>
                  <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                  </div>
                  </span>
              </div>
              `;
        document.getElementById(nilai.status).innerHTML += dataa;
      } else if (nilai.status === "progees") {
        let dataa = `
            <div class="card" style="cursor: move;width: 16rem; border-radius:5px;
              border-top-color: ${
                nilai.category === "work"
                  ? "#f40101"
                  : nilai.category === "personal"
                  ? "#7800a3"
                  : nilai.category === "wishlist"
                  ? "#001dd6"
                  : "#12cc05"
              }
              " draggable="true" data-id="${nilai.id} "
              >
              <div class="card-body">
                <p style="text-align: start; justify-content: center;">
                  <button type="button" class="btn"
                  style="
                  font-size: 12px; 
                  text-transform: capitalize;
                  background-color: ${
                    nilai.category === "work"
                      ? "#f401011a"
                      : nilai.category === "personal"
                      ? "#7800a314"
                      : nilai.category === "wishlist"
                      ? "#4d52ff2b"
                      : "#13e70417"
                  }; 
                  color: ${
                    nilai.category === "work"
                      ? "#f40101"
                      : nilai.category === "personal"
                      ? "#7800a3"
                      : nilai.category === "wishlist"
                      ? "#001dd6"
                      : "#12cc05"
                  };
                  " id="tim" >${
                    nilai.category !== "" ? nilai.category : "None"
                  }</button>
                </p>
                <h5 class="card-title" style="margin-top: 10px; font-size:16px">${
                  nilai.judul
                }</h5>
                <h6 class="card-subtitle" style="margin-top: 1px; font-size:12px; color:grey">${
                  nilai.note
                }</h6>
              </div>
              </div>
              `;
        document.getElementById(nilai.status).innerHTML += dataa;
      } else if (nilai.status === "review") {
        let dataa = `
            <div class="card" style="cursor: move;width: 16rem; border-radius:5px;
              border-top-color: ${
                nilai.category === "work"
                  ? "#f40101"
                  : nilai.category === "personal"
                  ? "#7800a3"
                  : nilai.category === "wishlist"
                  ? "#001dd6"
                  : "#12cc05"
              }
              " draggable="true" data-id="${nilai.id} "
              >
              <div class="card-body">
                <p style="text-align: start; justify-content: center;">
                  <button type="button" class="btn"
                  style="
                  font-size: 12px; 
                  text-transform: capitalize;
                  background-color: ${
                    nilai.category === "work"
                      ? "#f401011a"
                      : nilai.category === "personal"
                      ? "#7800a314"
                      : nilai.category === "wishlist"
                      ? "#4d52ff2b"
                      : "#13e70417"
                  }; 
                  color: ${
                    nilai.category === "work"
                      ? "#f40101"
                      : nilai.category === "personal"
                      ? "#7800a3"
                      : nilai.category === "wishlist"
                      ? "#001dd6"
                      : "#12cc05"
                  };
                  " id="tim" >${
                    nilai.category !== "" ? nilai.category : "None"
                  }</button>
                </p>
                <h5 class="card-title" style="margin-top: 10px; font-size:16px">${
                  nilai.judul
                }</h5>
                <h6 class="card-subtitle" style="margin-top: 1px; font-size:12px; color:grey">${
                  nilai.note
                }</h6>
              </div>
              </div>
              `;
        document.getElementById(nilai.status).innerHTML += dataa;
      } else if (nilai.status === "done") {
        let dataa = `
            <div class="card" style="cursor: move;width: 16rem; border-radius:5px;
              border-top-color: ${
                nilai.category === "work"
                  ? "#f40101"
                  : nilai.category === "personal"
                  ? "#7800a3"
                  : nilai.category === "wishlist"
                  ? "#001dd6"
                  : "#12cc05"
              }
              " draggable="true" data-id="${nilai.id} "
              >
              <div class="card-body">
                <p style="text-align: start; justify-content: center;">
                  <button type="button" class="btn"
                  style="
                  font-size: 12px; 
                  text-transform: capitalize;
                  background-color: ${
                    nilai.category === "work"
                      ? "#f401011a"
                      : nilai.category === "personal"
                      ? "#7800a314"
                      : nilai.category === "wishlist"
                      ? "#4d52ff2b"
                      : "#13e70417"
                  }; 
                  color: ${
                    nilai.category === "work"
                      ? "#f40101"
                      : nilai.category === "personal"
                      ? "#7800a3"
                      : nilai.category === "wishlist"
                      ? "#001dd6"
                      : "#12cc05"
                  };
                  " id="tim" >${
                    nilai.category !== "" ? nilai.category : "None"
                  }</button>
                </p>
                <h5 class="card-title" style="margin-top: 10px; font-size:16px">${
                  nilai.judul
                }</h5>
                <h6 class="card-subtitle" style="margin-top: 1px; font-size:12px; color:grey">${
                  nilai.note
                }</h6>
              </div>
              </div>
              `;
        document.getElementById(nilai.status).innerHTML += dataa;
      }

      // draging
      const draggables = document.querySelectorAll(".card");
      const containers = document.querySelectorAll(".container");
      // console.log(draggables);
      // console.log(containers);
      draggables.forEach((draggable) => {
        draggable.addEventListener("dragstart", () => {
          draggable.classList.add("dragging");
        });
        draggable.addEventListener("dragend", () => {
          draggable.classList.remove("dragging");
        });
      });
      containers.forEach((container) => {
        container.addEventListener("dragover", (e) => {
          e.preventDefault();
          const afterElement = getDragAfterElement(container, e.clientY);
          const draggable = document.querySelector(".dragging");
          if (afterElement == null) {
            updateData(container.dataset.id, draggable.dataset.id);
            container.appendChild(draggable);
          } else {
            container.insertBefore(draggable, afterElement);
          }
        });
      });

      function getDragAfterElement(container, y) {
        const draggableElements = [
          ...container.querySelectorAll(".card:not(.dragging)"),
        ];

        return draggableElements.reduce(
          (closest, child) => {
            const box = child.getBoundingClientRect();
            const offset = y - box.top - box.height / 2;
            // console.log(offset);
            if (offset < 0 && offset > closest.offset) {
              return {
                offset: offset,
                element: child,
              };
            } else {
              return closest;
            }
          },
          {
            offset: Number.NEGATIVE_INFINITY,
          }
        ).element;
      }

      // delete and update data
      // console.log(draggables);
      let de = document.querySelectorAll(".del");
      de.forEach((dra) => {
        dra.addEventListener("click", () => {
          try {
            axios
              .delete(
                `${link}todo/delete/${localStorage.getItem("namefile")}/${
                  dra.dataset.id
                }`
              )
              .then(function (res) {
                console.log(res);
                window.location.href = "home.html";
              })
              .catch(function (err) {
                console.log(err);
              });
          } catch (error) {
            console.log(error);
          }
        });
      });
    });
  })
  .catch((err) => {
    console.log(err);
  });

// coutDown timer
function coutDown(datas) {
  var countDownDate = new Date(datas).getTime();

  // Update the count down every 1 second
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if (days < 0) {
    return "Expired";
  } else if (days === 0) {
    return "1 Days Left";
  } else {
    return days + " Days Left";
  }
  // console.log('days', days);
  // console.log('hours', hours);
  // console.log('minutes', minutes);
}

// add data
function validasi(val) {
  let st = "";

  if (document.forms["addTodos"]["judul"].value) {
    na = "addTodos";
    st = "todos";
  }

  if (document.forms["addProgees"]["judul"].value) {
    na = "addProgees";
    st = "progees";
  }

  if (document.forms["addReview"]["judul"].value) {
    na = "addReview";
    st = "review";
  }

  if (document.forms["addDone"]["judul"].value) {
    na = "addDone";
    st = "done";
  }

  // create todos

  if (na === "") {
    console.log("judul tidak boleh kosong");
    return false;
  }

  let data = {
    judul: document.forms[na]["judul"].value,
    category: document.forms[na]["category"].value,
    date: document.forms[na]["date"].value,
    note: document.forms[na]["note"].value,
    status: st,
  };
  // console.log('ini data :', data);

  try {
    axios
      .post(`${link}todo/add/${val}`, data)
      .then(function (res) {
        console.log(res);
        window.location.href = "home.html";
      })
      .catch(function (err) {
        console.log(err);
      });
  } catch (error) {
    console.log(error);
  }
}

// update data
function updateData(status, idStatus) {
  // console.log('ini aia', idStatus, status);
  let data = {
    judul: "",
    category: "",
    date: "",
    note: "",
    status: status,
  };
  axios
    .put(
      `${link}todo/rename/${localStorage.getItem("namefile")}/${idStatus}`,
      data
    )
    .then((res) => {
      console.log(res);
      // window.location.href = 'home.html'
    })
    .catch((err) => {
      console.log(err);
    });
}
