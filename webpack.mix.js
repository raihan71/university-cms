const mix = require("laravel-mix");

mix.styles(
    ["resources/css/styles.css", "resources/css/main.css"],
    "public/main.min.css"
);

mix.styles("resources/css/custom.css", "public/custom.min.css");

mix.scripts("resources/js/main.js", "public/main.min.js");
