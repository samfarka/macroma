const mix = require("laravel-mix")

mix.css("./app/resources/app.css","css").setPublicPath("public")
mix.js("./app/resources/main.js","js").setPublicPath("public")