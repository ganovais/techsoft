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

const addEventToUpdate = () => {
   const tasks = document.querySelectorAll(".task-item");
   tasks.forEach((button) => {
      button.ondblclick = () => {
         const id = button.id;

         button.childNodes[1].disabled = false;
         button.childNodes[1].focus();
         button.childNodes[1].classList.add("input-enabled");
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
               data.tasks.map((item) => {
                  const taskHtml =
                     '<li class="task-item" id="' +
                     item.id +
                     '" >' +
                     '<input type="checkbox" />' +
                     '<input disabled class="text-task" value="' +
                     item.description +
                     '"/>' +
                     '<p class="remove-task"> -- </p>' +
                     "</li>";

                  document
                     .querySelector("#tasks")
                     .insertAdjacentHTML("afterbegin", taskHtml);
               });

               addEventToRemove();
               addEventToUpdate();
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
               const task = data.task;
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

               document
                  .querySelector("#tasks")
                  .insertAdjacentHTML("beforeend", taskHtml);
            }

            addInput.value = "";
            addInput.focus();
            addButton.disabled = true;
            title.innerHTML = "Minhas tarefas";

            addEventToRemove();
            addEventToUpdate();
         });
   };
});
