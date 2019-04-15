
let connection = new WebSocket('wss://panelli-node-2.herokuapp.com/');

connection.onopen = () => {
  console.log('connected from the frontend');
};

connection.onerror = () => {
  console.log('failed to connect from the frontend');
};

connection.onmessage = (event) => {
  console.log('received message', event.data);
  let edit = document.getElementById('doc');
  edit.innerText = event.data;
  const range = window.getSelection();
  range.selectAllChildren(edit);
  range.collapseToEnd();
};

document.getElementById('doc').addEventListener('input', (event) => {
  event.preventDefault();
  let message = document.getElementById('doc').innerText;
  connection.send(message);
});
