
let connection = new WebSocket('wss://itp405-laravel-jeremypanelli.herokuapp.com');

connection.onopen = () => {
  console.log('connected from the front end');
};

connection.onerror = () => {
  console.log('failed');
};

connection.onmessage = (event) => {
  console.log('received message', event.data);
  document.getElementById('#doc').innerHTML = event.data;
  const range = window.getSelection();
  let div = document.getElementById('#doc');
  range.selectAllChildren(div);
  range.collapseToEnd();
};

document.getElementById('#doc').addEventListener('keyup', (event) => {
  event.preventDefault();
  let message = document.getElementById('#doc').innerHTML;
  connection.send(message);
  console.log(message);
});
