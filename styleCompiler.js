const path = require('path')
const fsPromises = require('fs').promises;
const sass = require('sass');

async function compileCss() {
  const compiledSass = sass.compile(path.join(__dirname, 'style', 'style.scss'));

  await fsPromises.writeFile(path.join(__dirname, 'style', 'style.css'), compiledSass.css);
};

compileCss()

