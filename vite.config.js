import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import { globSync } from "glob";
import path from "path";

export default defineConfig({
  plugins: [
    tailwindcss(),
    laravel({
      input: [
        ...globSync("resources/js/**/*.js").map((file) => path.resolve(file)),
        ...globSync("resources/css/**/*.css").map((file) => path.resolve(file)),
      ],
      refresh: true,
    }),
  ],
});
