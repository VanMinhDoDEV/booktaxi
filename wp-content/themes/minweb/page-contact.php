<?php /*** Template Name: Liên hệ */ ?>
<?php get_header();?>
<div id="sidebox-overlay"></div>
<div class="map-wrapper pt-90">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14899.75894056032!2d105.80683666286198!3d20.995052723564164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac927ce95957%3A0xe230355f8983adb9!2zVGhhbmggWHXDom4sIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1684914811772!5m2!1svi!2s" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<section class="contact-section bd-bottom padding">
   <div class="map"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="contact-details-wrap">
               <div class="contact-title">
                  <h2>Nếu bạn có <span>Câu hỏi gì?</span></h2>
                  <p>Cảm phiền bạn hãy đặt câu hỏi, ý kiến cho chúng tôi để chúng tôi có nhiều hơn cơ hội để đồng hành cùng các bạn!</p>
               </div>
               <ul class="contact-details">
                  <li><i class="fas fa-map-marker-alt"></i><?php echo get_option( 'address' ); ?></li>
                  <li><i class="fas fa-envelope"></i><?php echo get_option( 'email' ); ?></li>
                  <li><i class="fas fa-phone"></i><?php echo get_option( 'phone' ); ?></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="contact-form">
                <?php echo do_shortcode( '[contact-form-7 id="36" title="Form liên hệ"]' ); ?>
                <div id="form-messages" class="alert" role="alert"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>
