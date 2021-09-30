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

               // addEventToRemove();
               // addEventToUpdate();
               title.innerHTML = "Minhas tarefas";
            } else {
               title.innerHTML = "Cadastre sua primeira tarefa";
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

            // addEventToRemove();
            // addEventToUpdate();
         });
   };
});
