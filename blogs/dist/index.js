"use strict";
var __importDefault = (this && this.__importDefault) || function (mod) {
    return (mod && mod.__esModule) ? mod : { "default": mod };
};
Object.defineProperty(exports, "__esModule", { value: true });
var express_1 = __importDefault(require("express"));
var api = express_1.default();
api.get("/", function (request, response) {
    return response.json({ message: "Hello!" });
});
api.listen(3333, function () {
    console.log("🚀 Server started at port 3333!");
});
