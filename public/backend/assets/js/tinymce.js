$(function() {
  'use strict';

  //Tinymce editor
  if ($("#product_editor").length) {
    tinymce.init({
      selector: '#product_editor',
      language:'zh_CN',//注意大小写
      height: 500,
      theme: 'silver',
     

      plugins: [
        'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        'searchreplace wordcount visualblocks visualchars code fullscreen',
      ],
      toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ',
      toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
      image_advtab: true,
      content_style: "img {max-width:100%;}",
      images_upload_url: '/demo/upimg.php',
      templates: [{
          title: 'Test template 1',
          content: 'Test 1'
        },
        {
          title: 'Test template 2',
          content: 'Test 2'
        }
      ],
      content_css: []
    });
  }
  
});