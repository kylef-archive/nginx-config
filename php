location ~ \.php$ {
    fastcgi_pass 127.0.0.1:53217;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}

