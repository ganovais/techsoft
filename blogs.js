const createBlog = (blog) => {
  return `
      <div class="blog">
         <button class="search" data-id="${blog.id}">Buscar</button>
         <h4>${blog.title}</h4>
         <p>${blog.body}</p>
      </div>
   `;
};

document.addEventListener('DOMContentLoaded', () => {
  fetch('https://jsonplaceholder.typicode.com/posts')
    .then((response) => response.json())
    .then((data) => {
      let content = '';
      data = data.splice(0, 10);

      data.map((blog) => {
        content += createBlog(blog);
      });

      document.querySelector('.blogs').innerHTML = content;
    });
});
