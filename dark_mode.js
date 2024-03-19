function darkMode() {
  var header = document.querySelector('header');
  var body = document.body;
  var footer = document.querySelector('footer p');
  var flex_item = document.querySelectorAll('.flex_item');
  var child_flex_containers = document.querySelectorAll('.flex_container .flex_container');
  var instructions = document.getElementById('instructions');
  if (body.style.backgroundColor === 'rgb(20, 20, 20)') {
    header.style.backgroundColor = 'white';
    body.style.backgroundColor = 'white';
    body.style.color = '#333';
    footer.style.color = 'black';
    if (instructions !== null) {
      instructions.style.color = '#a42020';
    }
    child_flex_containers.forEach(element => {
      element.style.backgroundColor = '#ddd';
    });
    flex_item.forEach(element => {
      element.style.backgroundColor = '#bbb';
      let pTags = element.querySelectorAll('p');
      pTags.forEach(p => {
        p.style.color = '#333';
      });
    });
    return;
  }
  else {
    header.style.backgroundColor = '#333';
    body.style.backgroundColor = 'rgb(20, 20, 20)';
    body.style.color = 'white';
    footer.style.color = 'white';
    if (instructions !== null) {
      instructions.style.color = '#ff8080';
    }
    child_flex_containers.forEach(element => {
      element.style.backgroundColor = '#444';
    });
    flex_item.forEach(element => {
      element.style.backgroundColor = '#555';
      let pTags = element.querySelectorAll('p');
      pTags.forEach(p => {
        p.style.color = 'white';
      });
    });
    return;
  }
}