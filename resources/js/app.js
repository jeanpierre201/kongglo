/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

/* ################################ NEWS COMPONENTS ################################### */



fetchJson().then(function(result) {

    //console.log(result);

    result.forEach(element => searchComponent(element['type']));

});

function searchComponent(params) {

    console.log(params);

    switch (params) {
        case 'portada':
          require('./news/components/portada/Index');
          break;
        case 'row-single-text':
          require('./news/components/row-single-text/Index');
          break;
        case 'row-image-title':
          require('./news/components/row-image-title/Index');
          break;
        case 'list-title':
          require('./news/components/list-title/Index');
          break;
        case 'single-text':
          require('./news/components/single-text/Index');
          break;
        case 'list-image-title':
          require('./news/components/list-image-title/Index');
          break;
        case 'carousels-image-text':
          require('./news/components/carousels-image-text/Index');
          break;
        default:
          console.log(`Not component`);
      }

}

//require('./components/Example');
