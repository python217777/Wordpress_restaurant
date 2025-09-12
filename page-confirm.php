<?php
/*
Template Name: FrontPage
*/
if (!defined('ABSPATH')) exit;
get_header();
?>

<style>

<?php
/*
Template Name: Contact
*/
if (!defined('ABSPATH')) exit;
get_header();
?>
<style>
  .mw_wp_form input {
    margin-top: 5px;
    width: 45%;
    height: 60px;
    font-size: 15px;
    padding: 10px 20px;
    border: 1px solid rgba(102,91,9,0.5);
    transition: border-color 0.3s;
  }

  .mw_wp_form input[name="tel"],
  .mw_wp_form input[name="your-email"] {
    width: 95%;
  }



  .mw_wp_form input:focus {
    border-color: #3b82f6; /* blue-500 */
    outline: none;
  }

  .mw_wp_form input::placeholder {
    color: rgba(102,91,9,0.5);
  }

   .mw_wp_form textarea {
    margin-top: 5px;
    width: 100%;
    height: 250px;
    font-size: 15px;
    padding: 10px 20px;
    border: 1px solid rgba(102,91,9,0.5);
    transition: border-color 0.3s;
    resize: none;
    overflow-y: auto;
    overflow-x: hidden;
  }

  .mw_wp_form textarea:focus {
    border-color: #3b82f6; /* blue-500 */
    outline: none;
  }

  .mw_wp_form textarea::placeholder {
    color: rgba(102,91,9,0.5);
  }


.mw_wp_form .confirm-btn {
    width: 200px;
    height: 50px;
    color: #fff;
    font-size: 15px;
    line-height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #665B09;
    transition: opacity 0.5s;
    border-radius: 8px; /* rounded-lg */
    position: relative;
    overflow: hidden;
    cursor: pointer;
    text-decoration: none; /* remove link underline */
  }

  .mw_wp_form .confirm-btn:hover {
    opacity: 0.7;
  }

  /* optional: style the arrow */
  .mw_wp_form .confirm-btn .arrow {
    margin-left: 8px;
    font-size: 18px;
  }

</style>
</style>

<?php echo do_shortcode( '[mwform_formkey key="71"]' ); ?>

<?php get_footer(); ?>
