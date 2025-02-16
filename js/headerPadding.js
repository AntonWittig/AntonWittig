const header = document.getElementById("header");

document.documentElement.style.setProperty('--header-height', `${header.offsetHeight}px`);
console.log(`--header-height set to ${header.offsetHeight}px`)