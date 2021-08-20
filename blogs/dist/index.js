"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var express_1 = __importDefault(require("express"));
var uuidv4_1 = require("uuidv4");
var cors_1 = __importDefault(require("cors"));
var api = express_1.default();
api.use(express_1.default.json());
api.use(cors_1.default());
var blogs = [
    {
        id: "first",
        title: "Hello World",
        body: "meu texto",
    },
];
api.get("/blogs", function (request, response) {
    return response.json(blogs);
});
api.get("/blogs/:id", function (request, response) {
    var id = request.params.id;
    var message = "";
    var blog = blogs.find(function (blog) { return blog.id == id; });
    if (blog) {
        message = "Blog encontrado";
    }
    else {
        message = "Blog não encontrado";
    }
    return response.json({ message: message, blog: blog });
});
api.post("/blogs", function (request, response) {
    var _a = request.body, title = _a.title, body = _a.body;
    var blog = {
        id: uuidv4_1.uuid(),
        title: title,
        body: body,
        created_at: new Date(),
    };
    blogs.push(blog);
    return response.json(blog);
});
api.put("/blogs/:id", function (request, response) {
    var id = request.params.id;
    var _a = request.body, title = _a.title, body = _a.body;
    var index = blogs.findIndex(function (blog) { return blog.id == id; });
    if (index > -1) {
        blogs[index].title = title;
        blogs[index].body = body;
    }
    else {
        return response.json({ message: "Blog não encontrado" });
    }
    return response.json({ message: "Blog alterado com sucesso." });
});
api.delete("/blogs/:id", function (request, response) {
    var id = request.params.id;
    var index = blogs.findIndex(function (blog) { return blog.id == id; });
    if (index > -1) {
        blogs.splice(index, 1);
    }
    else {
        return response.json({ message: "Blog não encontrado." });
    }
    return response.json({ message: "Blog: " + id + " deletado com sucesso." });
});
api.listen(3333, function () {
    console.log("🚀 Server started at port 3333!");
});
