

<div class="container bottom-footer">
            <div class="row">
               <div class="col-lg-12">
                    
                    
                    <p class="pull-left"> © Mountain Lakes Medical Center 2017</p>
                    
                    
                    
                    <p><a class="pull-right" href="contact.php">Contact Us</a></p>
             

               </div>
          
            

            </div>

            

</div><!-- /container -->
         <!-- Bootstrap core JavaScript
    ================================================== -->
         <!-- Placed at the end of the document so the pages load faster -->
         <script src="js/jquery.js" type="text/javascript">
</script><script src="js/bootstrap.js" type="text/javascript">
</script>
<script>
    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });

    // store the currently selected tab in the hash value
    $("ul.nav-tabs > li > a").on("shown.bs.tab", function (e) {
        var id = $(e.target).attr("href").substr(1);
        window.location.hash = id;
    });

    // on load of the page: switch to the currently selected tab
    var hash = window.location.hash;
    $('#myTab a[href="' + hash + '"]').tab('show');
</script>
<script src="js/lightbox.min.js" type="text/javascript"></script>

<!--Chat Client-->




    </body>
</html>
