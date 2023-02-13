function post_has_archive($args,$post_type){//設定後にパーマリンク更新
if("post"==$post_type){
  $args["rewrite"]=true;
  $args["has_archive"]="news";
  $args["label"]="お知らせ";
}
return $args;
}
add_filter("register_post_type_args","post_has_archive",10,2);