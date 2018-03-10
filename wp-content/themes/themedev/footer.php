<footer class="footer">


<div class="footer-copyright1">

 </div>
 <div class="about1">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 about">
          <div class="div-text">CÔNG TY CỔ PHẦN BẤT ĐỘNG SẢN</div>
          <div class="div-text">617 đường Nguyễn Trãi, Thanh Xuân,Hà Nội</div>
          <div class="div-text">Điện thoại: 123456789 | Email: utt@gmail.com</div>

          <div class="div-text">

          </div>
          <div class="div-text">
            Copyright &copy; 2015  fuland.vn All rights reserved.
          </div>
      </div>
    </div>
  </div>
</div>
    </footer><!--end .footer-->

</body>


<script type="text/javascript">

    //sider bar
    $('#category').val('{{$info_search['category']}}');
    $('#type').val('{{$info_search['type']}}');
    $('#city').val('{{$info_search['city']}}');
    var district = '{{$info_search['district']}}';
    if(district !='') $('#display-sibar-district').show();
    $('#district').val('{{$info_search['district']}}');
    $('#area').val('{{$info_search['area']}}');
    $('#amount').val('{{$info_search['amount']}}');
    $('#city').change(function(event){
    event.preventDefault();
        var city_id =  $('#city').val();
        $('#district').empty();
        $('#district')
            .append($("<option></option>")
            .attr("value","")
            .attr("style","color:gray")
            .text("Chọn Quận/Huyện")
            ); //End $('#sibar-quanhuyen')
            $.ajax({
                    url : "{{asset('first/loadDistrict')}}",
                    type : 'get',
                    dataType: 'json',
                    data:{city_id:city_id},
                    success : function (result){
                        $.each(result, function(index, val) {
                             $('#district')
                                 .append($("<option></option>")
                                 .attr("value",val.id)
                                 .text(val.name)
                             ); //End $('#sibar-quanhuyen')
                        });//End $.each(result, function(index, val)

                    }//End success
            });//End ajax
    });//End $('#sibar-tinhtp').change(function(event)

    //side bar
   $('#city').change(function(event){

    event.preventDefault();
     var city_id =  $('#city').val();
     $('#district').empty();
        $('#district')
            .append($("<option></option>")
            .attr("value","")
            .attr("style","color:gray")
            .text("Chọn Quận/Huyện")
            ); //End $('#sibar-quanhuyen')
        $('#display-sibar-district').show();

         $.ajax({
                    url : "{{asset('first/loadDistrict')}}",
                    type : 'get',
                    dataType: 'json',
                    data:{city_id:city_id},
                    success : function (result){

                     $.each(result, function(index, val) {
                         $('#district')
                           .append($("<option></option>")
                           .attr("value",val.id)
                           .text(val.name)
                       ); //End $('#quanhuyen')
                     });//End $.each(result, function(index, val)

                    }//End success
         });//End ajax
   });//End $('#tinhtp').change(function(event)
   //search  sider-bar
   $('#district').change(function(event){

    event.preventDefault();
     var district_id =  $('#district').val();
     $('#street').empty();
        $('#street')
            .append($("<option></option>")
            .attr("value","")
            .attr("style","color:gray")
            .text("Chọn Đường")
            ); //End $('#sibar-quanhuyen')


         $.ajax({
                    url : "{{asset('first/loadStreet')}}",
                    type : 'get',
                    dataType: 'json',
                    data:{district_id:district_id},
                    success : function (result){

                     $.each(result, function(index, val) {
                         $('#street')
                           .append($("<option></option>")
                           .attr("value",val.id)
                           .text(val.name)
                       ); //End $('#quanhuyen')
                     });//End $.each(result, function(index, val)

                    }//End success
         });//End ajax
   });//End $('#tinhtp').change(function(event)
   $('#btnclear').click(function(event) {
        event.preventDefault();
        $('#category').val('');
        $('#type').val('');
        $('#city').val('');
        $('#display-sibar-district').hide();
        $('#district').val('');
        $('#area').val('');
        $('#amount').val('');
   });
   //pagination


//form register(


    tinyMCE.init({
        // General options
        mode : "textareas",
        theme : "advanced",
        plugins : "pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,sreplace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",

        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Example content CSS (should be your site CSS)
        content_css : "css/content.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "lists/template_list.js",
        external_link_list_url : "lists/link_list.js",
        external_image_list_url : "lists/image_list.js",
        media_external_list_url : "lists/media_list.js",

        // Style formats
        style_formats : [
            {title : 'Bold text', inline : 'b'},
            {title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
            {title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
            {title : 'Example 1', inline : 'span', classes : 'example1'},
            {title : 'Example 2', inline : 'span', classes : 'example2'},
            {title : 'Table styles'},
            {title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
        ],

        // Replace values for the template plugin
        template_replace_values : {
            username : "Some User",
            staffid : "991234"
        }
    });
   //End pagination


    function removeAlert(id){
        $('#'+id).hide();
    }
   @yield('js')

    //End form register
</script>

<?php wp_footer(); ?>
</div> <!-- endcontainer -->
</body>
