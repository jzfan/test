<!DOCTYPE html>

<meta charset="utf-8">

<title>Dropzone simple example</title>

<!--
  DO NOT SIMPLY COPY THOSE LINES. Download the JS and CSS files from the
  latest release (https://github.com/enyo/dropzone/releases/latest), and
  host them yourself!
-->
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<div id='crop'>aaa</div>
<p>This is the  example of Dropzone.</p>

<!-- Change /upload-target to your upload address -->
<div  class="dropzone" id='dz'></div>

<script type="text/javascript">
  Dropzone.options.dz = {
      url: '/crop/upload',
      paramName: "file", // The name that will be used to transfer the file
      maxFilesize: 0.2, // MB
      acceptedFiles: 'image/*',
      sending: function(file, xhr, formData){
            formData.append('_token', "<?php echo csrf_token(); ?>");
        },

};

function showimg(res)
{
    $('#crop').html(res);
}

$(function() {
  // Now that the DOM is fully loaded, create the dropzone, and setup the
  // event listeners
  var dz = new Dropzone("#my-dropzone");
  dz.on("success", function(file, response) {
    console.log(response);
  });
})

</script>