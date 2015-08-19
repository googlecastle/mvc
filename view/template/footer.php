     
      <!-- FOOTER -->
      

    </div><!-- /.container -->

</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo URL?>assets/js/jquery.min.js"></script>
  
  
  </body>
</html>






<script type="text/javascript">
/**
*   I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
*   but will likely encounter performance issues on larger tables.
*
*   <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
*   $(input-element).filterTable()
*   
* The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
*/
(function(){
    'use strict';
  var $ = jQuery;
  $.fn.extend({
    filterTable: function(){
      return this.each(function(){
        $(this).on('keyup', function(e){
          $('.filterTable_no_results').remove();
          var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr'), $rows2 = $target.find('tbody th');
            $rows2.show(); 
         
          if(search == '') {
            $rows.show(); 
          } else {
            $rows.each(function(){
              var $this = $(this);
              $this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
            })
            if($target.find('tbody tr:visible').size() === 0) {
              var col_count = $target.find('tr').first().find('td').size();
              var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
              $target.find('tbody').append(no_results);
            $rows2=$this.show(); 

            }
          }
        });
      });
    }
  });
  $('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
  $('[data-action="filter"]').filterTable();
  
  $('.container').on('click', '.panel-heading span.filter', function(e){
    var $this = $(this), 
        $panel = $this.parents('.panel');
   
    
    $panel.find('.panel-body').slideToggle();
    if($this.css('display') != 'none') {
      $panel.find('.panel-body input').focus();
   

    }
  });
  $('[data-toggle="tooltip"]').tooltip();
   

})



</script>







