const tHead = document.getElementById('table-head')

const tBody = document.getElementById('table-body')

const date = new Date();

const headRow = document.getElementById('table-head-row')

console.log(date.toISOString().split("T")[0])
