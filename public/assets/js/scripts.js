document.addEventListener("DOMContentLoaded", () => {
   const addButton = document.querySelector(".plus");
   const addInput = document.querySelector("#task");
   const title = document.querySelector("#title");

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
                     '<p class="text-task">' +
                     item.description +
                     "</p>" +
                     '<p class="remove-task"> -- </p>' +
                     "</li>";

                  document
                     .querySelector("#tasks")
                     .insertAdjacentHTML("afterbegin", taskHtml);
               });
            }
         }
      });
});
