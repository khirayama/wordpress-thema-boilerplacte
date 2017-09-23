<?php
// function get_post_views( $postID ) {
//   $count_key = 'post_views_count';
//   $count = get_post_meta( $postID, $count_key, true );
//   if ( $count == '' ) {
//     delete_post_meta( $postID, $count_key );
//     add_post_meta( $postID, $count_key, '0' );
//     return "0 views";
//   }
//   return $count . '';
// }

// function set_post_views( $postID ) {
//   $count_key = 'post_views_count';
//   $count = get_post_meta( $postID, $count_key, true );
//   if ( $count == '' ) {
//     $count = 0;
//     delete_post_meta( $postID, $count_key );
//     add_post_meta( $postID, $count_key, '0' );
//   } else {
//     $count ++;
//     update_post_meta( $postID, $count_key, $count );
//   }
// }

class PageViewLogger {
  private $count_key = 'post_view_count';

  public function get($post_id) {
    $count_key = $this->count_key;
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == 0) {
      delete_post_meta($post_id, $count_key);
      add_post_meta($post_id, $count_key, 0);
    }
    return $count;
  }

  public function count($post_id) {
    $count_key = $this->count_key;
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
      $count = 0;
      delete_post_meta( $post_id, $count_key );
      add_post_meta( $post_id, $count_key, 0);
    } else {
      $count ++;
      update_post_meta($post_id, $count_key, $count);
    }
  }

  public function getPopularPosts($num) {
    $count_key = $this->count_key;
    query_posts('meta_key='.$count_key.'&orderby=meta_value_num&posts_per_page='.$num.'&order=DESC');
  }
}
?>
