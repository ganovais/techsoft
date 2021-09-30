var tasks = [];

const addEventToRemove = () => {
    const title = document.querySelector("#title");
    const removeButtons = document.querySelectorAll(".remove-task");
    removeButtons.forEach((button) => {
        button.onclick = () => {
            const id = button.parentElement.id;

            button.parentElement.remove();
            fetch(`/task/${id}`, {
                method: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": document.querySelector(
                        'meta[name="csrf-token"]'
                    ).content,
                },
            })
                .then((response) => response.json())
                .then((data) => {
                    console.log(data);
                });

            if (!document.querySelector("#tasks").childNodes.length) {
                title.innerHTML = "Todas as tarefas foram cumpridas";
            }
        };
    });
};

document.addEventListener("DOMContentLoaded", () => {
    const addButton = document.getElementsByClassName("plus")[0];
    const addInput = document.getElementById("task");
    const title = document.querySelector("#title");

    fetch("/tasks")
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

                    addEventToRemove();
                    title.innerHTML = "Minhas tarefas";
                } else {
                    title.innerHTML = "Cadastre sua primeira tarefa";
                }
            }
        });

    addButton.disabled = true;
    addInput.focus();

    addInput.onkeyup = () => {
        if (addInput.value.length > 0) {
            addButton.disabled = false;
        } else {
            addButton.disabled = true;
        }
    };

    addButton.onclick = () => {
        if (!addInput.value) {
            return;
        }

        const data = {
            description: addInput.value,
        };

        fetch("/tasks", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
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
                        '<p class="text-task">' +
                        task.description +
                        "</p>" +
                        '<p class="remove-task"> -- </p>' +
                        "</li>";

                    document
                        .querySelector("#tasks")
                        .insertAdjacentHTML("beforeend", taskHtml);
                }

                addInput.value = "";
                addInput.focus();
                addButton.disabled = true;

                addEventToRemove();
            });
    };
});
