const createBlog = (blog) => {
  return `
      <div class="blog">
         <button class="search" data-id="${blog.id}">Buscar</button>
         <h4>${capitalizeFirstLetter(blog.title)}</h4>
         <p>${blog.body}</p>
      </div>
   `;
};

const capitalizeFirstLetter = (string) => {
  return string.charAt(0).toUpperCase() + string.slice(1);
};

const addEventOnClick = () => {
  document.querySelectorAll('.search').forEach((item) => {
    item.onclick = () => {
      fetch(`http://localhost:3333/blogs/${item.dataset.id}`)
        .then((response) => response.json())
        .then((data) => {
          document.querySelector('.searched').innerHTML = `
             <h1>${data.blog.title}</h1>
             <p>${data.blog.body}</p>
          `;
        });
    };
  });
};

document.addEventListener('DOMContentLoaded', () => {
  fetch('http://localhost:3333/blogs')
    .then((response) => response.json())
    .then((data) => {
      let content = '';
      data = data.splice(0, 30);

      data.map((blog) => {
        content += createBlog(blog);
      });

      document.querySelector('.blogs').innerHTML = content;

      addEventOnClick();
    });
});
