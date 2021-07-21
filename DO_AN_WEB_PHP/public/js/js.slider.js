 <div id="w">
    <h1>Horizontal Posts Slider with jQuery</h1>
    
    <nav class="slidernav">
      <div id="navbtns" class="clearfix">
        <a href="#" class="previous">&laquo;</a>
        <a href="#" class="next">&raquo;</a>
      </div>
    </nav>
    
    <div class="crsl-items" data-navigation="navbtns">
      <div class="crsl-wrap">
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="img/thumb01.jpg" alt="nyc subway">
            <span class="postdate">Feb 16, 2014</span>
          </div>
          
          <h3><a href="#">Nguyễn Thị Yến</a></h3>
          
          <p>Suspendisse laoreet eu tortor vel dapibus. Etiam auctor nisl mattis, ornare nibh eu, lobortis leo. Sed congue mi eget velit dictum, id dictum massa tempus. Cras lobortis lectus neque. Fusce aliquet mauris ac bibendum pharetra.</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #1 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="img/thumb02.jpg" alt="danny antonucci">
            <span class="postdate">Feb 19, 2014</span>
          </div>
          
          <h3><a href="#">Biện Thị Hằng</a></h3>
          
          <p>Vestibulum in venenatis velit. Praesent commodo eget purus sed interdum. Curabitur faucibus purus ut erat fermentum posuere. Suspendisse blandit viverra sagittis. Nullam cursus scelerisque lorem ut ornare.</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #2 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="img/thumb03.jpg" alt="watercolor paints">
            <span class="postdate">Feb 23, 2014</span>
          </div>
          
          <h3><a href="#">Nguyễn Văn Huy</a></h3>
          
          <p>Cras eget interdum nunc. Nam suscipit congue augue, id interdum risus adipiscing nec. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla non diam id nisi tempus sodales.</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #3 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="img/thumb04.jpg" alt="apple ipod classic photo">
            <span class="postdate">Mar 02, 2014</span>
          </div>
          
          <h3><a href="#">Classic iPods are Back!</a></h3>
          
          <p>Phasellus condimentum enim nisl, volutpat dapibus turpis euismod nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec id elit lorem. Vivamus at eros elit. Nullam cursus euismod purus.</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #4 -->
        
        <div class="crsl-item">
          <div class="thumbnail">
            <img src="img/thumb05.jpg" alt="web design magazines">
            <span class="postdate">Mar 11, 2014</span>
          </div>
          
          <h3><a href="#">The 10 Best Web Design Magazines</a></h3>
          
          <p>Morbi quis tempus leo, eget vestibulum quam. Pellentesque ac orci urna. Proin vitae neque vel metus pulvinar luctus vitae eu nulla.</p>
          
          <p class="readmore"><a href="#">Read More &raquo;</a></p>
        </div><!-- post #5 -->
      </div><!-- @end .crsl-wrap -->
    </div><!-- @end .crsl-items -->
    
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('.crsl-items').carousel({
    visible: 3,
    itemMinWidth: 180,
    itemEqualHeight: 370,
    itemMargin: 9,
   

    
  });
  
  $("a[href=#]").on('click', function(e) {
    e.preventDefault();
  });
});
</script>