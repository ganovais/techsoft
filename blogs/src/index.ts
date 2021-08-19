import express from "express";
import { uuid } from "uuidv4";

const api = express();

interface IBlog {
   id: string;
   title: string;
   body: string;
   created_at?: Date;
}

let blogs: IBlog[] = [
   {
      id: "first",
      title: "Hello World",
      body: "meu texto",
   },
];

api.get("/blogs", (request, response) => {
   return response.json(blogs);
});

api.get("/blogs/:id", (request, response) => {
   const id = request.params.id;
   let message: string = "";
   let blog = blogs.find((blog) => blog.id == id);

   if (blog) {
      message = "Blog encontrado";
   } else {
      message = "Blog não encontrado";
   }
   return response.json({ message, blog });
});

api.post("/blogs", (request, response) => {
   const { title, body } = request.body;

   const blog: IBlog = {
      id: uuid(),
      title,
      body,
      created_at: new Date(),
   };

   blogs.push(blog);

   return response.json(blog);
});

api.listen(3333, () => {
   console.log("🚀 Server started at port 3333!");
});
