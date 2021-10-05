const addEventToRemove = () => {
   const title = document.querySelector("#title");
   const removeButtons = document.querySelectorAll(".remove-task");

   removeButtons.forEach((button) => {
      button.onclick = () => {
         const id = button.parentElement.id;

         const token = document.querySelector(
            'meta[name="csrf-token"]'
         ).content;
         fetch(`${baseUrl}/task/${id}`, {
            method: "DELETE",
            headers: {
               "X-CSRF-TOKEN": token,
            },
         })
            .then((response) => response.json())
            .then((data) => {
               if (!data.error) {
                  button.parentElement.remove();

                  if (!document.querySelector("#tasks").childNodes.length) {
                     title.innerHTML = "Não há tarefas";
                  }
               }
               console.log(data);
            });
      };
   });
};

const updateTask = (id, button, divActions) => {
   const checked = button.childNodes[0].checked;

   const data = {
      description: button.childNodes[1].value,
      checked,
   };

   fetch(baseUrl + `/task/${id}`);
};

const addEventToUpdate = () => {
   const tasks = document.querySelectorAll(".task-item");
   tasks.forEach((button) => {
      button.ondblclick = () => {
         const id = button.id;
         const input = button.childNodes[1];
         const actualValue = input.value;

         if (input.classList.contains("input-enabled")) {
            return;
         }

         input.disabled = false;
         input.focus();
         input.classList.add("input-enabled");
         button.childNodes[2].classList.add("hidden");

         const divActions = document.createElement("div");
         divActions.classList.add("actions");

         const pCancel = document.createElement("p");
         pCancel.innerHTML = "<i class='fas fa-times-circle'></i>";
         pCancel.onclick = () => {
            input.disabled = true;
            input.classList.remove("input-enabled");
            button.childNodes[2].classList.remove("hidden");
            divActions.remove();
            input.value = actualValue;
         };

         const pSave = document.createElement("p");
         pSave.innerHTML = `<i class="fas fa-check"></i>`;
         pSave.onclick = () => {
            updateTask(id, button, divActions);
         };

         divActions.appendChild(pCancel);
         divActions.appendChild(pSave);

         button.appendChild(divActions);

         return;
      };
   });
};

document.addEventListener("DOMContentLoaded", () => {
   const addButton = document.querySelector(".plus");
   const addInput = document.querySelector("#task");
   const title = document.querySelector("#title");

   addButton.disabled = true;
   addInput.focus();

   fetch(baseUrl + "/tasks")
      .then((response) => response.json())
      .then((data) => {
         if (!data.error) {
            if (data.tasks.length) {
               data.tasks.map((task) => {
                  addTaskHTML(task);
               });

               title.innerHTML = "Minhas tarefas";
            } else {
               title.innerHTML = "Não há tarefas";
            }
         }
      });

   addInput.onkeyup = () => {
      if (addInput.value.length > 0) {
         addButton.disabled = false;
      } else {
         addButton.disabled = true;
      }
   };

   addButton.onclick = () => {
      const data = {
         description: addInput.value,
      };

      const token = document.querySelector('meta[name="csrf-token"]').content;
      fetch(baseUrl + "/tasks", {
         method: "POST",
         headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token,
         },
         body: JSON.stringify(data),
      })
         .then((response) => response.json())
         .then((data) => {
            if (!data.error) {
               addTaskHTML(data.task);

               toastr.success("Tarefa cadastrada com sucesso");
               addInput.value = "";
               addInput.focus();
               addButton.disabled = true;
               title.innerHTML = "Minhas tarefas";
            }
         });
   };
});

const addTaskHTML = (task) => {
   const taskHtml =
      '<li class="task-item" id="' +
      task.id +
      '" >' +
      '<input type="checkbox" />' +
      '<input disabled class="text-task" value="' +
      task.description +
      '"/>' +
      '<p class="remove-task"> -- </p>' +
      "</li>";

   document.querySelector("#tasks").insertAdjacentHTML("beforeend", taskHtml);

   setTimeout(() => {
      addEventToRemove();
      addEventToUpdate();
   }, 400);
};
