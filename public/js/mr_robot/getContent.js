let newClassArray = [];

class createCategory {

    constructor(name = "", color = "", url = "", components = []) {
      this._name= name;
      this._color= color;
      this._url= url;
      this._components= components;
    }

    getName() {
      return this._name;
    }
    setName(name) {
      this._name= name;
    }

    getColor() {
        return this._color;
    }
    setColor(color) {
    this._color= color;
    }

    getUrl() {
      return this._url;
    }
    setUrl(url) {
      this._url= url;
    }

    getComponents() {
      return this._components;
    }
    setComponents(components) {
      this._components= components;
    }
}

// read Json file a return values for a current category - public/news/rss_api.json
let fetchJson = async function() {

    let getCategories;
    let response = await fetch('/js/news/rss_api.json');
    let data = await response.json();

    data.forEach (function (medio_content,index) {
    let getData = renderJson(medio_content);

        // Store classes in array
        if(typeof getData !== 'undefined' ) {
            newClassArray[index] = getData;
            //console.log(newClassArray[index]);
        }

        // Get Categories
        if (index == 0) {
            getCategories = medio_content.components;
        }

    });
    createObjectFrontend(newClassArray);
    return getCategories
}

let createObjectFrontend = function(input_array) {
    //let arrayToString = input_array.toString();
    const obj = Object.assign({}, input_array);
    const myJSON = JSON.stringify(obj);

    const currentDiv = document.getElementById("inputs");
    const newParagraph = document.createElement("p");
    newParagraph.setAttribute("id", "inputObj");
    const newContent = document.createTextNode(myJSON);
    newParagraph.appendChild(newContent);
    currentDiv.appendChild(newParagraph);
    //console.log(myJSON);
}


let renderJson = function(input) {

//console.log(input);
let newClass;

//input.forEach (function (medio,index) {

let name = input['name'];
let components;
let url;
let color = input['color'];
let categories = input['categories'];

let activeCategory = $('#news_second_menu').find('.active').attr('id');

for (var loop = 0; loop < categories.length; loop++) {

    var category = categories[loop];

    if(category.name == activeCategory ){

      components = category.components;
      url = category.url;
      frontendInsert(name,color,url,components);
      newClass = new createCategory(name,color,url,components);
      //newClassArray[index] = newClass
    }
}
//});

//console.log(newClassArray);
return newClass;
}


let frontendInsert = function(medio,color,url,components) {

    const currentDiv = document.getElementById("inputs");

    const newParagraph = document.createElement("p");
    newParagraph.setAttribute("id", medio+"-inputs");
    currentDiv.appendChild(newParagraph);

    for (var i = 0; i < components.length; i++) {

        var createDiv = document.createElement("div");
        createDiv.id = medio + "-" + components[i]['type'];
        document.getElementById("news").appendChild(createDiv);
         //console.log();
    }

}

news.insertBefore(portada, news.firstChild);


//console.log(window);

// function sleep(milliseconds) {
//     const date = Date.now();
//     let currentDate = null;
//     do {
//       currentDate = Date.now();
//     } while (currentDate - date < milliseconds);
// }
