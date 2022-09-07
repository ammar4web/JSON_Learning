$(function () {
  $.getJSON("../syntax.json", function (data) {
    console.log(data);

    let content = "";
    for (let x in data) {
      content += `<p>${x}: ${data[x]}</p>`;
    }
    $("body").append(content);  
  });
});