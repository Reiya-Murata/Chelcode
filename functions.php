<?php

// お知らせアーカイブ作成
function post_has_archive($args,$post_type){//設定後にパーマリンク更新
if("post"==$post_type){
  $args["rewrite"]=true;
  $args["has_archive"]="news";
  $args["label"]="お知らせ";
}
return $args;
}
add_filter("register_post_type_args","post_has_archive",10,2);

// 投稿タイプ追加 
function cpt_register_works(){
  $label=[
    "singular_name"=>"works",
    "edit_item="=>"works",
  ];
  $args=[
    "label"=>"works",
    "labels"=>$labels,
    "description"=>"",
    "public"=>true,
    "show_in_rest"=>true,
    "rest_base"=>"",
    "reset_controller_class"=>"WP_REST_Posts_controller",
    "has_archive"=>true,
    "delete_with_user"=>false,
    "exclude_from_search"=>false,
    "map_meta_cap"=>true,
    "hierarchical"=>true,
    "rewrite"=>["slug"=>"works","with_front"=>true],
    "query_var"=>true,
    "menu_position"=>5,
    "supports"=>["title","editor","thumbnail"],
    ];
    register_post_type("works",$args);
}
add_action("init","cpt_register_works");

// カテゴリー追加 
function cpt_register_dep(){
  $labels=[
    "singular_name"=>"dep",
    ];
    $args=[
      "label"=>"カテゴリー",
      "labels"=>$labels,
      "publicly_queryable"=>true,
      "hierarchical"=>true,
      "show_in_menu"=>true,
      "query_var"=>true,
      "rewrite"=>["slug"=>"dep","with_front"=>true],
      "show_adomin_column"=>false,
      "show_in_rest"=>true,
      "rest_base"=>"dep",
      "rest_controller_class"=>"WP_REST_Terms_controller",
      "show_in_quick_edit"=>false,
      ];
      register_taxonomy("dep",["works"],$args);
}
add_action("init","cpt_register_dep");

function my_scripts_method() {
  wp_enqueue_script(
              'custom_script',
              get_template_directory_uri() . '/vegas.min.js',
        );
  }
  add_action('wp_enqueue_scripts', 'my_scripts_method');
  


?>