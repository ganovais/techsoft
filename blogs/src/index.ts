import express from "express";
import { uuid } from "uuidv4";
import cors from "cors";

const api = express();
api.use(express.json());
api.use(cors());

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

api.put("/blogs/:id", (request, response) => {
   const id = request.params.id;
   const { title, body } = request.body;

   let index = blogs.findIndex((blog) => blog.id == id);
   if (index > -1) {
      blogs[index].title = title;
      blogs[index].body = body;
   } else {
      return response.json({ message: "Blog não encontrado" });
   }

   return response.json({ message: "Blog alterado com sucesso." });
});

api.delete("/blogs/:id", (request, response) => {
   const id = request.params.id;

   let index = blogs.findIndex((blog) => blog.id == id);
   if (index > -1) {
      blogs.splice(index, 1);
   } else {
      return response.json({ message: "Blog não encontrado." });
   }

   return response.json({ message: `Blog: ${id} deletado com sucesso.` });
});

api.listen(3333, () => {
   console.log("🚀 Server started at port 3333!");
});
