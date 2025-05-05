<?php 

   $map_embed_url = get_sub_field('map_embed_url'); 
   $ofc_title = get_sub_field('office_title'); 
   $ofc_desc = get_sub_field('office_description'); 
   $ofc_address = get_sub_field('office_address'); 
   $phone_no = get_sub_field('phone_number'); 
   $email = get_sub_field('email_address'); 
   $map_direct_url = get_sub_field('maps_directions_url'); 

?>


  <div class="map-section">
        <div class="map-container">
            <?php echo $map_embed_url; ?>
        </div>
        <div class="map-overlay">
            <div class="contact-card">
                <h3><?php echo $ofc_title; ?></h3>
                <p><?php echo $ofc_desc; ?></p>
                <div class="contact-details">
                    <div class="contact-detail-item">
                        <i class="icon">📍</i>
                        <span><?php echo $ofc_address; ?></span>
                    </div>
                    <div class="contact-detail-item">
                        <i class="icon">📞</i>
                        <span><?php echo $phone_no; ?></span>
                    </div>
                    <div class="contact-detail-item">
                        <i class="icon">✉️</i>
                        <span><?php echo $email; ?></span>
                    </div>
                </div>
                <a href="<?php echo $map_direct_url['url']; ?>" target="_blank" class="direction-btn"><?php echo $map_direct_url['title']; ?></a>
            </div>
        </div>
    </div>